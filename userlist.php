
<?php
include 'functions/functions.php';


if(empty($_SESSION['login_id'])){
    header('location:index.php');
}else{
    $currentUser = $_SESSION['login_id'];

   

    $row = getSpecificUser($currentUser);

}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-md-12 p-5 bg-dark">
                <p class="lead text-center text-light">
                    Employee List
                </p>
            </div>
        </div>
        <div class="row">
            <p class="lead text-center d-block mx-auto bg-dark p-5 text-light">
                <?php

                echo $row['fname'];

                ?>
            </p>

        </div>
    </div>
    <div class="container">
        <table class="table table-bordered table-hover table-danger">
            <thead>
                <th>User Image</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Options</th>
            </thead>
            <tbody>
                <?php
                $userlist = displayUsers();
                if ($userlist == false) {
                    echo "<div class = 'alert alert-success'>Add an employee</div>";
                } else {
                    foreach ($userlist as $key => $row) {
                        $empID = $row['emp_id'];
                        echo "<tr>";
                        if(empty($row['emp_img'])){
                            echo "<td><div class = 'alert alert-danger'>No User Image</div>
                            <a href = 'upload.php?user_id=$empID' class = 'd-block btn btn-outline-success' role = 'button'>Upload User Photo</a></td>";
                            
                        }else{
                            $image = $row['emp_img'];
                            echo "<td><img src ='uploads/$image' class = 'img-thumbnail'>
                            <a href = 'upload.php?user_id=$empID' class = 'd-block btn btn-outline-success' role = 'button'>Upload User Photo</a></td>";
                        }
                        echo "<td>" . $row['fname'] . "</td>";
                        echo "<td>" . $row['lname'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td><a href = 'edit.php?emp_id=$empID' role = 'button' class = 'btn btn-warning'>Edit Employee</a></td>";
                        echo "<td><a href = 'delete.php?emp_id=$empID' role = 'button' class = 'btn btn-danger'>Delete Employee</a></td>";
                        echo "</tr>";
                    }
                }



                ?>
            </tbody>
        </table>
        <a href="add.php" role="button" class="btn btn-outline-secondary mt-3">Add New Employee</a>
        <a href="logout.php" role="button" class="btn btn-outline-danger mt-3 float-right">Logout</a>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>