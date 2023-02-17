<?php

try{

    $conn = new PDO("mysql:host=localhost;port=3306;dbname=to-do-list","root","");
}catch(Exception $error){
    echo "Connection faild".$error->getMessage();
}

