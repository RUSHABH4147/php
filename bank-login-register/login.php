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
<div style="margin-top:20px">
    <form method="post"  style="margin-top : 10%; padding-right: 30% ; padding-left: 30%;">
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label" >USER ID </label>
    <input type="text" class="form-control" name="id" id="id"  aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
      <label for="text" class="form-label" >adhar.NO</label>
      <input type="text" class="form-control" name="adhar" id="adhar"   required>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label" >Password</label>
        <input type="password" class="form-control" name="Password" id="Password" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" >
        <label class="form-check-label" for="exampleCheck1">keep me login</label>
    </div>
    <button type="submit" name="Log" class="btn btn-primary">Submit</button>
    <p>not have account ? resgister now! <a href="Register.php">click here !!</a></p>
</form>
</div>
    </div>
    
    <?php
    if(isset($_POST['Log']))
    {
        
        // it will access name attribute value
        $username=$_POST['id'];
        $password=$_POST['Password'];
        $adhar=$_POST['adhar'];
        
       
        
        $cipher="AES-128-CTR";
        $opt=0;
        $encryt_iv='1234567890123456';
        $encryt_key='rushabh';
        $enrypt_adhar=openssl_encrypt($adhar,$cipher,$encryt_key,$opt,$encryt_iv);
        $enrypt_user=openssl_encrypt($username,$cipher,$encryt_key,$opt,$encryt_iv);
        //
        $ciphering="AES-128-CTR";
        $option=0;
        $decrypt_key='rushabh';
        $decrypt_iv='1234567890123456';
        $dycrypt_username=openssl_decrypt($enrypt_user,$ciphering,$decrypt_key,$option,$decrypt_iv);
        
        
      // query for accepting id and password from database
      $query="select * from bankclient where Username='$enrypt_user'";
      
      $result=mysqli_query($con,$query); // perform query
      $row = mysqli_fetch_array($result); // fetch row from db 
      if($enrypt_user == $row['Username'] && password_verify($password , $row['pass']) && $enrypt_adhar==$row['adhar'])//decrypting the password which is give by user at the time of login..
      {
        session_start();
        $_SESSION["id"]=$dycrypt_username;
            header("Location:../bank/Welcome.php");
        }
        else
        {
            header("Location: ../bank/LoginFailed.php");
        } 
    }
    
?>
    
</body>
</html>