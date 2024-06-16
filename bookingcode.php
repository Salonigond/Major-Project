<?php
$a=$_POST['email'];
$b=$_POST['password'];
$c=$_POST['name'];
$d=$_POST['mobile'];
$e=$_POST['location'];
$f=$_POST['date'];
$g=$_POST['time'];
$h=$_POST['services'];
$i=$_POST['venue'];

// echo "<br>". "$a";
//  echo "<br>". "$b";
// echo "<br>". "$c";
// echo "<br>". "$d";
// echo "<br>". "$e";
// echo "<br>". "$f";
// echo "<br>". "$g";
// echo "<br>". "$h";
// echo "<br>". "$i";




$conn=mysqli_connect("localhost","root","","major project");

$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$datetime=$date." ".$time;


$ins="INSERT INTO `booking`(`email`, `password`, `name`, `mobile`, `location`, `date`, `time`, `services`, `venue`,`datetime`) 
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$datetime')";

if(mysqli_query($conn,$ins))
{
    // echo "data store";
    
    // "<script>window.location.href='booking.php';alert('data store')</script>";
    header("location:booking.php");
}else{
    // echo "data not store";
    "<script>window.location.href='booking.php';alert('data not store')</script>";
}


?>