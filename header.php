<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
 <link rel="stylesheet" href="assets/css/bootstrap.css">
 <link rel="stylesheet" href="assets/css/style.css">
 <style>
     nav{
         color:red;
     }
 </style>
</head>
<body>

<section> <nav class="navbar navbar-custom navbar-expand-md sticky-top" >
    	<a href="" class="navbar-brand">VISIT CEYLOAN</a>
    	   <button class="navbar-toggler"  data-toggte="collapse" data-target="#ccsl">
      	        	      <span class="navbar-toggler-icon"></span>
      	    </button>
                 <div class="collapse navbar-collapse justify-content-center" id="ccsl" >
               	 <ul class="navbar-nav ml-auto">
                     <li class="navbar-item" active><a href="index.php" class="nav-link">Home</a><li>
                     <li class="navbar-item"><a href="catogaries.php" class="nav-link">Destination</a><li>
                     <li class="navbar-item"><a href="Guids.php" class="nav-link">Guids</a><li>
                     <li class="navbar-item"><a href="Gallery.php" class="nav-link ">Gallery</a><li>
                               	 	
               	 </ul>
               	 <div>
                    <?php
                    if(!empty($_SESSION)){
                      
                        echo $_SESSION['username'];
                        echo "<a href='logout.php'>logout</a>";
                    }
                    else{
                        echo"<span class='log-in'><a href='signup.php'>Signup</a></span>
                        <span class='log-out'><a href='login.php'> login</a></span>";
                    }
                  ?>
                 </div>
               </div>
           </section >



           <!-- end of navbar -->