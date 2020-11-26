<?php 
include 'php/connection.php'; 
session_start();  
  
if(!$_SESSION['email']) 
{  
   ?>
  <script>alert("Please login first.");
    window.location.href='login.php';
     </script>
  <?php
}
$query = "SELECT * FROM entpr ORDER BY time ASC";
$result = mysqli_query($con, $query); 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/nstyle.css" rel="stylesheet">
    <link href="css/index2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



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

               <a class="navbar-brand " href="index2.php"><img src="img/logo.gif" height="65px;" width="250px;" alt=""></a> 
         
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">
             <li><a><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="php/logoutpro.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>



 <div class="container">
   <br><br><br><br><br><br><br>
   <h1>Explore and Connect</h1><br><br>

   <div class="table-responsive">
    <table class="table table-striped table-bordered">
     
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
		<tr>
		<td style="width: 80%;">
		<h3><span><strong>'.$row["prname"].'</strong></span></h3>
		<p><span>'.$row["descp"].'</span></p>
		<p></p>
		</td>
		<td style="text-align:center;width: 20% ;"><button type="button" name="view" class="btn btn-info view" id="'.$row["time"].'" >Connect</button></td>
		</tr>

      ';
     }
     ?>
    </table>
   </div>
   
  </div>
 </body>
</html>

<div id="post_modal" class="modal fade">
 <div class="modal-dialog"  style="width: 60%; ">
  <div class="modal-content"> 
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Connect</h4>
    <h6 class="modal-title" style="font-size: 20px;">Mail Entrepreneur if you want to invest.</h6>
   </div>
   <div class="modal-body" id="post_detail">

   </div>
  </div>
 </div>
</div>


<script>
$(document).ready(function(){
 
 function fetch_post_data(time)
 {
  $.ajax({
   url:"php/fetch.php",
   method:"POST",
   data:{time:time},
   success:function(data)
   {
    $('#post_modal').modal('show');
    $('#post_detail').html(data);
   }
  });
 }

 $(document).on('click', '.view', function(){
  var time = $(this).attr("id");
  fetch_post_data(time);
 });

 $(document).on('click', '.previous', function(){
  var time = $(this).attr("id");
  fetch_post_data(time);
 });

 $(document).on('click', '.next', function(){
  var time = $(this).attr("id");
  fetch_post_data(time);
 });
 
});
</script>













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>