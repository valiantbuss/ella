
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
              <h4 class="box-title">Manage API Settings</h4>
			</div>
            <!-- /.box-header -->
            <div class="box-body">
            <form  method="post" class="form-submit">
                        
                    <div class="form-group">
                        <label for="success" class="control-label">Data Api Key</label>
                        <div class="">
                        <input type="text" name="data" value="<?php echo $data->dApi; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Data Api Url</label>
                        <div class="">
                        <input type="text" name="dataurl" value="<?php echo $data->dLink; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Data Balance Check Url</label>
                        <div class="">
                        <input type="text" name="databal" value="<?php echo $data->dbApi; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Data Fund Account</label>
                        <div class="">
                        <input type="text" name="dataaccount" value="<?php echo $data->dAcc; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Vtu Api Key</label>
                        <div class="">
                        <input type="text" name="vtu" value="<?php echo $data->vApi; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Vtu Api Url</label>
                        <div class="">
                        <input type="text" name="vtuurl" value="<?php echo $data->vLink; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Vtu Balance Check Url</label>
                        <div class="">
                        <input type="text" name="vtubal" value="<?php echo $data->vbApi; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="success" class="control-label">Vtu Fund Account</label>
                        <div class="">
                        <input type="text" name="vtuaccount" value="<?php echo $data->vAcc; ?>" class="form-control" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="success" class="control-label">Cable Api Key</label>
                        <div class="">
                        <input type="text" name="cableapi" value="<?php echo $data->cableApi; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="success" class="control-label">Cable TV IUC Verification Url</label>
                        <div class="">
                        <input type="text" name="cablever" value="<?php echo $data->cvApi; ?>" class="form-control" >
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="success" class="control-label">Cable TV API Url</label>
                        <div class="">
                        <input type="text" name="cable" value="<?php echo $data->cApi; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="success" class="control-label">Electricity Meter Api Key</label>
                        <div class="">
                        <input type="text" name="meterapi" value="<?php echo $data->meterApi; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="success" class="control-label">Electricity Meter Verification Url</label>
                        <div class="">
                        <input type="text" name="electricityver" value="<?php echo $data->mvLink; ?>" class="form-control" >
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="success" class="control-label">Electricity API Url</label>
                        <div class="">
                        <input type="text" name="electricity" value="<?php echo $data->mLink; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="success" class="control-label">Exam Api Key</label>
                        <div class="">
                        <input type="text" name="examapi" value="<?php echo $data->examApi; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="success" class="control-label">Exam Checker API Url</label>
                        <div class="">
                        <input type="text" name="examchecker" value="<?php echo $data->eLink; ?>" class="form-control" >
                        </div>
                    </div>
                        
                        

                    <div class="form-group">
                        <div class="">
                           <button type="submit" name="update-api-config" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update Details</button>
                        </div>
                    </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>



