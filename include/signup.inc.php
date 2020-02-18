

<?php
$mysqli=new mysqli('localhost','root','','visitceyloan');
#POST data
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$pnumber=$_POST['pnumber'];
$gender=$_POST['gender'];
$comment= $_POST['textarea'];
$errors=array();

#files data
 $filename=$_FILES['file']['name'];
 $fileTempName=$_FILES['file']['tmp_name'];
 $fileExt=explode('.',$filename);
 $fileNameNew=uniqid('', true).".".end($fileExt);
 $fileDestination='../assets/images/profile/'.$fileNameNew;
 move_uploaded_file($fileTempName,$fileDestination);
 
if(isset($_POST['submit'])){
    
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
        $query1="SELECT * FROM  guide WHERE username='$username' OR email='$email' LIMIT 1";
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
         $password=md5($password);
   
         $query2="INSERT INTO  guide(username,email,pword,address,pnumber,experience,gender,image)
         VALUES('$username','$email','$password','$address','$pnumber','$comment','$gender','$fileNameNew');";
   
          $mysqli->query($query2);
          $_SESSION['username']=$username;
          $_SESSION['success']="You are successfully addedd to system";
         
       }

 

?>