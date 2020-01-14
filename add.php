<?php 
include 'functions/functions.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12 p-5 bg-dark text-secondary">
                <p class="lead text-center">Add an Employee</p>
            </div>
        </div>

    </div>
    <form method="post">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <input type="text" name="fname" placeholder="Employee Firstname" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="text" name="lname" placeholder="Employee Lastname" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <input type="text" name="username" placeholder="Employee Username" class="form-control">

                </div>
                <div class="col-md-8">
                    <input type="password" name="password" placeholder="Employee Password" class="form-control">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <button type="submit" name="addUser" class="btn btn-outline-primary btn-block">Submit</button>
                </div>
            </div>

        </div>
    </form>

    <?php 
    if(isset($_POST['addUser'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $password = $_POST['password'];      
       
       
       
        addUser($fname,$lname,$username,$password);


    }
    
    
    
    ?>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>