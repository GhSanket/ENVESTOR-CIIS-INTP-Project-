<?php

include 'connection.php';
$role=$_POST['option'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$emailquery = "Select * from registration where email = '$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

$userquery = "Select * from registration where username = '$username' ";
$query1 = mysqli_query($con,$userquery);
$usercount = mysqli_num_rows($query1);
if($emailcount>0){
 ?>
 <script> alert('Email is already registered.');
 window.location.href='../sign.php';

</script>
<?php
}

if($usercount>0){

?>
<script>alert('Username is already taken')
window.location.href='../sign.php';</script>
<?php

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



?>



