<?php
include_once "../libs/sg-cons.php";
include_once "../libs/sg-connect.php";
include_once "../libs/tags.php";

include('restriction.php');

$no_visible_elements=false;
include('header.php');
?>
			<div class="row-fluid sortable" id="userstatus" >
				<div class="box span11">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Add New Template </h2>
					</div>
                    <div class="box-content">
                    <h3>Add New Tag</h3>
                        <?php

                          if(isset($_POST['taggie'])) {

                          $tags = $_POST['taggie'];

                          $tng = aGetAllTags();
                                if(is_array($tng)){
                                    if(count($tng) > 0){
                                        foreach ($tng as $rng){
                                           if($tags == $rng['tags']){
                                           echo "This tag already exists <a href='#' onclick='location.reload(true);'>Back to page</a>" ;
                                           exit();
                                }
                            }
                          }
                          }


                          $tes = iInsertTags($tags);
                             if(is_numeric($tes)){
                                echo "Success";
                          } else {
                                echo "Fail";
                          }
                          }
                        ?>
                        <form action="#" method="POST">
                        <input type='text' name='taggie' />
                        <br />
                        <input type='submit' />
                        </form>
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

                          } if($_REQUEST['result'] == 'sameimage'){

                            echo '<div class="alert alert-error">
                                    The main image with same name already exists.
			            	        </div>';

                          } if($_REQUEST['result'] == 'samesecondimage'){

                            echo '<div class="alert alert-error">
                                    The inside image with same name already exists.
						          </div>';

                          }
                          }
                        ?>
						<form class="form-horizontal" action="process.php?addType=temp" method="post" enctype="multipart/form-data">
                                <input type='hidden' name='reg_id' value='<?php echo "reg_id" ?> '/>
                                <input type='hidden' name='date' value='<?php echo date("d-m-Y"); ?>'/>
							    <fieldset>
                                  <div class="control-group">
        								<label class="control-label" for="tags">Tags / Categories</label>
		       						    <div class="controls">
                                           <select id="tags" name="tags[]"  multiple data-rel="chosen">
        									<?php
                                                $tng = aGetAllTags();
                                                if(is_array($tng)){
                                                  if(count($tng) > 0){
                                                    foreach ($tng as $rng){
                                                      echo "<option>".$rng['tags']."</option>";
                                                    }
                                                  }
                                                }
									        ?>
								            </select>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="order">Order</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="order" type="text" value="" name='order'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="tempName">Template Name</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="tempName" type="text" value="" name='tempName'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="price">Price</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="price" type="text" value="" name='price'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        							  <label class="control-label" for="fileInput">Home Image Upload</label>
		        					  <div class="controls">
				           				<input class="input-file uniform_on" name="uploadedfile" id="fileInput" type="file" />
						        		<span style='color: green'><i>Image Size: 698 (width) X  668 (height) </i></span>
							          </div>
       							</div>
	    						<div class="control-group">
		        					  <label class="control-label" for="fileInput">Inside Image One</label>
				        			  <div class="controls">
						        		<input class="input-file uniform_on" name="uploadedfile1" id="fileInput" type="file" />
								        <span style='color: green'><i>Any Size</i></span>
        							  </div>
		    					</div>
                                <div class="control-group">
		        					  <label class="control-label" for="fileInput">Inside Image Two</label>
				        			  <div class="controls">
						        		<input class="input-file uniform_on" name="uploadedfile2" id="fileInput" type="file" />
								        <span style='color: green'><i>Any Size</i></span>
        							  </div>
		    					</div>
                                <div class="control-group">
		        					  <label class="control-label" for="fileInput">Inside Image Three</label>
				        			  <div class="controls">
						        		<input class="input-file uniform_on" name="uploadedfile3" id="fileInput" type="file" />
								        <span style='color: green'><i>Any Size</i></span>
        							  </div>
		    					</div>
                                <div class="control-group">
		        					  <label class="control-label" for="fileInput">Inside Image Four</label>
				        			  <div class="controls">
						        		<input class="input-file uniform_on" name="uploadedfile4" id="fileInput" type="file" />
								        <span style='color: green'><i>Any Size</i></span>
        							  </div>
		    					</div>
                                <div class="control-group">
		        					  <label class="control-label" for="fileInput">Inside Image Five</label>
				        			  <div class="controls">
						        		<input class="input-file uniform_on" name="uploadedfile5" id="fileInput" type="file" />
								        <span style='color: green'><i>Any Size</i></span>
        							  </div>
		    					</div>
                                  <div class="control-group">
            					        <label class="control-label" for="Description">Description</label>
              						    <div class="controls">
            								<textarea class="cleditor" id="Description" rows="3" name='description'></textarea>
			          				    </div>
        						  </div>
                                  <div class="control-group">
        								<label class="control-label" for="previewLink">Preview Link</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="previewLink" type="text" value="" name="previewLink">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="buyLink">Buy Link</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="buyLink" type="text" value="" name="buyLink">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Columns">Columns</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Columns" type="text" value="" name="Columns">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Browser">Browser Compatibility</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Browser" type="text" value="" name="Browser">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Software">Software Version</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Software" type="text" value="" name="Software">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Documentation">Documentation</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Documentation" type="text" value="" name="Documentation">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Layout">Layout Type</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Layout" type="text" value="" name="Layout">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="files">Files Included</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="files" type="text" value="" name="files">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="support">Extended Support</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="support" type="text" value="" name="support">
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