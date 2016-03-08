<?php
include_once  "sg-cons.php";
include_once  "sg-connect.php";
include_once  "sales.php";


$payment_id = $_POST['payment_id'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];
$offer_slug = $_POST['offer_slug'];
$offer_title = $_POST['offer_title'];
$buyer = $_POST['buyer'];
$unit_price = $_POST['unit_price'];
$amount = $_POST['amount'];
$fees = $_POST['fees'];
$mac = $_POST['mac'];
$currency = $_POST['currency'];
$e1 = '';
$e2 = '';
$e3 = '';
$e4 = '';
$e5 = '';
$e6 = '';
$e7 = '';
$e8 = '';

if($payment_id != "" && $quantity != "" && $status != "" && $offer_slug != "" && $offer_title != "" && $buyer != "" && $unit_price != "" && $amount != "" && $fees != "" && $mac != "" && $currency != "") {

$weRock = iInsertSales($payment_id,$quantity,$status,$offer_slug,$offer_title,$buyer,$unit_price,$amount,$fees,$mac,$currency,$e1,$e2,$e3,$e4,$e5,$e6, $e7, $e8);

if(is_numeric($weRock)){
   header("location: ../index.php");
  //  echo "Updation Failed";
} else {
   header("location: ../index.php");
     //  echo "Updated";
}

} else {
    header("http://www.google");
}


?>