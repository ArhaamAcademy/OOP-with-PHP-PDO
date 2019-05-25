<?php

function __autoload($class)
{
    require_once "classes/$class.php";
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

include 'inc/header.php';
include 'content/create-content.php';
include 'inc/footer.php';

?>



  
