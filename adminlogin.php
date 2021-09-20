<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection succesfully";

}else{
    echo "no connection";
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
     <?php include 'links.php'?> 
    <link rel="stylesheet" type="text/css" href="style.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

l<ink rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Grechen+Fuemen&display=swap" rel="stylesheet">


    <?php include 'links.php' ?>
</head>
<body>
    <div class="container center-div shadow">
          <div class="heading text-center mb-5 text-uppercase text-white">
              ADMIN LOGIN PAGE</div>
              <div class="container row d-flex flex-row justify-content-center mb-5">
                  <div class="admin-form shadow p-2">

                      <form action="logincheck.php" method="POST">

                          <div class="form-group">
                              <label>Email ID</label>
                              <input type="text" name="user" value="" class="form-control" autocomplete="off" >
                          </div>


 
                          <div class="form-group">
                              <label>Password</label>
                              <input type="text" name="pass" value="" class="form-control" autocomplete="off" >
                          </div>

 
                          <input type="submit" name="submit" class="btn btn-success" >


                      </form>
                  </div>
              </div>
    </div>
    
</body>
</html>