<div class="row">
    <div class="col-12">
    <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">Search Transactions</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="GET">
                     <div class="input-group">
                      <input type="text" class="form-control mr-2" placeholder="Search for..." name="search" aria-label="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                      </span>
                        </div>
                </form>
            </div>
        </div>
        <?php if(isset($_GET["search"])): echo $controller->createNotification1("alert-info","<b>Showing Result For Search Key: '".$_GET["search"]."' </b> "); endif; ?> 
        
        <div class="box">
            <div class="box-header with-border d-flex justify-content-between">
              <h4 class="box-title">All Transactions</h4>
              <a class="btn btn-info btn-sm" href="transactions?page=<?php echo $pageCount; if(isset($_GET["search"])): echo "&search=".$_GET["search"]; endif; ?>">Next 100 Transaction</a>
			</div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-sm table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
			                <th>Ref Id</th>
			                <th>User</th>
			                <th>User Type</th>
			                <th>Phone</th>
			                <th>Service</th>
			                <th>Description</th>
			                <th>Amount</th>
			                <th>Status</th>
			                <th>Date</th>
			            </tr>
					</thead>
					<tbody>
					
					<?php 
                        $cnt=1; $results=$data;
                        if($results <> "" && $results <> 1){foreach($results as $result){   ?>
                        <tr>
                            <td><?php echo htmlentities($cnt);?></td>
                            <td><a href="transaction-details?ref=<?php echo $result->transref; ?>" class="text-info"><b><?php echo $result->transref; ?></b></a></td>
                            <td><?php echo $result->sEmail;?></td>
                            <td><?php echo $controller->formatUserType($result->sType);?></td>
                            <td><?php echo $result->sPhone;?></td>
                            <td><?php echo $result->servicename;?></td>
                            <td><?php echo $result->servicedesc;?></td>
                            <td>N<?php echo $result->amount;?></td>
                            <td><?php echo $controller->formatTransStatus($result->status); ?></td>
                            <td><?php echo $controller->formatDate($result->date);?></td>
                        </tr>
                        <?php $cnt=$cnt+1;}} ?>
						
					</tbody>
					</table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
</div>




