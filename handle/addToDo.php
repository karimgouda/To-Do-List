<?php
require_once "../App.php";
if($requset->hasPost('submit')){
   $title = $requset->hasTrim('title');
   $validation->validate("title",$title,["required","str"]);
   $errors = $validation->getError();
   if(empty($errors)){
    $stm = $conn->Prepare("INSERT INTO todo(`title`) value(:title)");
    $stm->bindParam(":title",$title,PDO::PARAM_STR);
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
