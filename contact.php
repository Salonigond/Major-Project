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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    #gif {
      border: 2px wheat;
      border-radius: 13px;
      box-shadow: 4px 7px 7px 0px #00000042;
      cursor: pointer;
      
      transition: 400ms;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="width:auto;">
        <div class="container-fluid">
    
          <a class="navbar-brand" href="index.html"><img src="logo.jpeg" width="170 px" height="70 px" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div>
            <a href="register.php"><button class="btn btn-outline-success" type="submit">Register</button></a>&nbsp;
            <a href="login.php" style="text-decoration: none;"><button class="btn btn-outline-primary"
                type="submit">Login</button></a>
          </div>
        </div>
      </nav>
      <!----------nav-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="background-color: rgb(210, 218, 221);">
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="about.html">About</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Events</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="birthday.html">Birthday</a></li>
                  <li><a class="dropdown-item" href="wedding.html">Wedding</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="anniversary.html">Anniversary</a></li>
                  <li><a class="dropdown-item" href="otherfunction.html">Other Function</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="services.html">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="booking.php">Booking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active disabled" href="contact.html" style="color: rgb(34, 30, 30);">Contact Us</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!---------nav close-->
      

      <div class="container-fluid" style="background-image: url(back2.jpg);">
        <div class="row">
          <h1 style="text-decoration: solid; font-family: cursive;">
            <center>Contact Us</center>
          </h1>
          <br>
          <br>
          
          <div class="col-sm-6 mt-5"><br>
            <form action="contactcode.php" method="post">
                
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example12@gmail.com">
                   </div>
                  
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile</label>
                    <input type="number" name="mobile" class="form-control" id="exampleInputMobile1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Message</label>
                    <textarea class="form-control" name="message"></textarea>
                    
                  </div>
                  
                <button type="submit" class="btn btn-primary">Submit</button><br><br>
              </form>
               
          </div>
          <div class="col-sm-6" ><br><br><br>
            
            <img src="image/gif5.gif" height="400px" width="100%" id="gif"></img>
            
          </div>
        </div>
      </div>
      <br>
     
      
      <!-------form close-->

      <br>
      <footer>
  <div class="container-fluid mt-5" style="background-image: url(back2.jpg);">
    <div class="row">
      <div class="col-sm-4 mt-3 shadow text-justify">
        <h5 class="mt-2">Contact Us : </h5><br>
        <i class="fa-solid fa-location-dot"></i>&nbsp;Lucknow, India<br>
        <i class="fa-solid fa-phone"></i>&nbsp;+91 8429695280, 7619020958<br>
        <i class="fa-solid fa-envelope"></i>&nbsp;eventbazaar@gmail.com
      </div>
      <div class="col-sm-4 mt-3 shadow ">
        <h5 class="mt-2 ">Follow us : </h5><br>
        <a href="https://www.facebook.com/" style="text-decoration: none;"><i class="fa-brands fa-facebook"></i>
          &nbsp;facebook</a><br>

        <a href="https://twitter.com/?lang=en" style="text-decoration: none;">
          <i class="fa-brands fa-twitter"></i>&nbsp;Twitter
        </a><br>

        <a href="https://www.instagram.com/" style="text-decoration: none;">
          <i class="fa-brands fa-instagram"></i> &nbsp;Instagram
        </a><br>

        <a href="https://www.linkedin.com/" style="text-decoration: none;">
          <i class="fa-brands fa-linkedin"></i> &nbsp;Linkedin
        </a><br>
        <a href="https://www.github.com/" style="text-decoration: none;">
          <i class="fa-brands fa-github"></i> &nbsp;Github
        </a><br>


      </div>
      <div class="col-sm-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14232.687580621108!2d80.916895446147!3d26.898039212854354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39995613fdd1fb9b%3A0xdbc8755ebddd0a31!2sFazullaganj%2C%20Lucknow%2C%20Uttar%20Pradesh%20226020!5e0!3m2!1sen!2sin!4v1708335607889!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
      </div>


    </div>

  </div>
</footer>

  <!------footer close-->


    

</body>
</html>