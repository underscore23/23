<?php
include('restriction.php');  
include_once "../libs/includes.php";
$no_visible_elements=false;
include('header.php');
?>
			<div class="row-fluid sortable" id="userstatus" >
				<div class="box span11">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> User Details</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Email Id</th>
								  <th>Verification Status</th>
								  <th>Banned</th>
                                  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
                          <?php
                            $rego = aGetAllUsers();
                            if(is_array($rego)){
                              if(count($rego) > 0){
                                foreach ($rego as $regi){
                          ?>
							<tr>
								<td><?php echo $regi['email'] ?></td>
								<td>
                                <?php
                                  if($regi['verify'] == 1){
                                    echo '<span class="label label-success">Verified</span>';
                                  } if($regi['verify'] == 0){
                                    echo '<span class="label label-important">Pending</span>';
                                  }
                                ?>
                                </td>
								<td>
                                <?php
                                  if($regi['ban'] == 1){
                                    echo '<span class="label label-important">Banned</span>';
                                  } if($regi['ban'] == 0){
                                    echo '<span class="label label-success">Active</span>';
                                  }
                                ?>
                                </td>
								<td class="center">
									<!--<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>
										View
									</a>-->
									<a class="btn btn-info" href="#">
										<i class="icon icon-compose icon-white"></i>
										Change Password
									</a>
                                    <a class="btn btn-danger" href="#">
										<i class="icon icon-trash icon-white"></i>
										Ban User
									</a>
								</td>
							</tr>
                           <?php
                                }
                              }
                            }
                           ?>
							</tbody>
							</table>
					</div>
				</div><!--/span-->
			</div><!--/row-->

<?php
include('footer.php');
?>
