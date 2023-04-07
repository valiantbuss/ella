<?php

    /*

        * Route For Admin
        * Login
        * Posts
        * Forms

    */
     
    session_start();
    ini_set("display_errors",0); 
    //error_reporting(E_ALL);

    //Verify User Is Logged In
    if(!isset($_SESSION["sysId"]) && !isset($_GET["login"])){header("Location: ../"); exit(); }
    
    //Auto Load Classes
    require_once("auto_loader.php");
    require_once("../../core/helpers/vendor/autoload.php");
    require_once("../../core/helpers/vendor/manifest.php");
    include_once("../../core/includes/sitename.php");

    //Global Variables
    date_default_timezone_set('Africa/Lagos');
    $protocol = (isset($_SERVER['HTTPS'])) ? "https://" : "http://";
    $assetsLoc=$protocol.$_SERVER['SERVER_NAME']."/".$parentdirectory."/assets";
    $urlAddon="./";
    $data="";
    $page="dashboard.php";
    $title="Home";
    $msg="";
    $link=explode("/",$_GET["url"]);
    $url=$link[0];
    $arg1= (!empty($link[1])) ? $link[1] : 0; 
    $arg2= (!empty($link[2])) ? $link[2] : 0; 
    $arg3= (!empty($link[3])) ? $link[3] : 0; 
    $controller="";

    $limit = 100;
	$pageCount = (isset($_GET["page"])) ? $_GET["page"] : 1;
	$pageCount = (int) $pageCount;
    $limit = $pageCount * $limit;
    $limit = $limit - 100;
    $pageCount++;
    

    //Admin Login
    if(isset($_GET["login"])){
        $controller = new AccountAccess;
        echo $controller->verifyAdminLogin();
        exit();
    }
    else{
        global $controller;
        $controller = new AdminController;
    }

    //Admin Logout
    if($url =="logout"){
        $controller->logoutUser();
    }
    
    

    //Block System User
    if(isset($_GET["block-user"])){
        echo $controller->updateAccountStatus();
        exit();
    }

    //Add New System User
    if(isset($_POST["add-new-user"])){
        $msg=$controller->createAccount();
    }

    //Update System User Details
    if(isset($_POST["update-account"])){
        $msg=$controller->updateAdminAccount();
    }

    //Delete A Contact Message
    if(isset($_GET["delete-message"])){
        $msg=$controller->deleteContact();
        exit();
    }


    //Update Api Configurations
    if(isset($_POST["update-api-config"])){
        $msg=$controller->updateApiConfiguration();
    }

    //Update Monnify Configurations
    if(isset($_POST["update-monnify-config"])){
        $msg=$controller->updateMonnifyConfiguration();
    }

    //Update Paystack Configurations
    if(isset($_POST["update-paystack-config"])){
        $msg=$controller->updatePaystackConfiguration();
    }

    //Update Network Settings
    if(isset($_POST["update-network-setting"])){
        $msg=$controller->updateNetworkSetting();
    }

    //Update Contact Settings
    if(isset($_POST["update-contact-setting"])){
        $msg=$controller->updateContactSetting();
    }

    //Update Site Settings
    if(isset($_POST["update-site-setting"])){
        $msg=$controller->updateSiteSetting();
    }

    //Add Airtime Discount
    if(isset($_POST["add-airtime-discount"])){
        $msg=$controller->addAirtimeDiscount();
     }

    //Update Airtime Discount
    if(isset($_POST["update-airtime-discount"])){
        $msg=$controller->updateAirtimeDiscount();
     }

     //Add Data Plan
    if(isset($_POST["add-data-plan"])){
        $msg=$controller->addDataPlan();
     }

    //Update Data Plan
    if(isset($_POST["update-data-plan"])){
        $msg=$controller->updateDataPlan();
     }

    //Delete A Data Plan
    if(isset($_GET["delete-data-plan"])){
        $msg=$controller->deleteDataPlan();
        exit();
    }

     //Add Cable Plan
    if(isset($_POST["add-cable-plan"])){
        $msg=$controller->addCablePlan();
     }

    //Update Cable Plan
    if(isset($_POST["update-cable-plan"])){
        $msg=$controller->updateCablePlan();
     }

    //Delete A Cable Plan
    if(isset($_GET["delete-cable-plan"])){
        $msg=$controller->deleteCablePlan();
        exit();
    }

    //Add Notification
    if(isset($_POST["add-notification"])){
        $msg=$controller->addNotification();
    }

    //Delete A Notification
    if(isset($_GET["delete-notification"])){
        $msg=$controller->deleteNotification();
        exit();
    }

    //Add NotificationCredit Debit User
    if(isset($_POST["credit-debit-user"])){
        $msg=$controller->creditDebitUser();
    }

    //Update Subscriber
    if(isset($_POST["update-subscriber"])){
        $msg=$controller->updateSubscriber();
     }

     //Add New Subscriber
    if(isset($_POST["add-new-subscriber"])){
        $msg=$controller->createSubscriberAccount();
    }

    //Fetch The View Of The Page To Be Displayed
    createView($url);
    if($page == "dashboard.php"){createView("dashboard");}

    
    function createView($url){
    
        if(file_exists($url.".php")){
            global $title,$data,$page;
            $title=str_replace("-"," ",$url);
            $title=ucwords($title);
            $page=$url.".php";
            $data=getDataIfAny($url);
        }
        
    }

    function getDataIfAny($page){
        global $urlAddon,$limit;
        $controller = new AdminController;
        
        switch($page){
            case "system-users":
                return $controller->getAccounts();
                break;
        
            case "airtime-discount":
                $data=array();
                $data[0]=$controller->getAirtimeDiscount();
                $data[1]=$controller->getNetworks();
                return $data;
                break;

            case "data-plans":
                $data=array();
                $data[0]= $controller->getDataPlans();
                $data[1]=$controller->getNetworks();
                return $data;
                break;

            case "cable-tv":
                $data=array();
                $data[0]= $controller->getCablePlans();
                $data[1]=$controller->getCableProvider();
                return $data;
                break;

            case "notifications":
                return $controller->getNotifications();
                break;

            case "messages":
                return $controller->getContact();
                break;
            
            case "subscribers":
                return $controller->getSubscribers();
                break;

            case "subscriber-details":
                if(isset($_GET["apo"])){
                   return $controller->getSubscribersDetails(urldecode(base64_decode($_GET["apo"])));
                }
                else{header("Location: subscribers"); }
                break;

            case "transactions":
                return $controller->getTransactions($limit);
                break;
            
            case "transaction-details":
                return $controller->getTransactionDetails();
                break;
            
            case "dashboard":
                $data=array();
                $data[0]=$controller->getGeneralSiteReports();
                $data[1]=$controller->getWalletBalance();
                return $data;
                break;

            case "api-setting":
                return $controller->getApiConfiguration();
                break;

            case "monnify-setting":
                return $controller->getApiConfiguration();
                break;

            case "paystack-setting":
                return $controller->getApiConfiguration();
                break;

            case "site-setting":
                return $controller->getSiteSettings();
                break;

            case "contact-setting":
                return $controller->getSiteSettings();
                break;

            case "network-setting":
                if(!isset($_GET["network"])){$_GET["network"] = "MTN"; }
                return $controller->getNetworks();
                break;

            case "credit-user":
                if(isset($_GET["apo"])){
                   return urldecode(base64_decode($_GET["apo"]));
                }
                else{header("Location: subscribers"); }
                break;

            default:
                return "";
        }
    }


?>