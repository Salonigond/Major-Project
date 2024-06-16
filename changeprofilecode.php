<?php
 
 
 session_start();
            $sesid=$_SESSION['user'];
            $conn=mysqli_connect("localhost","root","","major project");

            $a = $_POST['name'];
            $b = $_POST['email'];
            
            $c = $_POST['mobile'];
           
            $d = $_POST['password'];

            $up="update register set name='$a', email='$b',mobile='$c',password='$d'
            ";
            if(mysqli_query($conn,$up))
            {
                header("location:profile.php");
            }
            else{
                echo"profile not found";
            }
?>