<?php
//require "detectLocation.php";

$thisPage = 'contact';

include "header.php";
include "menu.php";
?>
        	<div class="container">
				<div class="row center">
			        <div class="col-md-12">
                       <br />
                       <h3>Contact Us</h3>
					    <p >
                            If you have pre-purchase, post-purchase or any other questions, do contact us.
                            <br />
                             Kindly follow the instructions carefully, to help us process your request efficiently.
					    </p>
                       <hr />
					</div>
			   </div>
			</div>
            <div class="container">
				<div class="row center">
                    <div class="alert alert-success hidden" id="contactSuccess">
					    <strong>Success!</strong> Your message has been sent to us.
					</div>
					<div class="alert alert-error hidden" id="contactError">
					        <strong>Error!</strong> There was an error sending your message.
					</div>
                    <form action="" id="contactForm" type="POST">
			        <div class="form-group">
                        <div class="col-md-4"></div>
						<div class="col-md-4">
					            <label>Your name <span class="red">*</span></label>
				                <input type="text" value="" data-msg-required="Kindly enter your name." maxlength="100" class="form-control" name="name" id="name">
					    </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
					    <div class="col-md-4">
								<label>Your email address <span class="red">*</span></label>
				                <input type="email" value="" data-msg-required="Kindly enter your email address."  maxlength="100" class="form-control" name="email" id="email">
					    </div>
                        <div class="col-md-4"></div>
				    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
					    <div class="col-md-4">
								<label>Query Type <span class="red">*</span></label>
				                <select class="form-control" name="query" id="query" data-msg-required="Kindly select an option">
                                    <option value="">--Select an Option--</option>
                                    <option>Pre-Purchase Enquiry</option>
                                    <option>Post-Purchase Enquiry</option>
                                    <option>General Questions</option>
                                </select>
					    </div>
                        <div class="col-md-4"></div>
				    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
					    <div class="col-md-4">
    		        	        <label>Subject <span class="red">*</span></label>
	        				    <input type="text" value="" data-msg-required="Kindly enter a subject." maxlength="100" class="form-control" name="subject" id="subject">
					    </div>
                        <div class="col-md-4"></div>
				    </div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
					    <div class="col-md-4">
    		        	        <label>Template Name </label>
	        				    <input type="text" value="" maxlength="100" class="form-control" name="template" id="template">
					    </div>
                        <div class="col-md-4"></div>
				    </div>
                    <div class="form-group">
                        <div class="col-md-3"></div>
					    <div class="col-md-6">
    		        	        <label>Message <span class="red">*</span></label>
								<textarea maxlength="5000" data-msg-required="Kindly enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
					    </div>
                        <div class="col-md-3"></div>
				    </div>
                    <div class="form-group">
                        <div class="col-md-5"></div>
					    <div class="col-md-2">
    		        	       <input type="submit" value="Send Message" class="btn btn-primary" data-loading-text="Loading...">
					    </div>
                        <div class="col-md-5"></div>
				    </div>
                    </form>
			   </div>
			</div>



<?php
include "footer.php";
?>