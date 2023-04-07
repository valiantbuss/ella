<?php require_once("includes/route.php"); ?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $assetsLoc; ?>/img/favicon.png">

    <title><?php echo $title; ?> | Admin Dashboard</title>
	
	<!--Css Files -->
	<?php include_once("includes/cssFiles.php"); ?>
 
</head>

<body class="hold-transition skin-blue light-sidebar sidebar-mini">
<div class="wrapper">

  <!--Header Navigation -->
  <?php include_once("includes/header.php"); ?>

  <!--Page Side Navigation Bar-->
  <?php include_once("includes/sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 

  	<!--Page Title -->
	<section class="content-header">
      <?php if($title =="Dashboard"){ echo '<h1><b>Hi '.ucwords(AdminController::$adminName).'</b></h1>'; } 
      else{ echo '<h1>'.$title.'</h1>'; } ?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="ti-dashboard"></i></a></li>
        <li class="breadcrumb-item active"><?php echo $title; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
      <?php echo $msg; ?>
		  <?php include($page); ?>
		
  	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!--Footer -->
  <?php include_once("includes/footer.php"); ?>

</div>
<!-- ./wrapper -->
  	 
	  
<!--Javascript Files -->
<?php include_once("includes/jsFiles.php"); ?>
<script>

  // ************************************************************************************************
  //  Helpers
  // ************************************************************************************************

  //Editor For Posts
  if( $('#editor') != undefined){
    $('#editor').summernote({
      minHeight: 300,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  }
    
  
  //Show That Form Is Been Processed
  $(".form-submit").on("submit",function(){
    $(".btn-submit").addClass("disabled");
    $(".btn-submit").html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Processing ...');
  });

  //Validate Password & Confirm Password
  function validateInput()
  {
    if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
    {
    $("#inputDiv").removeClass("has-success"); $("#inputDiv").addClass("has-danger");
    document.chngpwd.confirmpassword.focus();
    
    }
    else{$("#inputDiv").removeClass("has-danger"); $("#inputDiv").addClass("has-success");}
  }


  // ************************************************************************************************
  //  System Users
  // ************************************************************************************************

  //Show Hidden Key
  function showKey(key){
     $("#key"+key).attr("type","text");
     $("#opt"+key).attr("onclick","closeKey('"+key+"')");
  }
   
  
  //Hide Displayed Key
  function closeKey(key){
     $("#key"+key).attr("type","password");
     $("#opt"+key).attr("onclick","showKey('"+key+"')");
  }

  //Activate/Block Admin User
  function blockUser(id,status){
    swal({   
              title: "Are you sure?",   
              text: "Are you sure you want to change the status of this user?",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Yes",   
              cancelButtonText: "No",   
              closeOnConfirm: false,   
              closeOnCancel: false 
          }, function(isConfirm){   
              if (isConfirm){     
                  $.post("includes/route.php?block-user",{id:id,status:status},function(res){
                   
                  if(res == 0){
                    swal("Success", "User Status Updated Succesfully", "success");
                    setTimeout(function(){
                      $url=window.location.href;
                      window.location.href=$url;
                    },1000);   
                  }
                  else{swal("Error!", "Unable To Update User Status, Please Try Again Later", "error");   }
                });   
              } else {     
                  swal("Cancelled", "Status Not Changed)", "error");   
              } 
      });
  }


  // ************************************************************************************************
  //  Airtime Discount
  // ************************************************************************************************

  //Edit Airtime Discount 
  function editAirtimeDiscount(network,user,agent,vendor){
    $("#network").val(network);
    $("#userpay").val(user);
    $("#agentpay").val(agent);
    $("#vendorpay").val(vendor);
    $("#editAirtimeDicount").modal("show");
  }

  // ************************************************************************************************
  // Data Plan Management
  // ************************************************************************************************

  //Edit Data Plan
  function editDataPlanDetails(plan,network,dataname,datatype,planid,duration,price,userprice,agentprice,vendorprice){
    $("#plan").val(plan);
    $("#network").val(network);
    $("#datatype").val(datatype);
    $("#planid").val(planid);
    $("#duration").val(duration);
    $("#price").val(price);
    $("#userprice").val(userprice);
    $("#agentprice").val(agentprice);
    $("#vendorprice").val(vendorprice);
    $("#dataname").val(dataname);
    $("#editDataPlan").modal("show");
  }

  //Delete Data Plan
  function deleteDataPlan(id){
    swal({   
              title: "Are you sure?",   
              text: "Are you sure you want to delete this data plan?",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Yes",   
              cancelButtonText: "No",   
              closeOnConfirm: false,   
              closeOnCancel: false 
          }, function(isConfirm){   
              if (isConfirm){     
                  $.post("includes/route.php?delete-data-plan",{id:id},function(res){
                   
                  if(res == 0){
                    swal("Success", "Plan Deleted Succesfully", "success");
                    setTimeout(function(){
                      $url=window.location.href;
                      window.location.href=$url;
                    },1000);   
                  }
                  else{swal("Error!", "Unable To Delete Plan, Please Try Again Later", "error");   }
                });   
              } else {     
                  swal("Cancelled", "Plan Not Deleted)", "error");   
              } 
      });
  }

  // ************************************************************************************************
  // Cable Plan Management
  // ************************************************************************************************

  //Edit Cable Plan
  function editCablePlanDetails(plan,provider,planname,planid,duration,price,userprice,agentprice,vendorprice){
    $("#plan").val(plan);
    $("#provider").val(provider);
    $("#planid").val(planid);
    $("#duration").val(duration);
    $("#price").val(price);
    $("#userprice").val(userprice);
    $("#agentprice").val(agentprice);
    $("#vendorprice").val(vendorprice);
    $("#planname").val(planname);
    $("#editCablePlan").modal("show");
  }

  //Delete Cable Plan
  function deleteCablePlan(id){
    swal({   
              title: "Are you sure?",   
              text: "Are you sure you want to delete this cable subscription plan?",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Yes",   
              cancelButtonText: "No",   
              closeOnConfirm: false,   
              closeOnCancel: false 
          }, function(isConfirm){   
              if (isConfirm){     
                  $.post("includes/route.php?delete-cable-plan",{id:id},function(res){
                   
                  if(res == 0){
                    swal("Success", "Plan Deleted Succesfully", "success");
                    setTimeout(function(){
                      $url=window.location.href;
                      window.location.href=$url;
                    },1000);   
                  }
                  else{swal("Error!", "Unable To Delete Plan, Please Try Again Later", "error");   }
                });   
              } else {     
                  swal("Cancelled", "Plan Not Deleted)", "error");   
              } 
      });
  }

  // ************************************************************************************************
  //  Delete Notification
  // ************************************************************************************************

  function deleteNotification(id){
    swal({   
              title: "Are you sure?",   
              text: "Are you sure you want to delete this notification?",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Yes",   
              cancelButtonText: "No",   
              closeOnConfirm: false,   
              closeOnCancel: false 
          }, function(isConfirm){   
              if (isConfirm){     
                  $.post("includes/route.php?delete-notification",{id:id},function(res){
                   
                  if(res == 0){
                    swal("Success", "Notification Deleted Succesfully", "success");
                    setTimeout(function(){
                      $url=window.location.href;
                      window.location.href=$url;
                    },1000);   
                  }
                  else{swal("Error!", "Unable To Delete Notification, Please Try Again Later", "error");   }
                });   
              } else {     
                  swal("Cancelled", "Notification Not Deleted)", "error");   
              } 
      });
  }

  // ************************************************************************************************
  //  Messages
  // ************************************************************************************************

  //Delete Contact Message
  function deleteMessage(id){
    swal({   
              title: "Are you sure?",   
              text: "Are you sure you want to delete this message?",   
              type: "warning",   
              showCancelButton: true,   
              confirmButtonColor: "#DD6B55",   
              confirmButtonText: "Yes",   
              cancelButtonText: "No",   
              closeOnConfirm: false,   
              closeOnCancel: false 
          }, function(isConfirm){   
              if (isConfirm){     
                  $.post("includes/route.php?delete-message",{id:id},function(res){
                   
                  if(res == 0){
                    swal("Success", "Message Deleted Succesfully", "success");
                    setTimeout(function(){
                      $url=window.location.href;
                      window.location.href=$url;
                    },1000);   
                  }
                  else{swal("Error!", "Unable To Delete Message, Please Try Again Later", "error");   }
                });   
              } else {     
                  swal("Cancelled", "Message Not Deleted)", "error");   
              } 
      });
  }
  
  
</script>
</body>

</html>
