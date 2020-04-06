<?php
    $input_password = "6074c6aa3488f3c2dddff2a7ca821aab";
    $email = $_POST['email'];
    $password = trim($_POST['password']);
    if($password != null){
        if(md5($password) == $input_password){
            echo "Password is valid";
        }
        else{
            echo "Password is invalid";
        }
    }
?>