
<div class="d-flex justify-content-between">
<a class="btn btn-dark btn-bloc mr-2" href="api-setting">General Setting</a> 
<a class="btn btn-primary btn-bloc ml-2" href="monnify-setting">Monnify Setting</a>
<a class="btn btn-info btn-bloc ml-4" href="paystack-setting">Paystack Setting</a>
</div>
<hr/>
<div class="row">
<div class="col-12">
    
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Monnify API Settings</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="post" class="form-submit">
                    
                <div class="form-group">
                    <label for="success" class="control-label">Monnify Api Key</label>
                    <div class="">
                    <input type="text" name="apikey" value="<?php echo $data->monifyApi; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Monnify Secret Key</label>
                    <div class="">
                    <input type="text" name="seckey" value="<?php echo $data->monifySecrete; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Monnify Contract Address</label>
                    <div class="">
                    <input type="text" name="contract" value="<?php echo $data->monifyContract; ?>" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="success" class="control-label">Wallet Topup Charges</label>
                    <div class="">
                    <input type="text" name="charges" value="<?php echo $data->monifyCharges; ?>" class="form-control" required="required">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="success" class="control-label">Monnify Activation</label>
                    <div class="">
                        <select name="status" class="form-control" required="required">
                        <?php if($data->monifyStatus == "On"): ?>
                            <option value="On" selected>On</option>
                            <option value="Off">Off</option>
                        <?php else: ?>
                            <option value="On">On</option>
                            <option value="Off" selected>Off</option>
                        <?php endif; ?>
                        </select>
                    </div>
                </div>
                    
                    

                <div class="form-group">
                    <div class="">
                       <button type="submit" name="update-monnify-config" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update Details</button>
                    </div>
                </div>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>
</div>



