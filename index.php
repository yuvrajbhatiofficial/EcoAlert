<?php
include("connection.php");


error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style>
      .uploadimage {
        background-color: #D9D9D9;
        width: 300px;
        height: 280px;
        font-size: 48px;
        font-family: sans-serif;
        position: relative;
        left: 35px;
        border-radius: 5px;
      }
      p {
        padding-top: 100px;
        padding-left: 4px;
      }
      input {
        padding-left: 100px;
      }
      .description {
        position: relative;
        left: 35px;
      }
      input {
        position: relative;
        left: 35px;
        padding: 40px;
      }
      label {
        padding-left: 35px;
      }
      .lastsubmit{
        position: relative;
        top: 10px;
        width: 100px;
        height: 40px;
        font-size: 20px;
        
      }
    </style>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">EcoAlert</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">EcoAlert</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    More
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Your Complaints</a></li>
                    <li><a class="dropdown-item" href="#">Blog</a></li>
                    
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
 

    <div class="uploadimage"><p>upload image</p></div>
    <br />
    <input class="imagefile" type="file" accept="image" />
    <label for="">description</label><br />
    <input type="text" /><br>
    <input class="lastsubmit" type="button" value="submit">



</body>

</html>
<?php

$im = $_GET['uploadimage'];
$de = $_GET['description'];
$lo = $_GET['location'];


// echo "$nm";
// echo "$em";
// echo "$nu";
// echo "$ps";

$query = "INSERT INTO ISSUE VALUES('$im','$de','$lo')";
$data = mysqli_query($conn, $query);

// if($data)
// {
//     echo "data inserted into Database";
// }
// else{
//     echo "faild to insert in Database";
// }
?>