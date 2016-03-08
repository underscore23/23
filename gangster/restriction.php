<?php
    @session_start();
    $_flag = 0;
    $_id = '';
    $_email = '';

    if(isset($_SESSION['email']) && isset($_SESSION['flag'])){
      if($_SESSION['flag'] == 1){
        $_flag = 1;
        $_id = $_SESSION['id'];
        $_email = $_SESSION['email'];

      } else {
        $_SESSION['flag'] = 0;
        session_destroy();
        header("location: index.php");
      }
    } else{
        $_SESSION['flag'] = 0;
        session_destroy();
        header ("location: index.php");
    }

?>