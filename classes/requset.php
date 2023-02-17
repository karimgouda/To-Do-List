<?php

class Requset{

 public function hasPost($key){

    return isset($_POST[$key]);
 }

 public function hasGet($key){
   return isset($_GET[$key]);
 }
 public function get($key){
   return $_GET[$key];
 }

 public function hasTrim($key){
    return htmlspecialchars($_POST[$key]);
 }

 public function header($key){
    return header("location:$key");
 }

}