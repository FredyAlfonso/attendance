<?php
    require_once "db/conn.php";//debemos tener también la conexión a la base de datos

    if (isset($_POST['submit'])){
        $id=$_POST['id'];
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $specialty=$_POST['specialty'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $contact=$_POST['phone'];

        //call crud function
        $result=$crud->editAttendee($id,$fname,$lname,$dob,$email,$contact,$specialty);
        //Redirect to index php
        if ($result){
            header("Location: viewrecords.php");
        }else{
            include "includes/errormessage.php";
        }
    }else{
        include "includes/errormessage.php";
    }
?>