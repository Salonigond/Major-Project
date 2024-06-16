<?php 
$a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['email'];
$d=$_POST['password'];


$conn=mysqli_connect("localhost","root","","major project");

$ins="INSERT INTO `register`( `name`, `mobile`, `email`, `password`) VALUES ('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
    // echo "data store";
    echo
    "<script>window.location.href='register.php';alert('data store')</script>";

}else{
    // echo "data not store";
    "<script>window.location.href='register.php';alert('data not store')</script>";
}




?>
