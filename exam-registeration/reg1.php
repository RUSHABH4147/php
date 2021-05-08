
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
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
        <li class="nav-item">
          <a class="nav-link" href="reg1.php">Register</a>
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
 
<form class="row g-3 needs-validation" method="post" onsubmit=" return checkinputs()" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" name="nm" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" name="sname" id="validationCustom02"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" name="id" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control"  name="city" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" name="State"  id="validationCustom04" required>
    <option selected disabled  value="">Choose...</option>
      <option value="Bihar" name="State">Bihar</option>
      <option value="Maharashrta" name="State">Maharashrta</option>
      <option value="U.P" name="State">U.P</option>
      <option value="Goa" name="State">Goa</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip"  id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-6">
    <label for="validationCustom01" class="form-label">Password</label>
    <input type="password" class="form-control password1"  id="pw1" name="Password"   required>
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
    </div>
    <div class="col-6">
    <label for="validationCustom01" class="form-label">Password </label>
    <input type="password" class="form-control password2"  id="pw2"  required>
    
    <!-- <div class="valid-feedback">
      Looks good!
    </div> -->
    <div class="invalid-feedback">
      Please provide a valid password.
    </div>
    </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="submit" id = "submit" type="submit">Register</button>
  </div>
</form>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
 
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
          //basic validation
        var pw1 = document.getElementById("pw1");
        var pw2 = document.getElementById("pw2");
        function checkinputs() {
            console.log("HHH");
            const pw1value = pw1.value.trim();
            const pw2value = pw2.value.trim();
            if (pw1value == "") {
                console.log("bb");
                alert(" please fill all details");
                pw1.style.borderColor = "red"
                // pw1.focus();
                return false;

            }
            if (pw1value == pw2value) {
                alert("password created")

            }
            else if ( pw1value != pw2value) {
                alert("password not matched ");
                pw2.focus();
                pw2.style.borderColor = "red"


                return false
            }
            }</script>
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
               // encrypt the pass word 
                $enpass=password_hash($Password , PASSWORD_BCRYPT );
                
                

                $query="INSERT INTO candidate(Fname, Lname , Username ,  city , Stat , Zip , pass) VALUES ('$nm' , '$snm' , '$id', '$city' , '$State' , '$zip' , '$enpass')"; 
         
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