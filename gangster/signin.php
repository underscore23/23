<?php
    @session_start();

    include_once ('../libs/includes.php');

    $sEmail = addslashes(@$_REQUEST['semail']);
    $sPassword = md5($_REQUEST['spass']);

    $iLog = aGetUserByEmailPassword($sEmail,$sPassword);
	
	
     if(is_array($iLog)) {
       if(isset($iLog['id'])){

            $_SESSION['flag'] = 1;
            $_SESSION['id'] = $iLog['id'];
            $_SESSION['email'] = $iLog['email'];

            header("location: templates.php");
			echo "Done";
       } else {
            $_SESSION['flag'] = 0;
			echo "1";
    //        session_destroy();
    //        header("location: index.php?result=fail");
       }
    } else {
        $_SESSION['flag'] = 0;
    //    session_destroy();
    //    header("location: index.php?result=fail");
	echo "2";
    }
?>