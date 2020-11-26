<?php

include 'connection.php';
session_start();
$username=$_SESSION['username'];
$deletequery= " Delete from entpr where username='$username' ";

	$iquery = mysqli_query($con, $deletequery) or die("Failed to connect ".mysqli_error($con));
    
	if($iquery){
	?>
	
		<script>
			alert("Deleted Successfully");
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