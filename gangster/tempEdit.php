<?php
include('restriction.php');
include_once "../libs/includes.php";
$no_visible_elements=false;
include('header.php');

$iId = $_REQUEST['num'];
$singTemp = aGetTempById($iId);

?>

			<div class="row-fluid sortable" id="userstatus" >
				<div class="box span11">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-view"></i> Edit <?php echo $singTemp['name']; ?> </h2>
					</div>
					<div class="box-content">
                    <?php
                        if(isset($_REQUEST['result'])){
                            if($_REQUEST['result'] == 'pass'){
                                echo '<div class="alert alert-success">
                                        The requested image has been deleted.
		            		         </div>';
                            } if($_REQUEST['result'] == 'pass_up'){
                                echo '<div class="alert alert-success">
                                        The template has been updated.
		            		         </div>';
                            } if($_REQUEST['result'] == 'fail_up'){
                                echo '<div class="alert alert-error">
                                        There was an error while updating the template.
		            		         </div>';
                            }
                         }
                    ?>
						<form class="form-horizontal" action="process.php?addType=editTemp" method="post" enctype="multipart/form-data">
                                <input type='hidden' name='reg_id' value='<?php echo $_id ?> '/>
                                <input type='hidden' name='id' value='<?php echo $singTemp['id']; ?> '/>
                                <input type='hidden' name='date' value='<?php echo date("d-m-Y"); ?>'/>
							    <fieldset>
                                  <div class="control-group">
        								<label class="control-label" for="tags">Tags / Categories</label>
		       						    <div class="controls">
                                           <select id="tags" name="tags[]"  multiple data-rel="chosen">
        									<?php

                                            //echo $singTemp['tags'];
                                                $tng = aGetAllTags();
                                                if(is_array($tng)){
                                                  if(count($tng) > 0){
                                                    foreach ($tng as $rng){
                                                      echo "<option selected>".$rng['tags']."</option>";
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
								            <input class="input-xlarge" id="order" type="text" value="<?php echo $singTemp['other2']; ?>" name='order'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="tempName">Template Name</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="tempName" type="text"  name='tempName' value='<?php echo $singTemp['name']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="price">Price</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="price" type="text" name='price' value='<?php echo $singTemp['price']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
            					        <label class="control-label" for="Description">Description</label>
              						    <div class="controls">
            								<textarea class="cleditor" id="Description" rows="3" name='description'><?php echo $singTemp['descriptions']; ?></textarea>
			          				    </div>
        						  </div>
                                  <div class="control-group">
        								<label class="control-label" for="previewLink">Preview Link</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="previewLink" type="text"  name="previewLink" value='<?php echo $singTemp['preview_link']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="buyLink">Buy Link</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="buyLink" type="text"  name="buyLink" value='<?php echo $singTemp['buy_link']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Columns">Columns</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Columns" type="text"  name="Columns" value='<?php echo $singTemp['columns']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Browser">Browser Compatibility</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Browser" type="text"  name="Browser" value='<?php echo $singTemp['browser_compatible']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Software">Software Version</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Software" type="text"  name="Software" value='<?php echo $singTemp['software']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Documentation">Documentation</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Documentation" type="text"  name="Documentation" value='<?php echo $singTemp['documentation']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Layout">Layout Type</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Layout" type="text"  name="Layout" value='<?php echo $singTemp['layout']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="files">Files Included</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="files" type="text"  name="files" value='<?php echo $singTemp['file_list']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="support">Extended Support</label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="support" type="text"  name="support" value='<?php echo $singTemp['extended_support']; ?>'>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        							  <label class="control-label" for="screenShot">Screen Shot</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);

                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['screenshot']){
            											echo "<img src='screenshots/". $singTemp['screenshot'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['screenshot']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['screenshot'] ?>" name='screenshot' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="screenshot" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
							              </div>
							        </div>
                                    <div class="control-group">
        							  <label class="control-label" for="screenShot">Inside Page 1</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);

                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['other3']){
            											echo "<img src='screenshots/". $singTemp['other3'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['other3']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['other3'] ?>" name='other3' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="other3" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
							              </div>
							        </div>
                                    <div class="control-group">
        							  <label class="control-label" for="screenShot">Inside Page 2</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);
                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['other4']){
            											echo "<img src='screenshots/". $singTemp['other4'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['other4']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['other4'] ?>" name='other4' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="other4" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
							              </div>
							        </div>
                                    <div class="control-group">
        							  <label class="control-label" for="screenShot">Inside Page 3</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);

                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['other5']){
            											echo "<img src='screenshots/". $singTemp['other5'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['other5']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['other5'] ?>" name='other5' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="other5" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
							              </div>
							        </div>
                                    <div class="control-group">
        							  <label class="control-label" for="screenShot">Inside Page 4</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);

                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['other6']){
            											echo "<img src='screenshots/". $singTemp['other6'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['other6']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['other6'] ?>" name='other6' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="other6" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
							              </div>
							        </div>
                                    <div class="control-group">
        							  <label class="control-label" for="screenShot">Inside Page 5</label>
		            					  <div class="controls">
					            		  <?php
								            $imageexists1 = 'No';
            								$dir = 'screenshots';
			            					$files = scandir($dir);

                                    			foreach ($files as $file)
									            	if($file !== "." && $file !== ".." && $file == $singTemp['other7']){
            											echo "<img src='screenshots/". $singTemp['other7'] ."' height='30%' width='30%' /><br /><a href='process.php?num=".$singTemp['id']."&deleteimage=".$singTemp['other7']."'><span style='color: red'>Delete this image</span></a><br /><br />";
			            								$imageexists1 = 'Yes';
						                  ?>
							              <input type='hidden' value="<?php echo $singTemp['other7'] ?>" name='other7' />
							              <?php
								          } if($imageexists1 == 'No'){
							              ?>
							                <input class="input-file uniform_on" name="other7" id="fileInput" type="file" />
							                <span style='color: green'><i>Image Size: Any  </i></span>
							              <?php
							              }
							              ?>
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
