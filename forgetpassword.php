<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <style>
        h1{
            color:white;
            text-shadow: 2px 2px 5px  brown;
            margin-top:10px;
            font-size:70px;
        }
        body{
            background-image:url(back2.jpg);
            
			min-height: 50vh;
			background-size: cover;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
        }
        form{
            margin-top:00px;
            font-size:25px;
            color:black;
        }
        input[type="email"]{
            font-size:20px;
            
        }
        button{
            background-color:  blue;
			color: white;
			padding: 7px;
			border: none;
			cursor: pointer;
			width: 25%;
            margin-top:30px;
            margin-left:200px;
        }
        button:hover {
			background-color: black;
		}
    </style>
</head>
<body>
    <h1>Forget password</h1>
    <form action="forgetcode.php" method="post">
    Enter register email id :<input type="email" name="email"><br>
    <button><h3>Check</h3></button>
</form>

</body>
</html>