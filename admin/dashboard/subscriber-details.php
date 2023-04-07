
<div class="row">
<div class="col-12">
    
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Subscriber Details</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="post" class="form-submit row">
                    
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">First Name</label>
                    <div class="">
                    <input type="text" name="fname" value="<?php echo $data->sFname; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Last Name</label>
                    <div class="">
                    <input type="text" name="lname" value="<?php echo $data->sLname; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Email</label>
                    <div class="">
                    <input type="text" name="email" value="<?php echo $data->sEmail; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Phone</label>
                    <div class="">
                    <input type="number" name="phone" value="<?php echo $data->sPhone; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">State</label>
                    <div class="">
                    <input type="text" name="state" value="<?php echo $data->sState; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Transaction Pin</label>
                    <div class="">
                    <input type="number" name="pin" value="<?php echo $data->sPin; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Registration Date</label>
                    <div class="">
                    <input type="text" value="<?php echo $controller->formatDate($data->sRegDate); ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Last Activity</label>
                    <div class="">
                    <input type="text" value="<?php echo $controller->formatDate($data->sLastActivity); ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Wallet Balance</label>
                    <div class="">
                    <input type="text"  value="N<?php echo number_format($data->sWallet); ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Referral Balance</label>
                    <div class="">
                    <input type="text"  value="N<?php echo number_format($data->sRefWallet); ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="success" class="control-label">Referred By</label>
                    <div class="">
                    <input type="text"  value="<?php echo $data->sReferal; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                 <div class="form-group col-md-6">
                    <label for="success" class="control-label">Bank Name</label>
                    <div class="">
                    <input type="text" value="<?php echo $data->sBankName; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Account Number</label>
                    <div class="">
                    <input type="text" value="<?php echo $data->sBankNo; ?>" class="form-control" readonly required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Account Type</label>
                    <div class="">
                    <select class="form-control" name="accounttype" required>
                        <?php if($data->sType == 1): echo '<option value="1" selected>Subscriber</option>'; else: echo '<option value="1">Subscriber</option>'; endif; ?>
                        <?php if($data->sType == 2): echo '<option value="2" selected>Agent</option>'; else: echo '<option value="2">Agent</option>'; endif; ?>
                        <?php if($data->sType == 3): echo '<option value="3" selected>Vendor</option>'; else: echo '<option value="3">Vendor</option>'; endif; ?>
                    </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="success" class="control-label">Account Status</label>
                    <div class="">
                    <select class="form-control" name="accountstatus" required>
                        <?php if($data->sRegStatus == 0): echo '<option value="0" selected>Active</option>'; else: echo '<option value="0">Active</option>'; endif; ?>
                        <?php if($data->sRegStatus == 1): echo '<option value="1" selected>Blocked</option>'; else: echo '<option value="1">Blocked</option>'; endif; ?>
                        <?php if($data->sRegStatus == 2): echo '<option value="2" selected>Pending Verification</option>'; else: echo '<option value="2">Pending Verification</option>'; endif; ?>
                    </select>
                    </div>
                </div>
                
                <input type="hidden" name="user" value="<?php echo base64_encode($data->sId); ?>" />

                <div class="form-group col-md-6">
                    <div class="">
                       <button type="submit" name="update-subscriber" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update</button>
                       <a href="subscribers" class="btn btn-success"><i class="fa fa-home" aria-hidden="true"></i> Back</a>
                    </div>
                </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>
</div>



