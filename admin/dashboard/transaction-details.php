
<div class="row">
<div class="col-12">
    
    <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Transaction Details</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <div class="table-responsive">
        
        <table class="table table-bordered table-striped">
                    <tr>
                        <td><b>Transaction No:</b></td>
                        <td><?php echo $data->transref; ?></td>
                    </tr>
                    <tr>
                        <td><b>Service:</b></td>
                        <td><?php echo $data->servicename; ?></td>
                    </tr>
                    <tr>
                        <td><b>Description:</b></td>
                        <td><?php echo $data->servicedesc; ?></td>
                    </tr>
                    <tr>
                        <td><b>Amount:</b></td>
                        <td>N<?php echo $data->amount; ?></td>
                    </tr>
                     <tr>
                        <td><b>Old Balance:</b></td>
                        <td>N<?php echo $data->oldbal; ?></td>
                    </tr>
                     <tr>
                        <td><b>New Balance:</b></td>
                        <td>N<?php echo $data->newbal; ?></td>
                    </tr>
                    <tr>
                        <td><b>Status:</b></td>
                        <td><?php echo $controller->formatStatus($data->status); ?></td>
                    </tr>
                    <tr>
                        <td><b>Date:</b></td>
                        <td><?php echo $controller->formatDate($data->date); ?></td>
                    </tr>
                    <tr>
                        <td><b>By User:</b></td>
                        <td><?php echo $data->sFname ."(".$data->sEmail.")"; ?></td>
                    </tr>
                    

                </table>
                
                <br/>
                <a href="transactions" class="btn btn-success btn-block"><i class="fa fa-home" aria-hidden="true"></i> Back To Transactions</a>
                   
        
        </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
</div>
</div>



