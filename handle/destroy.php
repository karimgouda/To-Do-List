<?php
require_once "../App.php";
session_start();
session_destroy();
$requset->header("../index.php");