
<?php

include 'php/connection.php';
$usernamerr=$emailerr=$passworderr="";
if(isset($_POST['submit']))
{
$role= mysql_real_escape_string($con, $_POST['option']);
$username = mysql_real_escape_string($con, $_POST['username']);
$email = mysql_real_escape_string($con, $_POST['email']);
$password = mysql_real_escape_string($con, $_POST['password']);
$emailquery = "Select * from registration where email = '$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);
$userquery = "Select * from registration where username = '$username' ";
$query1 = mysqli_query($con,$userquery);
$usercount = mysqli_num_rows($query1);
if(empty($username)){
  
  $usernamerr="Username is required";

}
else if(empty($email))
{
  $emailerr="Email is required";
}

else if(empty($password))
{
  $passworderr="Password is required";
}
else if(!preg_match("/^[a-zA-Z-0-9']/",$username))
{
$usernamerr="Username must be combination of Characters and Numbers for eg.Sanket12";
}

else if(strlen($username)<5)
{
  $usernamerr="Username is too short, minimum is 5 characters.";
  
}

else if(strlen($password)<5)
{
  $passworderr="Password is too short, minimum is 8 characters.";
  
}

else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
  $emailerr="Enter a valid email id";
}
else if(!preg_match("^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$", $password))
{
  $passworderr="Passsword should contain uppercase letter , lowercase letter, number and special character";
}


else{

    $insertquery = "Insert into registration(role, username, email, password) values ('$role','$username','$email','$password')";

  $iquery = mysqli_query($con, $insertquery) or die("Failed to connect ".mysqli_error($con));
    
  if($iquery){
  ?>
  
    <script>
      alert("Registration Successfull");
      window.location.href='../login.php';
    </script>

  <?php



  }
  else{
    
    ?>
    <script>
      alert("Registration unsuccessful! Try again!");
      window.location.href='../sign.php';
    </script>
      <?php
  
  }
  
}
}


?>


