<?php
include('restriction.php');  
$no_visible_elements=false;
include('header.php');
?>
			<div class="row-fluid sortable" id="userstatus" >
				<div class="box span11">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add New User</h2>
					</div>

					<div class="box-content">
                        <?php
                          if(isset($_REQUEST['result'])){
                            if($_REQUEST['result'] == 'pass'){
                        ?>
                        <div class="alert alert-success">
                            The user has been successfully added.
						</div>
                        <?php
                            } if($_REQUEST['result'] == 'same'){
                        ?>
                        <div class="alert alert-error">
                            The email id is already registered.
						</div>
                        <?php
                          } if($_REQUEST['result'] == 'fail'){
                        ?>
                        <div class="alert alert-error">
                            There was an error while adding the user; kindly try again later.
						</div>
                        <?php
                          }
                          }
                        ?>
						<form class="form-horizontal" action="process.php?addType=user" method="post">
							    <fieldset>
                                  <div class="control-group">
        								<label class="control-label" for="email">Email Id</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="email" type="text" value="" name='email'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="password">Password</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="password" type="password" value="" name='password'>
    								    </div>
	        					  </div>
							    </fieldset>
                                <div class="form-actions">
    							   <button type="submit" class="btn btn-primary">Save changes</button>
		    					</div>
						</form>
					</div>
				</div><!--/span-->
			</div><!--/row-->

<?php
include('footer.php');
?>
