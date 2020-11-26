<?php


include 'connection.php';
session_start();
$role=$_POST['option'];
$username = $_POST['username'];
$password = $_POST['password'];
	
$result =mysqli_query($con,"Select * from registration where username = '$username' and password = '$password'") or die("Failed to connect ".mysqli_error($con));
$row = mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	$_SESSION['username']=$row['username'];
 	$_SESSION['email']=$row['email'];


	if($row['role']==$role && $role=='Entrepreneur')
	{
		?>
		<script>alert("Login successful Entrepreneur");
		window.location.href='../index1.php'; 
	    </script>

		<?php
	}
	if($row['role']==$role && $role=='Investor')
	{
		?>
		<script>alert("Login successful Investor");
	    window.location.href='../index2.php';
	   </script>
		<?php
	}

	else{
		?>
		<script>alert("Invalid Role");
	    window.location.href='../login.php';
	   </script>
		<?php
	}


?>

<?php
}else{
	?>
	<script>alert("Invalid Username or Password")
    window.location.href='../login.php';
    </script>
    <?php
	
}

?>