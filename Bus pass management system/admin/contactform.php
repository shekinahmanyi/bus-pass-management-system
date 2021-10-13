<?php

if(isset($_POST['submit'])){
   $name= $_POST['name'];
   $emailfrom=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];


$emailto="shekinahmanyi@gmail.com";
$headers= "From: ".$emailfrom;
$txt = "you have received an email from ".$name.".\n\n"

   email($emailto,$subject,$txt,$headers);
   header("location:index.php?emailsend");
}

?>