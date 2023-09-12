<?php 
if(isset($_POST[''])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $to="sagarabhishek1399@gmail.com";
    $header="from:$email";
    if(mail($to,$msg,$header)){
        $msg1="Message submitted successfully";
    }
    
}
