<?php
        // put your code here
        $servername="localhost:3307";
        $username="root";
        $password="";
        $dbname="registerdata";
        error_reporting(0);

         //create connection
         $con=new mysqli($servername, $username, $password , $dbname);

            
 ?>
     

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Mock exam</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1><b class="logoo">MTEST</b></h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="reg.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Explore
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="reg1.php">Register</a></li>
            <li><a class="dropdown-item" href="#">Exam topics</a></li>
            <li><a class="dropdown-item" href="#">book date</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <?php
            session_start();
        ?>
<center>
   <form>
        <h1>Welcome  <?php echo $_SESSION['id']?> </h1>

        <!-- set the date -->
        <?php
            $date = date('d-m-y');
        ?> 
            <p class="p">Today's Date : <?php echo "".$date;  ?> </p>    

        <!-- set the time -->
        <?php   
            date_default_timezone_set('Asia/Kolkata');
            $hour = date(' h:i:sa', time () );    
        ?>
             <p class="p">Current Time : <?php echo "".$hour;  ?> </p>
        
        
   </form>
   </center>
</body>
</html>