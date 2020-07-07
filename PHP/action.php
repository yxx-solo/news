<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test;","root","123456");
  }catch(PDOException $e){
    die("连接数据库失败".$e->getMessage());
  }


  

// 处理删除操作的页面 

if(isset($_GET['id'])){
  $id = $_GET['id'];
 
}
//删除指定数据  
$_sql="DELETE FROM register WHERE id={$id}"; 
//创建一个结果集
$_result = $pdo->query($_sql);
if($_result){
  echo '删除成功！';
}else{
  echo '删除失败';
}
// 删除完跳转到新闻页
 header("Location:list.php");


  

?>