<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
<link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
<link href="css/nstyle.css" rel="stylesheet">      
<link href="css/contact.css" rel="stylesheet">
<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>    
</head>
 <body>
  <div class="container-fluid"> 
    <div class="row">
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

               <a class="navbar-brand " href="index.php"><img src="img\logo.gif" height="65px;" width="250px;" alt=""></a> 
         
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right ">
            <li><a href="index.php">Home</a></li>
            <li><a href="hit.php">How it Works</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="sign.php">Sign Up</a></li>
          
          </ul>
        </div>
      </div>
    </nav>


<div class="col-md-6">
   <br><br><br><br>
 <h1>Connect</h1>
  <form align="center" name="contact" action="php/contactpro.php" onsubmit="return validateForm()" method="post">
   
      <input  class="name"  name="username" type="text"  placeholder ="  Name*"  required autofocus pattern="[A-Za-z/s]+{1,30}" title="Special Characters and numbers are not allowed" maxlength="30">
      <input class="email" name="email" type="text" placeholder ="  Email*" required >
      <input  class="phone" name="mobile"  type="tel" placeholder ="  PhoneNo* "     required  pattern="[0-9]{10}" title="Enter a 10 digit Phone Number" maxlength="10">
      <textarea class="msg" name="message" placeholder ="  Message*" cols="25" rows="5" required></textarea>
      <button type="submit" class="btn" align="center" value="Submit">Send</button>


    
    </form>




  </div>
    



    
     <div class="conbg" >
     </div> 

</div> 





<div class="row">
<h1>Reach Us</h1>
<div class="col-md-5">
<div class="contact-right">
    
    <br>
    <p><h2><b>Address :</b></h2>    Dr. K. M. Vasudevan Pillai Campus, Plot No. 10, Sector 16, New Panvel East, Navi Mumbai, Maharashtra 410206</p>
    <br>
    <p><h2><b>Phone No:   </b></h2>+912227456030</p>
    <br>
    <p><h2><b>Site:  </b></h2><a href="https://www.pce.ac.in/" style="color: black"> www.pce.ac.in </a></p>
      </div>  


</div>







<div class="col-md-7">
<div id = "map" style = "width:100%; height:100%"></div>
</div>
</div>
 </div>

<script>
         // Creating map options
         var mapOptions = {
            center: [18.990404, 73.127713],
            zoom: 18
         }
         
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         var marker = L.marker([18.990404, 73.127713]).addTo(map);
         marker.bindPopup("<b>Visit Us</b>").openPopup();
         
         // Adding layer to the map
         map.addLayer(layer);
      
	function validateForm() {
  var user = document.forms["contact"]["username"].value;
  var phone= document.forms["contact"]["mobile"].value;
  var eid= document.forms["contact"]["email"].value;
  var msg= document.forms["contact"]["message"].value;
  var atposition=eid.indexOf("@");  
  var dotposition=eid.lastIndexOf(".");
   var chphn = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
  if(user == "") {
    alert("Enter Username.");
    return false;
  }
  else if(phone == ""){
    alert("Enter Phone Number.");
    return false;
  }
else if(phone.match(chphn)==null){
alert("Enter a Valid Number");
return false;
}

  else if(eid == ""){
    alert("Enter Email.");
    return false;
  }
  else if (msg=="") {
  	alert("Enter your message");
  	return false;
  }

else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=eid.length){  
  alert("Please enter a valid e-mail address");  
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