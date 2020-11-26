<?php


include 'connection.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
	

$result =mysqli_query($con,"Select * from admin where username = '$username' and password = '$password'") or die("Failed to connect ".mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	$_SESSION['username']=$row['username'];
	$_SESSION['email']='sanketsalunkhe17120@gmail.com';
?>

<script>alert("You are logged In as admin");
    window.location.href='../admin.php';
    </script>

<?php
}

else{
	?>
	<script>alert("Invalid Username Or Password")
    window.location.href='../index.php';
    </script>
    <?php
	
}

?>