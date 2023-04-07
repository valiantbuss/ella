
<div class="d-flex justify-content-between">
<a class="btn btn-dark btn-bloc mr-2" href="site-setting">General Setting</a> 
<a class="btn btn-primary btn-bloc ml-2" href="contact-setting">Contact Details</a>
<a class="btn btn-info btn-bloc ml-4" href="network-setting">Network Setting</a>
</div>
<hr/>
<div class="row">
<div class="col-12">
    
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">General Settings</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="post" class="form-submit">
                    
                <div class="form-group">
                    <label for="success" class="control-label">Website Name</label>
                    <div class="">
                    <input type="text" name="sitename" value="<?php echo $data->sitename; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Website Url</label>
                    <div class="">
                    <input type="text" name="siteurl" value="<?php echo $data->siteurl; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Api Documentation Link</label>
                    <div class="">
                    <input type="text" name="apidocumentation" value="<?php echo $data->apidocumentation; ?>" class="form-control" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="success" class="control-label">Agent Upgrade Fee</label>
                    <div class="">
                    <input type="text" name="agentupgrade" value="<?php echo $data->agentupgrade; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Vendor Upgrade Fee</label>
                    <div class="">
                    <input type="text" name="vendorupgrade" value="<?php echo $data->vendorupgrade; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Wallet to Wallet Transfer Charges</label>
                    <div class="">
                    <input type="text" name="wallettowalletcharges" value="<?php echo $data->wallettowalletcharges; ?>" class="form-control" required="required">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Account Upgrade)</label>
                    <div class="">
                    <input type="text" name="referalupgradebonus" value="<?php echo $data->referalupgradebonus; ?>" class="form-control" required="required">
                    </div>
                </div> 

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Airtime Purchase)</label>
                    <div class="">
                    <input type="text" name="referalairtimebonus" value="<?php echo $data->referalairtimebonus; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Data Purchase)</label>
                    <div class="">
                    <input type="text" name="referaldatabonus" value="<?php echo $data->referaldatabonus; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Cable Tv)</label>
                    <div class="">
                    <input type="text" name="referalcablebonus" value="<?php echo $data->referalcablebonus; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Exam Pin)</label>
                    <div class="">
                    <input type="text" name="referalexambonus" value="<?php echo $data->referalexambonus; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Electricity Bill)</label>
                    <div class="">
                    <input type="text" name="referalmeterbonus" value="<?php echo $data->referalmeterbonus; ?>" class="form-control" required="required">
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label">Referral Bonus (Wallet Funding)</label>
                    <div class="">
                    <input type="text" name="referalwalletbonus" value="<?php echo $data->referalwalletbonus; ?>" class="form-control" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="">
                       <button type="submit" name="update-site-setting" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update Details</button>
                    </div>
                </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>
</div>



