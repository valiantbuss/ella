<div class="row">
    <div class="col-12">
        <div class="box">
            <div class="box-header with-border d-flex align-items-center justify-content-between">
              <h4 class="box-title">All Discount</h4>
			  <a class="btn btn-success btn-rounded text-white" data-toggle="modal" data-target="#addAirtimeDiscount">
				  <i class="fa fa-plus" aria-hidden="true"></i> Add New
			  </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-sm table-bordered table-striped">
					<thead>
						<tr>
							<th>#</th>
			                <th>Network</th>
			                <th>User Pays (%)</th>
			                <th>Agent Pays (%)</th>
			                <th>Vendor Pays (%)</th>
			                <th>Action</th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
                        $cnt=1; $results=$data[0];
                        if($results <> "" && $results <> 1){foreach($results as $result){   ?>
                        <tr>
                            <td><?php echo htmlentities($cnt);?></td>
                            <td><?php echo $result->network; ?></td>
                            <td><?php echo $result->aUserDiscount; ?></td>
                            <td><?php echo $result->aAgentDiscount; ?></td>
                            <td><?php echo $result->aVendorDiscount; ?></td>
                            <td>
                                <a href="#" onclick="editAirtimeDiscount('<?php echo $result->networkid; ?>','<?php echo $result->aUserDiscount; ?>','<?php echo $result->aAgentDiscount; ?>','<?php echo $result->aVendorDiscount; ?>')" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a> 
						    </td>
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

<!-- Add Category Modal -->
<div class="modal modal-fill fade" data-backdrop="false" id="addAirtimeDiscount" tabindex="-1">
				  <div class="modal-dialog">
					<div class="modal-content border">
					  <div class="modal-header bg-info">
						<h5 class="modal-title">Add New Discount</h5>
					</div>
					  <div class="modal-body">
					  <form  method="post" class="form-submit">

                        <div class="form-group">
                            <label for="success" class="control-label">Network</label>
                            <div class="">
                            <select name="network" class="form-control" id="default" required="required">
                              <option value="">Select Network</option>
                              <?php $results=$data[1]; if($results <> "" && $results <> 1){foreach($results as $result){   ?>
                                <option value="<?php echo $result->networkid; ?>" ><?php echo $result->network; ?></option>
                              <?php }} ?>
                              </select>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="success" class="control-label">User Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="User Discount" name="userdiscount" class="form-control" required="required" id="success">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="success" class="control-label">Agent Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="Agent Discount" name="agentdiscount" class="form-control" required="required" id="success">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="success" class="control-label">Vendor Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="Vendor Discount" name="vendordiscount" class="form-control" required="required" id="success">
                            </div>
                        </div>

                       <div class="form-group">
                        <div class="d-flex justify-content-between">
                           <button type="submit" name="add-airtime-discount" class="btn btn-info btn-submit"><i class="fa fa-plus" aria-hidden="true"></i> Add Discount</button>
						   <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
						</div>
                        </div>
                      </form>
					  </div>
					</div>
				  </div>
</div>
<!-- /.modal -->

<!-- Edit Category Modal -->
<div class="modal modal-fill fade" data-backdrop="false" id="editAirtimeDicount" tabindex="-1">
				  <div class="modal-dialog">
					<div class="modal-content border">
					  <div class="modal-header bg-info">
						<h5 class="modal-title">Edit Discount</h5>
					</div>
					  <div class="modal-body">
					  <form  method="post" class="form-submit">

                      <div class="form-group">
                            <label for="success" class="control-label">Network</label>
                            <div class="">
                            <select name="network" id="network" class="form-control" id="default" required="required">
                              <option value="">Select Network</option>
                              <?php $results=$data[1]; if($results <> "" && $results <> 1){foreach($results as $result){   ?>
                                <option value="<?php echo $result->networkid; ?>" ><?php echo $result->network; ?></option>
                              <?php }} ?>
                              </select>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="success" class="control-label">User Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="User Discount" name="userdiscount" class="form-control" required="required" id="userpay">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="success" class="control-label">Agent Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="Agent Discount" name="agentdiscount" class="form-control" required="required" id="agentpay">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="success" class="control-label">Vendor Pays (%)</label>
                            <div class="">
                            <input type="number" placeholder="Vendor Discount" name="vendordiscount" class="form-control" required="required" id="vendorpay">
                            </div>
                        </div>

                       <div class="form-group">
                        <div class="d-flex justify-content-between">
                           <button type="submit" name="update-airtime-discount" class="btn btn-info btn-submit"><i class="fa fa-save" aria-hidden="true"></i> Update Discount</button>
						   <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
						</div>
                        </div>
                      </form>
					  </div>
					</div>
				  </div>
</div>
<!-- /.modal -->


