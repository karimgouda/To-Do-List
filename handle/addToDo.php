<?php
require_once "../App.php";
session_start();
if($requset->hasPost('submit')){
   $title = $requset->hasTrim('title');
   $validation->validate("title",$title,["required","str"]);
   $errors = $validation->getError();
   if(!empty($title)){
        $stm = $conn->Prepare("INSERT INTO todo(`title`) value(:title)");
        $stm->bindParam(":title",$title,PDO::PARAM_STR);
        $out = $stm->execute();
        $requset->header("../index.php");
       session_destroy();
   }else{

       $_SESSION['errors'] = 'validation Required';
        $requset->header("../index.php");

   }
}else{
    $requset->header("../index.php");
}
