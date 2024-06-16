<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(235, 233, 226); background-image: url('back2.jpg');">


        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-4 mx-auto shadow p-3">
                    <h5 class="text-center" style="font-family: 'Times New Roman', Times, serif; font-size:x-large;"><b><u>User Register</u></b></h5>
                    <form action="registercode.php "method="POST">
                       
                        <div class="sm-3">
                            <label for="Input1" class="form-label">Name :</label>
                            <input type="name" class="form-control" id="Input1" name="name" placeholder="Enter your full name">
                          </div><br>
                          <div class="sm-3">
                            <label for="Input1" class="form-label">Mobile Number :</label>
                            <input type="number" class="form-control" id="Input2" size="10" name="mobile" placeholder="Enter your mobile number">
                          </div><br>
                          <div class="sm-3">
                            <label for="Input1" class="form-label">Email address :</label>
                            <input type="email" class="form-control" id="Input3" name="email" placeholder="name@example.com">
                          </div><br>
                          <div class="sm-3">
                            <label for="Input2" class="form-label">Password :</label>
                            <input type="password" class="form-control" id="Input4" name="password" placeholder="Enter Password">
                          </div>
                          <br>
                          <div class="sm-3">
                            <input type="Submit" value="Register" class="btn btn-danger col-12">
                            Already has User account?<a href="login.php" style="text-decoration: none;">&nbsp;&nbsp;Login here</a>
    
                          </div>
        
                    </form>
        
    
    
                </div>
                
            </div>
        </div>

    


    
</body>

</html>