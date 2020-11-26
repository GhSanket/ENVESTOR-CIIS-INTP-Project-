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

$emailquery = "Select * from entpr where email = '$email' ";
$query = mysqli_query($con,$emailquery);
$emailcount = mysqli_num_rows($query);

if($emailcount>0){
 ?>
 <script> alert('You have already posted.');
 window.location.href='../index1.php.';

</script>
<?php
}
else{

$insertquery = "Insert into entpr(username, email, prname, descp, ppt, report, date, time ) values ('$username','$email','$prname', '$descp', '$ppt', '$report', '$date', '$time')";

	$iquery = mysqli_query($con, $insertquery) or die("Failed to connect ".mysqli_error($con));
    
	if($iquery){
	?>
	
		<script>
			alert("Posted Successfully");
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

}	
?>











?>