<?php
require_once "../App.php";
if($requset->hasPost('submit')&& $requset->hasGet('id')){
    $id = $requset->get('id');
    $title = $requset->hasTrim('title');

    $validation->validate('title',$title,['required','str']);
    $errors = $validation->getError();
    if(empty($errors)){
        $stm =$conn->prepare("select `title` from todo where id=(:id)");
        $stm->bindParam('id',$id,PDO::PARAM_INT);
       $out = $stm->execute();
       if($out== true){
            $stm = $conn->prepare("update todo set title=(:title) where id=(:id)");
            $stm->bindParam('title',$title,PDO::PARAM_STR);
            $stm->bindParam('id',$id,PDO::PARAM_INT);
            $is_update = $stm->execute();
            if($is_update==true){
                $requset->header('../index.php');
            }
       }
    }
}