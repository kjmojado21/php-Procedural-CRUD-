<?php 
session_start();

function connection(){
    // the name of our server
    $servername = 'localhost';
    // username of xampp
    $username = 'root';
    // password of xampp
    $password = '';
    // our database name
    $db = 'employee';

    // variable that holds the database connection
    $connection = new mysqli($servername,$username,$password,$db);

    // validation if the connection is  not successful
    if($connection->connect_error){
        die('error database connection'.$connection->connect_error);
    }else{
        // validation if the connection is succesfull
        return $connection;
       

    }
}



// echo connection();




?>