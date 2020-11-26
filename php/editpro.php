<?php

include 'connection.php';
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$prname=$_POST['prname'];
$descp=$_POST['descp'];
$ppt=$_POST['ppt'];
$report=$_POST['report'];
date_default_timezone_set('Asia/Kolkata');
$time = date('h:m:s A');
$date = date('d-M-Y');

$updatequery= " Update entpr set prname ='$prname', descp='$descp', ppt='$ppt', report='$report', time='$time', date='$date' where username='$username' ";

	$iquery = mysqli_query($con, $updatequery) or die("Failed to connect ".mysqli_error($con));
    
	if($iquery){
	?>
	
		<script>
			alert("Updated Successfully");
			window.location.href='../index1.php';
		</script>

	<?php



	}
	else{
		
		?>
		<script>
			alert("There's some problem. Please! Try again!");
			window.location.href='../index1.php';
		</script>
			<?php
	
	}

	
?>