<?php
require_once "../App.php";
if($requset->hasGet('id')){
   $id = $requset->get('id');
   if($requset->hasGet('name')){
        $name = $requset->get('name');

        $stm = $conn->prepare("update todo set `status`=(:name) where id=(:id)");
        $stm->bindParam(':name',$name,PDO::PARAM_STR);
        $stm->bindParam(':id',$id,PDO::PARAM_INT);
        $out = $stm->execute();
        if($out){
            $requset->header("../index.php");
        }else{
            $requset->header("../index.php");
        }
    }else{
        $requset->header("../index.php");

    }
}else{
    $requset->header("../index.php");

}
