<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password == '123'){
    setcookie('username', $username, time()+3600, '/');
    header("location: welcome.php");
    exit();
}
else{
    echo"please enter valid password";
}
?>