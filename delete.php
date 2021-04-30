<?php
    require_once "db/conn.php";//debemos tener también la conexión a la base de datos
    if(!$_GET['id']){
        include "includes/errormessage.php";
        header ("Location: viewrecords.php");
    }else{
        //Get id values
        $id=$_GET['id'];
        //call delete function
        $result=$crud->deleteAttendee($id);
        //Redirect to list
        if($result){
            header ("Location: viewrecords.php");
        }else{
            include "includes/errormessage.php";
        }
    }
?>