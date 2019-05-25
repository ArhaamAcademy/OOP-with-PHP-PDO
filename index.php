<?php

function __autoload($class)
{
    require_once "classes/$class.php";
}

if(isset($_GET['del'])){
   $id = $_GET['del'];
    
    $employee = new Employee();
    $employee->delete($id);
}

include 'inc/header.php';
include 'content/home-content.php';
include 'inc/footer.php';
?>
