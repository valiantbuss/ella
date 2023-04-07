
<div class="d-flex justify-content-between">
    <a class="btn btn-warning btn-bloc mr-2" href="network-setting?network=MTN">MTN</a> 
    <a class="btn btn-danger btn-bloc ml-2" href="network-setting?network=AIRTEL">AIRTEL</a>
    <a class="btn btn-success btn-bloc ml-4" href="network-setting?network=GLO">GLO</a>
    <a class="btn btn-info btn-bloc ml-4" href="network-setting?network=9MOBILE">9MOBILE</a>
</div>
<hr/>
<div class="row">
<div class="col-12">
    
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title"><?php echo $_GET["network"]; ?> Network Settings</h4>
            
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="post" class="form-submit">
        <?php foreach($data AS $network): if($network->network == $_GET["network"]): ?>
                <div class="form-group">
                    <label for="success" class="control-label"><?php echo $_GET["network"]; ?> General (All)</label>
                    <div class="">
                        <select name="general" class="form-control" required="required">
                        <?php if($network->networkStatus == "On"): ?>
                            <option value="On" selected>Enable</option>
                            <option value="Off">Disable</option>
                        <?php else: ?>
                            <option value="On">Enable</option>
                            <option value="Off" selected>Disable</option>
                        <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label"><?php echo $_GET["network"]; ?> Airtime</label>
                    <div class="">
                        <select name="airtime" class="form-control" required="required">
                        <?php if($network->airtimeStatus == "On"): ?>
                            <option value="On" selected>Enable</option>
                            <option value="Off">Disable</option>
                        <?php else: ?>
                            <option value="On">Enable</option>
                            <option value="Off" selected>Disable</option>
                        <?php endif;  ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label"><?php echo $_GET["network"]; ?> SME</label>
                    <div class="">
                        <select name="sme" class="form-control" required="required">
                        <?php if($network->smeStatus == "On"): ?>
                            <option value="On" selected>Enable</option>
                            <option value="Off">Disable</option>
                        <?php else: ?>
                            <option value="On">Enable</option>
                            <option value="Off" selected>Disable</option>
                        <?php endif;  ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label"><?php echo $_GET["network"]; ?> Gifting</label>
                    <div class="">
                        <select name="gifting" class="form-control" required="required">
                        <?php  if($network->giftingStatus == "On"): ?>
                            <option value="On" selected>Enable</option>
                            <option value="Off">Disable</option>
                        <?php else: ?>
                            <option value="On">Enable</option>
                            <option value="Off" selected>Disable</option>
                        <?php endif; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="success" class="control-label"><?php echo $_GET["network"]; ?> Corporate</label>
                    <div class="">
                        <select name="corporate" class="form-control" required="required">
                        <?php if($network->corporateStatus == "On"): ?>
                            <option value="On" selected>Enable</option>
                            <option value="Off">Disable</option>
                        <?php else: ?>
                            <option value="On">Enable</option>
                            <option value="Off" selected>Disable</option>
                        <?php endif; ?>
                        </select>
                    </div>
                </div>

                <input type="hidden" name="network" value="<?php echo $network->nId; ?>" />

                <div class="form-group">
                    <div class="">
                       <button type="submit" name="update-network-setting" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update Details</button>
                    </div>
                </div>
        <?php endif; endforeach; ?>
        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>
</div>



