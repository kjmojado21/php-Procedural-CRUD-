<?php 
// merges/combines 2 separate files
include 'connection.php';

// creating a function for adding (four parameters becuase the database table is accepting 4 data)
function addUser($fname,$lname,$uname,$pword){
    // converting the connection function into a variable
    $conn = connection();
    // a variable the holds the sql statement / code
    $sql = "INSERT INTO employees(fname,lname,username,password)VALUES('$fname','$lname','$uname','$pword')";
    // variable that executes/run the sql code
    $result = $conn->query($sql);

    // validation if the sql statement is not successful
    if($result == FALSE){
        die('error adding new user'.$conn->connect_error);
    }else{
        // relocating if the sql statement is successfull
        header('location:userlist.php');
    }


}


function displayUsers(){
    $conn = connection();
    $sql = "SELECT * FROM employees";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $row = array();
        while($rows = $result->fetch_assoc()){
            $row[] = $rows;
        }
        return $row;

    }else{
        return FALSE;

    }

}
function deleteUser($id){
    $conn = connection();
    $sql = "DELETE FROM employees WHERE emp_id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('error deleting user'.$conn->connect_error);
    }else{
        header('location:userlist.php');
    }

}
function getSpecificUser($id){
    $conn = connection();
    $sql = "SELECT * FROM employees WHERE emp_id = '$id'";
    $result = $conn->query($sql);

    if($result == FALSE){
        die('error retrieving one user'.$conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }

}
function editUser($fname,$lname,$username,$password,$id){
    $conn = connection();
    $sql = "UPDATE employees SET fname = '$fname',lname = '$lname', username ='$username', password = '$password' WHERE emp_id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        echo "Error editing user";
    }else{
        header('location:userlist.php');
    }

}

function login($username,$password){
    $conn = connection();
    $sql = "SELECT * FROM employees WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows==1){
        $row = $result->fetch_assoc();

        $_SESSION['login_id'] = $row['emp_id'];

        return TRUE;


    }else{
        
        return FALSE;

    }

}
function uploadPhoto($id,$name){
    $name = $_FILES['image']['name'];
    $conn = connection();
    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($name);
    $sql = "UPDATE employees SET emp_img = '$name' WHERE emp_id = '$id'";
    $result = $conn->query($sql);

    if($result == false){
        die('unable to upload user photo'.$conn->connect_error);
    }else{
        move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
        header('location:userlist.php');
    }

}












?>