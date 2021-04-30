<?php
    $host='127.0.0.1';
    $db="attendance_db";
    $user='root';
    $pass="";
    $charset='utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo=new PDO($dsn,$user,$pass);//código importante
        /*Código para hacer el crud*/
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){//el catch siempre me pide tipo de error
        //echo "<h1 class='text-danger'>No Database found</h1>";
        throw new PDOException($e->getMessage());//el throw detiene el proceso
    }

    require_once "crud.php";
    $crud = new crud($pdo);
?>