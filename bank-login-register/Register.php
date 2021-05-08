
<?php
    // put your code here
       $servername="localhost:3307";
        $username="root";
        $password="";
        $dbname="banking";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="bank.css">
    <title>bank</title>
  </head>
  <body>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</head>
<body>
    <div class="frm" style="padding : 30px; margin:25px">
<br><br>
    <h1>OPEN ACCOUNT BY FILL THIS FORM NOW !!</h1><br>
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
  <div class="col-6">
    <label for="validationCustom02" class="form-label">Gender</label>
    <input type="radio" name="gender" id="male" value="male"  required>male
    <input type="radio" name="gender" id="male" value="female"  required>female
    <input type="radio" name="gender" id="male" value="other"  required>other
       
    <div class="valid-feedback">
      Looks good!
    </div>
    <div class="invalid-feedback">
      Please select gender.
    </div>
</div>
    <div class="col-6">
    <label for="birthday" class="form-label">DOB:</label>
    <input type="date" class="form-control" id="dob" name="dob">
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
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">AdharCard No.</label>
    <input type="text" class="form-control" name="adhar"  id="adhar" required>
    <div class="invalid-feedback">
      Please provide a valid adhar.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">PHONE.no</label>
    <input type="number" class="form-control" name="phone"  id="phone" required>
    <div class="invalid-feedback">
      Please provide a valid phone.
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
    </div>
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
                $gender=$_POST['gender'];
                $dob=$_POST['dob'];
                $adhar=$_POST['adhar'];
                $phone=$_POST['phone'];
                $city=$_POST['city'];
                $State=$_POST['State'];
                $zip=$_POST['zip'];
                $Password=$_POST['Password'];
                // encrypt the pass word 
                $ciphering="AES-128-CTR";//its cipher nethod
                $option=0;//its store disfuntion bitwise
                $encryt_iv='1234567890123456';//its store vector which is not null
                $encryt_key='rushabh';//password
                $enrypt_adhar=openssl_encrypt($adhar,$ciphering,$encryt_key,$option,$encryt_iv);
                $enrypt_user=openssl_encrypt($id,$ciphering,$encryt_key,$option,$encryt_iv);
                $enrypt_phone=openssl_encrypt($phone,$ciphering,$encryt_key,$option,$encryt_iv);


                $enpass=password_hash($Password , PASSWORD_BCRYPT );
                
                
                
                $query="INSERT INTO bankclient(Fname, Lname , Username , gender, dob, city , Stat , Zip ,adhar,phone, pass) VALUES ('$nm' , '$snm' , '$enrypt_user', '$gender',' $dob', '$city' , '$State' , '$zip','$enrypt_adhar','$enrypt_phone' , '$enpass')"; 
         
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