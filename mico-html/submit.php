<?php 

if($_POST["username"] &&  $_POST["email"] &&  $_POST["pone"] &&  $_POST["message"]){
    echo 'Your form is submetted.';
}else{
    echo "Please filled in all required fields";
}