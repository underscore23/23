<?php
  include('restriction.php');
  include_once "../libs/includes.php";

  // process to add templates
  if(isset($_REQUEST['addType'])){
    if($_REQUEST['addType'] == 'temp'){

    $dir = 'screenshots';
	$files = scandir($dir);
		foreach ($files as $file) if($file !== "." && $file !== ".." ){
			if($file == basename( $_FILES['uploadedfile']['name'])){
				header("location: addtemplate.php?result=sameimage");
				exit();
			}
		}
		if($_FILES['uploadedfile1'] !== ''){
		foreach ($files as $file) if($file !== "." && $file !== ".." ){
			if($file == basename( $_FILES['uploadedfile1']['name'])){
				header("location: addtemplate.php?result=samesecondimage");
				exit();
			}
		}
		}


$target_path = "screenshots/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

$target_path = "screenshots/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

$target_path1 = "screenshots/";
$target_path1 = $target_path1 . basename( $_FILES['uploadedfile1']['name']);

$target_path1 = "screenshots/";
$target_path1 = $target_path1 . basename( $_FILES['uploadedfile1']['name']);

$target_path2 = "screenshots/";
$target_path2 = $target_path2 . basename( $_FILES['uploadedfile2']['name']);

$target_path2 = "screenshots/";
$target_path2 = $target_path2 . basename( $_FILES['uploadedfile2']['name']);

$target_path3 = "screenshots/";
$target_path3 = $target_path3 . basename( $_FILES['uploadedfile3']['name']);

$target_path3 = "screenshots/";
$target_path3 = $target_path3 . basename( $_FILES['uploadedfile3']['name']);

$target_path4 = "screenshots/";
$target_path4 = $target_path4 . basename( $_FILES['uploadedfile4']['name']);

$target_path4 = "screenshots/";
$target_path4 = $target_path4 . basename( $_FILES['uploadedfile4']['name']);

$target_path5 = "screenshots/";
$target_path5 = $target_path5 . basename( $_FILES['uploadedfile5']['name']);

$target_path5 = "screenshots/";
$target_path5 = $target_path5 . basename( $_FILES['uploadedfile5']['name']);

if((move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))){



    $reg_id = addslashes(@$_POST['reg_id']);
    $name = addslashes(@$_POST['tempName']);
    $price = addslashes(@$_POST['price']);
    $descriptions = addslashes(@$_POST['description']);
    $preview_link = addslashes(@$_POST['previewLink']);
    $buy_link = @$_POST['buyLink'];
    $columns = addslashes(@$_POST['Columns']);
    $browser_compatible = addslashes(@$_POST['Browser']);
    $software = addslashes(@$_POST['Software']);
    $documentation = addslashes(@$_POST['Documentation']);
    $layout = addslashes(@$_POST['Layout']);
    $file_list = addslashes(@$_POST['files']);
    $extended_support = addslashes(@$_POST['support']);

    if(isset($_POST['tags'])){
	    $tags = implode(' , ',$_POST['tags']);
    }

    $screenshot = basename( $_FILES['uploadedfile']['name']);
    $other = addslashes(@$_POST['date']);
    $other2 = addslashes(@$_POST['order']);

    if((move_uploaded_file($_FILES['uploadedfile1']['tmp_name'], $target_path1))){
        $other3 = basename( $_FILES['uploadedfile1']['name']);
    } else {
        $other3 = "";
    }

    if((move_uploaded_file($_FILES['uploadedfile2']['tmp_name'], $target_path2))){
        $other4 = basename( $_FILES['uploadedfile2']['name']);
    } else {
        $other4 = "";
    }

    if((move_uploaded_file($_FILES['uploadedfile3']['tmp_name'], $target_path3))){
        $other5 = basename( $_FILES['uploadedfile3']['name']);
    } else {
        $other5 = "";
    }

    if((move_uploaded_file($_FILES['uploadedfile4']['tmp_name'], $target_path4))){
        $other6 = basename( $_FILES['uploadedfile4']['name']);
    } else {
        $other6 = "";
    }

    if((move_uploaded_file($_FILES['uploadedfile5']['tmp_name'], $target_path5))){
        $other7 = basename( $_FILES['uploadedfile5']['name']);
    } else {
        $other7 = "";
    }

    $other8 = '';
    $other9 = '';


    //print_r($_POST); // for debugging

    $tempi = iInsertTemp($reg_id, $name, $price, $descriptions, $preview_link,$buy_link,$columns,$browser_compatible, $software, $documentation, $layout,$file_list, $extended_support, $tags,$screenshot, $other,$other2, $other3, $other4, $other5, $other6, $other7, $other8, $other9 );

    if(is_numeric($tempi)){
      header("location: addtemplate.php?result=pass");
      //echo "Success";
    } else {
      header("location: addtemplate.php?result=fail");
      //echo "Failed";
    }

    } else {
        header("location: addtemplate.php?result=fail");
       // echo "fail";
    }
    }


    // Add User
    if($_REQUEST['addType'] == 'user'){

    $chkUser = aGetAllUsers();

    $email  = addslashes(@$_POST['email']);
    $password = md5(addslashes(@$_POST['password']));
    $verify = 0;
    $ban = 0;

    $rego = aGetAllUsers();
        if(is_array($rego)){
            if(count($rego) > 0){
                foreach ($rego as $regi){
                    if($email == $regi['email']) {

                        header("location: adduser.php?result=same");
                        exit();
                    }
                }
            }
        }

    $regi = iInsertReg($email,$password, $verify, $ban);

    if(is_numeric($regi)){
      header("location: adduser.php?result=pass");
      //echo "Success Regi";
    } else {
      header("location: adduser.php?result=fail");
      //echo "Failed Regi";
    }

    } if($_REQUEST['addType'] == 'editTemp'){

	//print_r($_POST);
	
	
	if(isset($_FILES['screenshot'])){
	
		$target_path = "screenshots/";
		$target_path = $target_path . basename( $_FILES['screenshot']['name']);

		$target_path = "screenshots/";
		$target_path = $target_path . basename( $_FILES['screenshot']['name']);

	}
	
	if(isset($_FILES['other3'])){
		
		$target_path1 = "screenshots/";
		$target_path1 = $target_path1 . basename( $_FILES['other3']['name']);

		$target_path1 = "screenshots/";
		$target_path1 = $target_path1 . basename( $_FILES['other3']['name']);

	}
	
	if(isset($_FILES['other4'])){
		
		$target_path2 = "screenshots/";
		$target_path2 = $target_path2 . basename( $_FILES['other4']['name']);

		$target_path2 = "screenshots/";
		$target_path2 = $target_path2 . basename( $_FILES['other4']['name']);

	}
	
    if(isset($_FILES['other5'])){
		
		$target_path3 = "screenshots/";
		$target_path3 = $target_path3 . basename( $_FILES['other5']['name']);

		$target_path3 = "screenshots/";
		$target_path3 = $target_path3 . basename( $_FILES['other5']['name']);

	}
	
	
	if(isset($_FILES['other6'])){
		
		$target_path4 = "screenshots/";
		$target_path4 = $target_path4 . basename( $_FILES['other6']['name']);

		$target_path4 = "screenshots/";
		$target_path4 = $target_path4 . basename( $_FILES['other6']['name']);

	}
    
	if(isset($_FILES['other7'])){
		
		$target_path5 = "screenshots/";
		$target_path5 = $target_path5 . basename( $_FILES['other7']['name']);

		$target_path5 = "screenshots/";
		$target_path5 = $target_path5 . basename( $_FILES['other7']['name']);
	}

    $id = addslashes(@$_POST['id']);
    $reg_id = addslashes(@$_POST['reg_id']);
    $name = addslashes(@$_POST['tempName']);
    $price = addslashes(@$_POST['price']);
    $descriptions = addslashes(@$_POST['description']);
    $preview_link = addslashes(@$_POST['previewLink']);
    $buy_link = @$_POST['buyLink'];
    $columns = addslashes(@$_POST['Columns']);
    $browser_compatible = addslashes(@$_POST['Browser']);
    $software = addslashes(@$_POST['Software']);
    $documentation = addslashes(@$_POST['Documentation']);
    $layout = addslashes(@$_POST['Layout']);
    $file_list = addslashes(@$_POST['files']);
    $extended_support = addslashes(@$_POST['support']);
	$other = addslashes(@$_POST['date']);
    $other2 = addslashes(@$_POST['order']);

	
    if(isset($_POST['tags'])){
	    $tags = implode(' , ',$_POST['tags']);
    }

    // Update the screen shot or maintain the old image name in case of no change
    if(isset($_FILES['screenshot'])){
        if((move_uploaded_file($_FILES['screenshot']['tmp_name'], $target_path))){
        $screenshot = basename( $_FILES['screenshot']['name']);
    } else {
        $screenshot = "";
    } } else {
		$screenshot = $_POST['screenshot'];
	}
	
	if(isset($_FILES['other3'])){
        if((move_uploaded_file($_FILES['other3']['tmp_name'], $target_path))){
        $other3 = basename( $_FILES['other3']['name']);
    } else {
        $other3 = "";
    } } else {
		$other3 = $_POST['other3'];
	}

	if(isset($_FILES['other4'])){
        if((move_uploaded_file($_FILES['other4']['tmp_name'], $target_path))){
        $other4 = basename( $_FILES['other4']['name']);
    } else {
        $other4 = "";
    } } else {
		$other4 = $_POST['other4'];
	}


	if(isset($_FILES['other5'])){
        if((move_uploaded_file($_FILES['other5']['tmp_name'], $target_path))){
        $other5 = basename( $_FILES['other5']['name']);
    } else {
        $other5 = "";
    } } else {
		$other5 = $_POST['other5'];
	}

	if(isset($_FILES['other6'])){
        if((move_uploaded_file($_FILES['other6']['tmp_name'], $target_path))){
        $other6 = basename( $_FILES['other6']['name']);
    } else {
        $other6 = "";
    } } else {
		$other6 = $_POST['other6'];
	}

	if(isset($_FILES['other7'])){
        if((move_uploaded_file($_FILES['other7']['tmp_name'], $target_path))){
        $other7 = basename( $_FILES['other7']['name']);
    } else {
        $other7 = "";
    } } else {
		$other7 = $_POST['other7'];
	}

    $other8 = "";
    $other9 = "";


    $edo = iUpdateTemp($id,$reg_id, $name, $price, $descriptions, $preview_link,$buy_link,$columns,$browser_compatible, $software, $documentation, $layout,$file_list, $extended_support, $tags,$screenshot, $other,$other2, $other3, $other4, $other5,$other6, $other7, $other8, $other9);

    if(is_numeric($edo)){
        header("location: tempEdit.php?num=$id&result=fail_up");
        //echo "Updation Failed";
    } else {
        header("location: tempEdit.php?num=$id&result=pass_up");
        //echo "Updated";
    }
    }
  }


  // Delete the entire template with Images
    if(isset($_REQUEST['delete_temp'])){
        if($_REQUEST['delete_temp'] == 'temp'){

            // deleting the image from the directory..
            $iId = $_REQUEST['num'];
            $singleTemp = aGetTempById($iId);

            // delete the home page image if it exists
            if($singleTemp['screenshot'] != "") {
            $screenshot = $singleTemp['screenshot'];
            unlink("screenshots/$screenshot");
            }

            // delete the inside page images if they exists
            if($singleTemp['other3'] != "") {
            $other3 = $singleTemp['other3'];
            unlink("screenshots/$other3");
            }

            if($singleTemp['other4'] != "") {
            $other4 = $singleTemp['other4'];
            unlink("screenshots/$other4");
            }

            if($singleTemp['other5'] != "") {
            $other5 = $singleTemp['other5'];
            unlink("screenshots/$other5");
            }

            if($singleTemp['other6'] != "") {
            $other6 = $singleTemp['other6'];
            unlink("screenshots/$other6");
            }

            if($singleTemp['other7'] != "") {
            $other7 = $singleTemp['other7'];
            unlink("screenshots/$other7");
            }


            // deleting the template from the database..
            $id = md5($_REQUEST['num']);
            $delli = aDeleteTemp($id);

            if(is_numeric($delli)){
                header("location: templates.php?result=fail");
                //echo "Failed";
            } else {
                header("location: templates.php?result=pass");
                 // echo "Deleted";
            }
        }
    }


    // To Only Delete the Image..
    if(isset($_REQUEST['deleteimage'])){
        if($_REQUEST['deleteimage'] != ''){

            $img2delete = $_REQUEST['deleteimage'];
            // deleting the image from the directory..
            $iId = $_REQUEST['num'];
            $singleTemp = aGetTempById($iId);

            // delete the home page image if it exists
            if($img2delete == $singleTemp['screenshot']) {

                $screenshot = $singleTemp['screenshot'];
                unlink("screenshots/$screenshot");

                header("location: tempEdit.php?num=$iId&result=pass");
            }


            // delete the inside page images if they exists
            if($img2delete == $singleTemp['other3']) {

                    $other3 = $singleTemp['other3'];
                    unlink("screenshots/$other3");

                    header("location: tempEdit.php?num=$iId&result=pass");
            }

            if($img2delete == $singleTemp['other4']) {

                $other4 = $singleTemp['other4'];
                unlink("screenshots/$other4");

                header("location: tempEdit.php?num=$iId&result=pass");
            }

            if($img2delete == $singleTemp['other5']) {

                $other5 = $singleTemp['other5'];
                unlink("screenshots/$other5");

                header("location: tempEdit.php?num=$iId&result=pass");
            }

            if($img2delete == $singleTemp['other6']) {

                $other6 = $singleTemp['other6'];
                unlink("screenshots/$other6");

                header("location: tempEdit.php?num=$iId&result=pass");
            }

            if($img2delete == $singleTemp['other7']) {

                $other7 = $singleTemp['other7'];
                unlink("screenshots/$other7");

                header("location: tempEdit.php?num=$iId&result=pass");
            }
    }
    }
?>