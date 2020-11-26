<?php
//fetch.php

include 'connection.php';
session_start();
if(isset($_POST["time"]))
{
 $output = '';
 $query = "SELECT * FROM entpr WHERE time = '".$_POST["time"]."'";
 $result = mysqli_query($con, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
  <h3>'.$row["username"].'</h3><br>
  <h2>'.$row["prname"].'</h2>
  <p>'.$row["descp"].'</p>
  <p><a href="'.$row["report"].'" target="_blank">Report Link</a></p>
  <p><a href="'.$row["ppt"].'"  target="_blank">Presentation Link </a></p>
  <p><a href="mailto:'.$row["email"].'?Subject=Regarding Investment in Your Idea from Envestors.com">Click here to send mail </a></p>
  
  ';
  $query_1 = "SELECT time FROM entpr WHERE time < '".$_POST['time']."' ORDER BY time DESC LIMIT 1";
  $result_1 = mysqli_query($con, $query_1);
  $data_1 = mysqli_fetch_assoc($result_1);
  $query_2 = "SELECT time FROM entpr WHERE time > '".$_POST['time']."' ORDER BY time ASC LIMIT 1";
  $result_2 = mysqli_query($con, $query_2);
  $data_2 = mysqli_fetch_assoc($result_2);
  $if_previous_disable = '';
  $if_next_disable = '';
  if($data_1["time"] == "")
  {
   $if_previous_disable = 'disabled';
  }
  if($data_2["time"] == "")
  {
   $if_next_disable = 'disabled';
  }
  $output .= '
  <br /><br />
  <div align="center">
   <button type="button" name="previous" class="btn btn-warning btn-sm previous" id="'.$data_1["time"].'" '.$if_previous_disable.'>Previous</button>
   <button type="button" name="next" class="btn btn-warning btn-sm next" id="'.$data_2["time"].'" '.$if_next_disable.'>Next</button>
  </div>
  <br /><br />
  ';
 }
 echo $output;
}

?>