<?php
require_once "../App.php";

if($requset->hasGet('id')){
    $id = $requset->get('id');
    $stm =$conn->prepare("select `title` from todo where id=(:id)");
    $stm->bindParam('id',$id,PDO::PARAM_INT);
   $out = $stm->execute();
   if($out==true){
    $stm = $conn->prepare("delete from todo where id=(:id)");
    $stm->bindParam('id',$id,PDO::PARAM_INT);
    $is_deleting = $stm->execute();
    if($is_deleting==true){
        $requset->header('../index.php');
    }
   }
}