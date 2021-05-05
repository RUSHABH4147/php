
<?php
    // put your code here
       $servername="localhost:3307";
        $username="root";
        $password="";
        $dbname="registerdata";
        error_reporting(0);

         //create connection
         $con=new mysqli($servername, $username, $password , $dbname);

         //check connection
         if($con->connect_error)
         {
             die("Connection failed :" .$con->connect_error);
         }   
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

<div class="container ">
    <h1 class= "loginhead"><b>Register Here</b></h1>
  <div class="row">
    <div class="col-sm">
      <img  class="reg1" src="reg1.svg" alt="reg">
    </div>
    <div class="col-sm " style=" margin-top: 15%" >
    <form method="post" class="row g-3">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control"  name="nm" id="nm" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" name="sname" id="sname" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" name="id" id="id"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="city"  name="city" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="state" name="state" required>
      <option selected disabled >Choose...</option>
      <option >Bihar</option>
      <option>Maharashrta</option>
      <option>U.P</option>
      <option>Goa</option>


    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="number" class="form-control" id="zip" name="zip" required>
  </div>
  <div class="col-6" >
    <label for="validationDefault02" class="form-label">Password</label>
    <input type="password" class="form-control" name="Password" id="Password" required>
  </div>
  <div class="col-6" >
    <label for="validationDefault02" class="form-label">check Password</label>
    <input type="password" class="form-control"  required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="submit" id = "submit" type="submit">Register</button>
  </div>
</form>
    </div>
    
  </div>
</div>

<?php
            if(isset($_POST['submit']))
            {
                $nm=$_POST['nm'];
                $snm=$_POST['sname'];
                $id=$_POST['id'];
                $city=$_POST['city'];
                $State=$_POST['State'];
                $zip=$_POST['zip'];
                $Password=$_POST['Password'];
                
                // $date = date('d-m-y');
                // date_default_timezone_set('Asia/Kolkata');
                // $time = date(' h:i:s', time () );
                // echo $date. "".$time;

                $query="INSERT INTO candidate(Fname, Lname , Username ,  city , Stat , Zip , pass) VALUES ('$nm' , '$snm' , '$id', '$city' , '$State' , '$zip' , '$Password')"; 
         
                if($con ->query($query))
                {
                      echo "Register completed";
                }
                else
                {
                      echo "Register failed ".$con->error;
                }
            }
        ?>

  </body>
</html>