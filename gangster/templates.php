<?php
include('restriction.php');
include_once "../libs/includes.php";
$no_visible_elements=false;
include('header.php');
?>
			<div class="row-fluid sortable" id="userstatus" >
				<div class="box span11">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Template Details</h2>
					</div>
					<div class="box-content">
                         <?php
                          if(isset($_REQUEST['result'])){
                            if($_REQUEST['result'] == 'pass'){

                            echo '<div class="alert alert-success">
                                    The template has been successfully added.
		            		      </div>';
                            } if($_REQUEST['result'] == 'fail'){

                            echo '<div class="alert alert-error">
                                    There was an error while adding the template; kindly try again later.
						          </div>';
                          }
                          }
                        ?>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Date</th>
								  <th>Name</th>
								  <th>User</th>
								  <th>Price</th>
								  <th>Home SS</th>
								  <th>Descriptions</th>
								  <th>Preview Link</th>
								  <th>Buy Link</th>
								  <th>Tags</th>
                                  <th>Actions</th>
							  </tr>
						  </thead>
						  <tbody>
                          <?php
                            $tempo = aGetAllTemps();
                            if(is_array($tempo)){
                              if(count($tempo) > 0){
                                foreach ($tempo as $timp){
                          ?>
							<tr>
								<td class="center"><?php echo $timp['other']; ?></td>
								<td><?php echo $timp['name']; ?></td>
								<td><?php echo $timp['reg_id']; ?></td>
								<td><?php echo $timp['price']; ?></td>
                                <td><?php echo "<img src='screenshots/".$timp['screenshot']."' />"; ?></td>
								<td><?php echo $timp['descriptions']; ?></td>
								<td><?php echo $timp['preview_link']; ?></td>
								<td><?php echo $timp['buy_link']; ?></td>
								<td><?php echo $timp['tags']; ?></td>
								<td class="center">
									<a class="btn btn-success" href="tempView.php?num=<?php echo $timp['id']; ?>">
										<i class="icon-zoom-in icon-white"></i>
										View
									</a>
									<a class="btn btn-info" href="tempEdit.php?num=<?php echo $timp['id']; ?>">
										<i class="icon icon-compose icon-white"></i>
										Edit
									</a>
                                    <a class="btn btn-danger" href="process.php?delete_temp=temp&num=<?php echo $timp['id']; ?>">
										<i class="icon icon-trash icon-white"></i>
										Delete
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
