<?php

include('conn.php');

    // if(!isset($_POST['submit'])){
    //     exit('没有值');
    // }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordc = $_POST['passwordc'];
    $eamil = $_POST['email'];


    if(strlen($password)<6){
        exit('密码长度不符合返回<a href="javascrirt:history.back(-1);">注册</a>');

    }
    if($password == $passwordc){
        $che = mysql_query("select username from register where username = '$username' limit 1");
        if(mysql_fetch_array($che)){
            echo'用户名',$username,'已存在返回<a href="javascrirt:history.back(-1);">注册</a>';
            exit;
        }
    }

    $password = md5 ($password);
    $passwordc = md5 ($passwordc);
    $sql = "INSERT INTO register(username,password,passwordc,email)VALUES('$username','$password','$passwordc','$eamil')";
    $res = mysql_query($sql,$conn);
    if($res){
        exit('注册成功!<a href="H_login.html">登录</a>');
    }else{
        echo '注册失败',mysql_error(),'</br>';
        echo '返回<a href="javascrirt:history.back(-1);">注册</a>';
    }
    
?>