<?php
if(isset($_POST['fname'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server, $username, $password);

  if(!$con){
    die("connection to this database failed due to" . 
    mysqli_connect_error());
  }
  echo "Your form has been submitted successfully";
  
  
  $fname = $_POST['fname'];
  $femail = $_POST['femail'];
  $fphone = $_POST['fphone'];

  $sql = "INSERT INTO `contact`.`contact` (`fname`, `femail`, `fphone`, `dd`) VALUES ('$fname', '$femail', '$fphone', current_timestamp());";
  //echo $sql;

  if($con->query($sql) == true){
   // echo "Successfully inserted";
   
  }
  else{ 
    echo "ERROR: $sql <br> $con->error";
 }

  $con->close();
}

?>

