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
						<h2><i class="icon-view"></i> <?php echo $singTemp['name']; ?> </h2>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="process.php?addType=editTemp" method="post">
							    <fieldset>
                                  <div class="control-group">
        								<label class="control-label" for="tags"><b>Tags / Categories</b></label>
		       						    <div class="controls">
                                            <input type="text" value="<?php echo $singTemp['tags'] ?>" readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="order"><b>Order</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="order" type="text" value="<?php echo $singTemp['other2']; ?>" name='order' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="tempName"><b>Template Name</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="tempName" type="text"  name='tempName' value='<?php echo $singTemp['name']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="price"><b>Price</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="price" type="text" name='price' value='<?php echo $singTemp['price']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                                                    <div class="control-group">
            					        <label class="control-label" for="Description"><b>Description</b></label>
              						    <div class="controls">
            								<span><?php echo $singTemp['descriptions']; ?></span>
			          				    </div>
        						  </div>
                                  <div class="control-group">
        								<label class="control-label" for="previewLink"><b>Preview Link</b></label>
		       						    <div class="controls">
								            <span><a href="<?php echo $singTemp['preview_link']; ?>"><?php echo $singTemp['preview_link']; ?></a></span>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="buyLink"><b>Buy Link</b></label>
		       						    <div class="controls">
                                            <span><a href="<?php echo $singTemp['buy_link']; ?>"><?php echo $singTemp['buy_link']; ?></a></span>
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Columns"><b>Columns</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Columns" type="text"  name="Columns" value='<?php echo $singTemp['columns']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Browser"><b>Browser Compatibility</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Browser" type="text"  name="Browser" value='<?php echo $singTemp['browser_compatible']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Software"><b>Software Version</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Software" type="text"  name="Software" value='<?php echo $singTemp['software']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Documentation"><b>Documentation</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Documentation" type="text"  name="Documentation" value='<?php echo $singTemp['documentation']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="Layout"><b>Layout Type</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="Layout" type="text"  name="Layout" value='<?php echo $singTemp['layout']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="files"><b>Files Included</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="files" type="text"  name="files" value='<?php echo $singTemp['file_list']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="support"><b>Extended Support</b></label>
		       						    <div class="controls">
								            <input class="input-xlarge" id="support" type="text"  name="support" value='<?php echo $singTemp['extended_support']; ?>' readonly="readonly">
    								    </div>
	        					  </div>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Home Screen Shot</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['screenshot']; ?>" alt="" height='30%' width='30%' />
    								    </div>
	        					  </div>
                                  <?php
                                    if($singTemp['other3'] != "" ) {
                                  ?>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Inside SS 2</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['other3']; ?>"  height='30%' width='30%' alt="" />
    								    </div>
	        					  </div>
                                  <?php
                                    }
                                  ?>
                                  <?php
                                    if($singTemp['other4'] != "" ) {
                                  ?>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Inside SS 3</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['other4']; ?>" alt="" height='30%' width='30%' />
    								    </div>
	        					  </div>
                                  <?php
                                    }
                                  ?>
                                  <?php
                                    if($singTemp['other5'] != "" ) {
                                  ?>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Inside SS 4</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['other5']; ?>" alt="" height='30%' width='30%' />
    								    </div>
	        					  </div>
                                  <?php
                                    }
                                  ?>
                                  <?php
                                    if($singTemp['other6'] != "" ) {
                                  ?>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Inside SS 5</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['other6']; ?>" alt="" height='30%' width='30%' />
    								    </div>
	        					  </div>
                                  <?php
                                    }
                                  ?>
                                  <?php
                                    if($singTemp['other7'] != "" ) {
                                  ?>
                                  <div class="control-group">
        								<label class="control-label" for="screenShot"><b>Inside SS 6</b></label>
		       						    <div class="controls">
                                            <img src="screenshots/<?php echo $singTemp['other7']; ?>" alt="" height='30%' width='30%' />
    								    </div>
	        					  </div>
                                  <?php
                                    }
                                  ?>
							    </fieldset>
						</form>

					</div>
				</div><!--/span-->
			</div><!--/row-->
<?php
include('footer.php');
?>
