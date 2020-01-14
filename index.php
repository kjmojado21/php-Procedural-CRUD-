<?php 
include 'functions/functions.php';

if(!empty($_SESSION['login_id'])){
    header('location:userlist.php');
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

    <div class="card w-50 mx-auto mt-5">
        <div class="card-header bg-warning text-light">
            <p class="lead text-center">Login!</p>
        </div>
        <div class="card-body">
            <form method="post">
                <input type="text" name="username" placeholder="Enter Email or Username" class="form-control">
                <input type="text" name="password" placeholder="Enter Password" class="form-control mt-3">
                <button type="submit" name="login" class="btn btn-outline-success mt-4">Login</button>
            </form>

        </div>

    </div>
    <?php 
       if(isset($_POST['login'])){
           $username = $_POST['username'];
           $password = $_POST['password'];

           $login = login($username,$password);

           if($login == TRUE){
               header('location:userlist.php');
           }else{
               echo "<div class = 'alert alert-warning'>User doesnt exist!</div>";
           }

       }
    
    
    
    
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>