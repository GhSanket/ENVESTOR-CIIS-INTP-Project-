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
  $username=$_SESSION['username'];
  $email=$_SESSION['email'];

$result =mysqli_query($con,"Select * from entpr where username = '$username'") or die("Failed to connect ".mysqli_error($con));
$row = mysqli_fetch_array($result);
$usercount = mysqli_num_rows($result);
if($usercount>0){
  $prname=$row['prname'];
  $descp=$row['descp'];
  $ppt=$row['ppt'];
  $report=$row['report'];
  $date=$row['date'];
  $time=$row['time'];
}

else{
$data="You hav not posted any Idea.";
}
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
    <link href="css/index1.css" rel="stylesheet">
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

               <a class="navbar-brand " href="index1.php"><img src="img/logo.gif" height="65px;" width="250px;" alt=""></a> 
         
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
    
<div class="container">


 <div class="col-md-2">

  </div>








  <div class="col-md-8">
    <div class="main">
      

<!------------------------------ PITCH------------------------------------------->


<div class="actions">

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal1">Pitch</button></div>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 90%; ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Post Your Idea</h4>
      </div>
      <div class="modal-body">



        <form class="form1" name="create" action="php/postpro.php"  method="post"  onsubmit="return validateForm()">
      
      <input class="prname" name="prname" type="text" align="center" placeholder="Enter Your Project Name*" required autofocus>
      <textarea class="desc" name="descp" placeholder =" Describe Your Project*" cols="25" rows="5" required></textarea>
      <input class="ppt" name="ppt"  align="center" placeholder="Enter Your Presntation Link*" required>
      <input class="report" name="report"  align="center" placeholder="Enter Your Report Link*" required>
      
      <button type="submit" class="btn" align="center" value="Submit">Post</button>
      
      </form>  
      


      </div>
    </div>

  </div>
</div>




<!------------------------------ VIEW------------------------------------------->

<div class="actions">

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal2">View</button></div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 90%; ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Idea</h4>
      </div>
      <div class="modal-body">


      <?php if($usercount>0){

        ?>
       <table style="border-collapse: collapse; width: 100%; font-size: 18px;  word-wrap: break-word;">
        <caption>
         <div class="date" style="text-align: right; margin-bottom: 40px;"> Created : <?php echo $time; echo "   " ;   echo $date;?></div></caption>
        </caption>
<tbody style="padding: 15px; ">
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Project Name</td>
<td style="width: 75%; height: 60px;"><strong><?php echo $prname; ?></strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Description</td>
<td style="width: 75%; height: 60px;"><?php echo $descp; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Presentation Link</td>
<td style="width: 75%; height: 60px;"><a href="<?php echo $ppt; ?>"  target="_blank">Presentation</a></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Report Link</td>
<td style="width: 75%; height: 60px;"><a href="<?php echo $report; ?>"  target="_blank">Report</a></td>
</tr>
</tbody>
</table>
<?php
}
else{
  echo $data;
}
?>

<p></p>

      </div>
    </div>

  </div>
</div>





<!------------------------------ EDIT------------------------------------------->

<div class="actions">

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal3">Edit</button></div>

<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 90%; ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Your Idea</h4>
      </div>
      <div class="modal-body">


      <?php if($usercount>0){

        ?>
         <div class="date" style="text-align: right; margin-bottom: 20px;"> Created : <?php echo $time; echo "   " ;   echo $date;?></div>
        <form class="form1" name="edit" action="php/editpro.php" method="post" onsubmit="return validateForm1()">
      
      <input class="prname" name="prname" type="text" align="center" placeholder="Enter Your Project Name*" value="<?php echo $prname; ?>" required autofocus>
      <textarea class="desc" name="descp" placeholder =" Describe Your Project*"  required><?php echo $descp; ?></textarea>
      <input class="ppt" name="ppt"  align="center" placeholder="Enter Your Presntation Link*"  value="<?php echo $ppt; ?>" required>
      <input class="report" name="report"  align="center" placeholder="Enter Your Report Link*"  value="<?php echo $report; ?>" required>
      
      <button type="submit" class="btn" align="center" value="Submit">Save</button>
      
      </form>  
      <?php
    }
    else
    {
       echo $data;
    }
    ?>
      


      </div>
    </div>

  </div>
</div>









<!------------------------------ DELETE------------------------------------------->


<div class="actions">

<button type="button" id="butt" class="btn" data-toggle="modal" data-target="#myModal4">Delete</button></div>

<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 90%; ">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Your Idea</h4>
      </div>
      <div class="modal-body">




      <?php if($usercount>0){

        ?>
       <table style="border-collapse: collapse; width: 100%; font-size: 18px;  word-wrap: break-word;">
        <caption>
         <div class="date" style="text-align: right; margin-bottom: 40px;"> Created : <?php echo $time; echo "   " ;   echo $date;?></div></caption>
        </caption>
<tbody style="padding: 15px; ">
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Project Name</td>
<td style="width: 75%; height: 60px;"><strong><?php echo $prname; ?></strong></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Description</td>
<td style="width: 75%; height: 60px;"><?php echo $descp; ?></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Presentation Link</td>
<td style="width: 75%; height: 60px;"><a href="<?php echo $ppt; ?>"  target="_blank">Presentation</a></td>
</tr>
<tr style="height: 18px;">
<td style="width: 25%; height: 60px;">Report Link</td>
<td style="width: 75%; height: 60px;"><a href="<?php echo $report; ?>"  target="_blank">Report</a></td>
</tr>
</tbody>
</table>

<p></p>


        <form class="form1" name="create" action="php/deletepro.php"  method="post">
      <button type="submit" class="btn" align="center" value="Submit">Delete</button>
      </form>  
<?php
}
else{
  echo $data;
}
?>

      


      </div>
    </div>

  </div>
</div>





    </div>
  </div>














  <div class="col-md-2"></div> 
</div>




  </div>
















<script>
var regex = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;


function validateForm() {
  var prname = document.forms["create"]["prname"].value;
  var descp = document.forms["create"]["descp"].value;
  var ppt = document.forms["create"]["ppt"].value;
  var report = document.forms["create"]["report"].value;
 if(prname == "") {
    alert("Enter Project name.");
    return false;
  }
   else if(descp == "") {
    alert("Describe Your Project.");
    return false;
}
    else if(ppt == "") {
    alert("Enter Presentaion Link.");
    return false;
}
 else if(report == "") {
    alert("Enter Report Link.");
    return false;

  }

else if((descp.length)<15){
  alert("Describe Your project in minimum 15 letters.");
  return false;

}

else if(!regex.test(ppt)){

  alert("Enter a valid Presentaion or Video link");
  return false;
}

else if(!regex.test(report)){

  alert("Enter a valid Report link");
  return false;
}

  }



function validateForm1() {
  var prname = document.forms["edit"]["prname"].value;
  var descp = document.forms["edit"]["descp"].value;
  var ppt = document.forms["edit"]["ppt"].value;
  var report = document.forms["edit"]["report"].value;
 if(prname == "") {
    alert("Enter Project name.");
    return false;
  }
   else if(descp == "") {
    alert("Describe Your Project.");
    return false;
}
    else if(ppt == "") {
    alert("Enter Presentaion Link.");
    return false;
}
 else if(report == "") {
    alert("Enter Report Link.");
    return false;

  }

else if((descp.length)<15){
  alert("Describe Your project in minimum 15 letters.");
  return false;

}

else if(!regex.test(ppt)){

  alert("Enter a valid Presentaion or Video link");
  return false;
}

else if(!regex.test(report)){

  alert("Enter a valid Report link");
  return false;
}

  }


</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</body>
</html>