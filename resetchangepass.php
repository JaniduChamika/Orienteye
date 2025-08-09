<?php

require "connection.php";

$e = $_POST["email"];
$np = $_POST["newpass"];
$rnp = $_POST["retypepass"];
$vc = $_POST["vc"];


if(empty($e)){
    echo "Missing email address";
}else if (empty($np)){
    echo "Please enter your new password";
}else if(strlen($np)<8 || strlen($np)>20){
    echo "Password length must between 8 to 20";
}else if (empty($rnp)){
    echo "Please Re-type your password";
}else if ($np !=$rnp){
    echo "Password and Re-type password does not match";
}else if (empty($vc)){
    echo "Please enter your verification code";
}else{
   $rs = Database::search("SELECT * FROM `employee` WHERE `email` ='".$e."' AND `v_code`='".$vc."'");
    if($rs->num_rows==1){
        Database::iud("UPDATE `employee` SET `password`='".$np."' WHERE `email`='".$e."'");
        setcookie("p","",-1);
        echo "Success";
    }else{
        echo "Invalid verification code";
    }
}
