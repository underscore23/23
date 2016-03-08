<?php
@session_start();

$_SESSION['flag'] = '';
$_SESSION['id'] = '';
$_SESSION['email'] = '';

unset($_SESSION['flag']);
unset($_SESSION['id']);
unset($_SESSION['email']);

$_flag = 0;

session_destroy();

$_flag='';
$thisPage="logout";

 ?>
  <div id="inner_content_body">
    <div class="left_content_body">
      <center>
        You have been successfully logged out. 
        <a href='../index.php'>Back to Website</a>
      </center>
     <br />
      <br />
      <div class="contact">
      </div>
    </div>
  </div>
