<?php
ini_set( "display_errors" , "on");
error_reporting(E_ALL);

$errorMSG = "";


//get data from form  
$txtname = $_POST['name'];
$txtemail= $_POST['email'];
$txtmessage= $_POST['message'];


$to = "yildizimparlak3333@gmail.com";
$subject = "Mail From website";

$Body = "";
$Body .= "Name: ";
$Body .= $txtname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $txtemail;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $txtmessage;
$Body .= "\n";


$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";


$success = mail($to, $subject, $Body, $headers );

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
        print_r(error_get_last());
    } else {
        echo $errorMSG;
    }
}
?>