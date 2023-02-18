<?php


$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$dropdown = $_POST['dropdown'];



$mailheader = "Form:".$name."<".$email.">\r\n";


$recipient = "mmhp99bd@gmail.com";

mail($recipient, $number, $dropdown, $mailheader) or die ("Error!");

?>
