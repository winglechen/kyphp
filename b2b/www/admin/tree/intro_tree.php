<?php
session_start();

if(!isset($_SESSION['name']) || empty($_SESSION['name'])){
    header('Location:../login.php');
    exit;
}

define ("TREE_TABLE_PREFIX", "intro");
include __DIR__. '/index.php';
