<?php

function __autoload($class)
{
    require_once "classes/$class.php";
}

if(isset($_GET['id'])){
    
    $uid = $_GET['id'];
    
    $employee = new Employee();
    $result = $employee->selectOne($uid);
}

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $city = $_POST['city'];
    $designation = $_POST['designation'];
    
    $fields = [
    'name'=>$name,
    'city'=>$city,
    'designation'=>$designation
    ];
    
    
    $employee = new Employee();

    $employee->insert($fields);
}

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $city = $_POST['city'];
    $designation = $_POST['designation'];
    
    $fields = [
    'name'=>$name,
    'city'=>$city,
    'designation'=>$designation
    ];
    
    $id = $_POST['id'];
    $employee = new Employee();    
    $employee->update($fields, $id);
}

include 'inc/header.php';
include 'content/edit-content.php';
include 'inc/footer.php';

?>



  
