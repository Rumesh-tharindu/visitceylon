<?php
 
 $server="localhost";
 $user="root";
 $password="";
 $db="visitceyloan";

 $conn=mysqli_connect($server,$user,$password,$db);
 
  if($_SERVER['REQUEST_METHOD']){
      
      if($_POST['submit']=='countinue'){
          $username=mysqli_real_escape_string($conn,$_POST['username']);
          $password=mysqli_real_escape_string($conn,$_POST['password']);
          
         
        if(empty($username)){
            die('please fill  username ');
        }
        else if(empty($password)){
            die('please fill  passowrd ');
        }
        $query="SELECT * FROM admin WHERE adminName=? OR adminEmail=?";
        
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$query)){
            header('location: ../admin.php?error=sqlerror');
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$username,$username);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwd_check=password_verify($password,$row['PASSWORD']);
                if($pwd_check==false){
                    header('location: ../admin.php?error=wrongPassword');
                    exit();
                }
                else if($pwd_check==true){
                       session_start();
                       $_SESSION['userid']=$row['id'];
                       $_SESSION['username']=$row['username'];
                       header('location: ../adminpanel.php?success=success');
                    exit();
                }
                else{
                    header('location: ../admin.php?error=nouser1');
                    exit();
                }
            }
            else{
                header('location: ../admin.php?error=nouser2');
            exit();
            }
        }
       

      }
    }

?>