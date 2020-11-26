<?php  
include 'php/connection.php'; 
session_start();  
  
if(!$_SESSION['username']) 
{  
   ?>
  <script>alert("Please login first.");
    window.location.href='index.php';
     </script>
  <?php
}
  $query1 = "SELECT * FROM registration";
$result1 = mysqli_query($con, $query1); 
$query2 = "SELECT * FROM contact";
$result2 = mysqli_query($con, $query2); 

$usercount1 = mysqli_num_rows($result1);
$usercount2 = mysqli_num_rows($result2);

?> 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Envestors</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/nstyle.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>

  <body>
    <!--Fixed Top Navbar-->
    <nav class="navbar navbar-default navbar-fixed-top text-center" id="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle text-center" data-toggle="collapse" data-target  ="
            #navbar-collapse">
              <span class="sr-only">Toogle Navigation</span> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

               <a class="navbar-brand " href="index.php"><img src="img/logo.gif" height="65px;" width="250px;" alt=""></a> 
         
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">  
             <li><a><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="php/logoutpro.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>




    <div class="entpr">
    
<div class="jumbotron-fluid">

  <div class="col-md-3">
    <div class="main">
      

<!------------------------------ Fetch Users------------------------------------------->


<div class="actions">
  <div class="fa fa-address-card" id="icon"></div>

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal1">Registered Users</button></div>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details Of Registered Users </h4>
      </div>
      <div class="modal-body">
<?php 
if($usercount1>0)
{
?>

<table border="1" style="border-collapse: collapse; width: 100%; text-align:center;">
<tbody>
<tr style="height: 80px; background:gold; color:black">
<td style="width: 25%; height: 18px;">Role</td>
<td style="width: 25%; height: 18px;">Username</td>
<td style="width: 25%; height: 18px;">Email</td>
<td style="width: 25%; height: 18px;">Password</td>
</tr>

 <?php
     while($row = mysqli_fetch_array($result1))
     {
      echo '
<tr style="height: 60px;">
<td style="width: 25%; height: 18px;">  '.$row["role"].' </td>
<td style="width: 25%; height: 18px;">  '.$row["username"].'</td>
<td style="width: 25%; height: 18px;">  '.$row["email"].'</td>
<td style="width: 25%; height: 18px;">  '.$row["password"].'</td>
</tr>
';
}
}
else
{
  echo "No users Found";
}
?>
</tbody>
</table>
      </div>
    </div>

  </div>
</div>




<!------------------------------ Contact ------------------------------------------->

<div class="actions">

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal2">Queries</button></div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Queries Posted </h4>
      </div>
      <div class="modal-body">
      
<?php 
if($usercount2>0)
{
?>

<table border="1" style="border-collapse: collapse; width: 100%; text-align:center;">
<tbody>
<tr style="height: 80px; background:gold; color:black">
<td style="width: 30%; height: 18px;">Name</td>
<td style="width: 20%; height: 18px;">Phone</td>
<td style="width: 50%; height: 18px;">Message</td>
</tr>

 <?php
     while($row = mysqli_fetch_array($result2))
     {
      echo '
<tr style="height: 60px;">
<td style="width: 30%; height: 18px;">  '.$row["username"].'</td>
<td style="width: 20%; height: 18px;">  '.$row["phone"].'</td>
<td style="width: 50%; height: 18px;">  '.$row["message"].'</td>
</tr>
';
}
}
else
{
  echo "Not a Single Message";
}
?>
</tbody>
</table>
 

      </div>
    </div>

  </div>
</div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>