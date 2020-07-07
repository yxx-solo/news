<?php
    include('conn.php');
    $username = $_POST['loginname'];
    $password = md5($_POST['loginpassword']);
    $che = mysql_query("select id from register where username = '$username' and password = '$password' limit 1");
    $result = mysql_fetch_array($che);
    if($result){
        header('Location: index.html');
    }else{
        echo '登录失败';
    }


    











?>