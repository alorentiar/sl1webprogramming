<?php

session_start();
$_SESSION['loginSession'] = true;


if(isset($_POST['submit'])){
    //assign biasa
    $u = $_POST['username'];
    $p = $_POST['password'];

    //cek dlu nih itu ada ga, oh kalo ada baru de di assign
    if(isset($_SESSION['usernameSession'])){
        $uS =$_SESSION['usernameSession'];
    }
    if(isset($_SESSION['password1Session'])){
        $pS = $_SESSION['password1Session'];
    }
    //dicek dulu
    if($u == $uS && $p == $pS){
        $_SESSION['loginSession'] = "benar";
        header("location:home.php");
    }else{
        $_SESSION['loginSession'] = "salah";
        header("location:login.php");
    }
}

?>