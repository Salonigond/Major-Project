<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['mobile'];
$d=$_POST['message'];

// echo "<br>". "$a";
// echo "<br>". "$b";
// echo "<br>". "$c";
// echo "<br>". "$d";
// // die();

$conn=mysqli_connect("localhost","root","","major project");

$ins="INSERT INTO `contact`(`name`, `email`, `mobile`, `message`) VALUES ('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
    // echo "data store";
    
    // "<script>window.location.href='contact.php';alert('data store')</script>";
    header("location:contact.php");

}else{
    // echo "data not store";
    "<script>window.location.href='contact.php';alert('data not store')</script>";
}


?>