<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="static/css/login.css">
    <link href="static/css/evm.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <style>

        </style>

    <title>Login</title>
</head>
<body style="background-image: url(back2.jpg);">
<div class="container">
        <div class="row mt-5">
            <div class="col-sm-4 mx-auto shadow p-3 ">
                <h5 class="text-center">User Login</h5>
                <br>
                <form  action="logincode.php"method="POST">
                  
                    <div class="sm-3">
                        <label for="Input1" class="form-label">Email address :</label>
                        <input type="email" class="form-control" id="Input1" placeholder="name@example.com" name="email">
                    </div><br>
                    <div class="sm-3">
                        <label for="Input2" class="form-label">Password :</label>
                        <input type="password" class="form-control" id="Input2" placeholder="Enter Password" name="password">
                    </div>
                      <br>
                    <div class="sm-3">
                        <input type="Submit" value="Login" class="btn btn-outline-primary col-12">
                        Forget Password?<a href="forgetpassword.php" style="text-decoration: none;">&nbsp;&nbsp;Forget Password</a>

                    </div>
    
                </form>
</body>
</html>