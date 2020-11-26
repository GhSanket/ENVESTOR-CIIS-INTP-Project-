<?php

include 'connection.php';
$message=$_POST['message'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['mobile'];

	$insertquery = "Insert into contact(username, email, phone,message) values ('$username','$email','$phone','$message')";

	$iquery = mysqli_query($con, $insertquery) or die("Failed to connect ".mysqli_error($con));

	if($iquery)
	{
		?>
		<script>alert("Thank you for your message.\nWe will get to you soon.");
          window.location.href='../index.php';
     
	</script>
		<?php
	}

else{

	?>
	<script>alert("There's problem registering your complaint");
	 window.location.href='../contact.php';

</script>
	<?php
}

?>