<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COMPUTERISED JOB CARD PUNCHING KIOSK PRATAPNAGAR WORKSHOP | JobCARD</title>
  <link rel="stylesheet" href="home.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">JobCARD</a></div>
        <ul class="links">
    
        <li><a href="#" class="desktop-link">DATA</a>
            <input type="checkbox" id="show-DATA">
            <label for="show-DATA">DATA</label>
            
            
                <ul>
                    <li><a href="crenewp4.php">CREATE NEW P4</a></li>
                    <li><a href="#">MANPOWOR ENTRY FOR P4</a></li>
                </ul>

            
            </li>

        <li><a href="#" class="desktop-link"><i class="fa fa-print"></i>PRINT REPORT</a>
            <input type="checkbox" id="show-PRINT REPORT">
            <label for="show-PRINT REPORT">PRINT REPORT</label>
            
                <ul>
                    <li><a href="#">PRINT P4</a></li>
                    <li><a href="#">PRINT P8/P9</a></li>
                    <li><a href="#">P8 BACKSIDE PRINT</a></li>
                    <li><a href="#">P9 BACKSIDE PRINT</a></li>
                    <li>
                <a href="#" class="desktop-link">More Items</a>
                <input type="checkbox" id="show-items">
                <label for="show-items">More Items</label>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
            </li>
        </ul>

            
        </li>
        <li><a href="#" class="desktop-link">ADMIN</a>
            <input type="checkbox" id="show-ADMIN">
            <label for="show-ADMIN">ADMIN</label>
            
             
            <ul>
                    <li><a href="#">CHANGE PASSWORD</a></li>
                    <li><a href="#">P4 SEARCH</a></li>
                </ul>

            
        </li>
        <li><a href="#" >About Us</a></li>
        <li ><a href="#" class="desktop-link"><i class="fa fa-home"></i>HOME</a>
            <input type="checkbox" id="show-HOME">
            <label for="show-HOME">HOME</label>
        
        
                <ul>
                    <li><a href="reset-password.php" class="btn btn-warning">Reset Password</a></li>
                    <li><a href="logout.php" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            </li>     
   </ul>
   </div>
   <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>

   </nav>
</div>
    
</body>
</html>
