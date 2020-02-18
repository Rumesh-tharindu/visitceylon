<?php
  session_start();
  $mysqli=new mysqli('localhost','root','','visitceyloan');

  $username="";  
  $email=""; 
  $password="";
  $address=""; 
  $pnumber=""; 
  $gender="";
  $errors=array();
   if(isset($_POST['submit'])){

    $username=$mysqli->real_escape_string($_POST['username']);
    $email=$mysqli->real_escape_string($_POST['email']);
    $password=$mysqli->real_escape_string($_POST['password']);
    $address=$mysqli->real_escape_string($_POST['address']);
    $pnumber=$mysqli->real_escape_string($_POST['pnumber']);
    $gender=$mysqli->real_escape_string($_POST['gender']);

    if(empty($username)){
     array_push($errors,"User name is not entered");
     
    }
    if(empty($email)){
      array_push($errors,"Email is not entered");
   
      
     }
     if(empty($password)){
      array_push($errors,"Email is not entered");
     
      
     }
     if(empty($address)){
      array_push($errors,"Address is not entered");
     
      
     }
     if(empty($pnumber)){
      array_push($errors,"Phone number is not entered");
      
     }
     if(empty($gender)){
      array_push($errors,"Gender  is not entered");
      
      
     }
     $query1="SELECT * FROM  users WHERE username='$username' OR email='$email' LIMIT 1";
     $result=$mysqli->query($query1);
     $user= $result->fetch_assoc();
     if($user){
       if($user['username']===$username){
         array_push($errors,"username already exist");
         
         }
       
       if($user['email']===$email){
        array_push($errors,"email already exist");
      }
     }
   }
    if(count($errors)==0){
      $password=password_hash($password,PASSWORD_DEFAULT);

      $query2="INSERT INTO users(username,email,password,address,pnumber,gender)
      VALUES('$username','$email','$password','$address','$pnumber','$gender');";

       $mysqli->query($query2);
       $_SESSION['username']=$username;
       $_SESSION['success']="You are successfully addedd to system";
      
    }
  
  
  

  
?>