<?php
require_once "../App.php";
if($requset->hasGet('id')){
    $id = $requset->get('id');
    if($requset->hasGet('name')){
        $name = $requset->get('name');
        $status = 2;
        $stm = $conn->prepare("update todo set `status`=(:status) where id=(:id)");
        $stm->bindParam(':status',$status,PDO::PARAM_INT);
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
