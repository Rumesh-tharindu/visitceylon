<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/signup.css">
</head>
<body>
    
    <div class="container">
     <div class="header">
     <h1>Registeration</h1>  </div>
     <div class="message" id="message">
         <div><?php
           if(!empty($_GET)){
               if($_GET['sucess']='sucess'){
                echo "<div class='message-box'>
                <span>DATA ADDED SUCCESSFULLY</span>
                <a href='login.php'> TRY LOGIN HERE !</a>
              </div>";
               }
              
            
           }
          ?></div>
    </div>
    
     <div class="box">
     <div class=tabs>
        <div class="tab tab1" id="tab1">
           <image src="assets/images/user.png"
           width="25px" height="25px">Guide</div>
        <div class="tab tab2" id="tab2">
        <image src="assets/images/guide.png"
           width="25px" height="25px" style="margin-right:20px;"> Tourist</div>
     </div>
     <div class="content1" id="content1">
         <form action="include/signup.inc.php" method="POST"  enctype="multipart/form-data">
         <div class="form-group">
             <label for="">Username :</label>
             <input type="text" placeholder="enter text here !" name="username">
         </div>
         <div class="form-group">
             <label for="">Email :</label>
             <input type="text"  name="email">
         </div>
         <div class="form-group">
             <label for="">Password :</label>
             <input type="password" name="password">
         </div>
         <div class="form-group">
             <label for="">address :</label>
             <input type="text" name="address" >
         </div>
         <div class="form-group">
             <label for="">Phone-number :</label>
             <input type="text" name="pnumber">
         </div>
         <div class="form-group">
             <label for="">experience :</label>
             <input type="text" name="textarea">
         </div>
         <div class="form-group">
             <label for="">Female :</label>
             <input type="radio" name="gender" value="male">
         </div>
         <div class="form-group">
             <label for="">male :</label>
             <input type="radio" name="gender" value="fmale">
         </div>
         <div class="form-group">
         <label for="image" id="upload" >Upload image</label>
         <input type="file" style="visibility:hidden" id="image" name="file">
         </div>
         <input type="submit" value="Register" name="submit">
         </form>
     </div>
     <div class="content2" id="content2">
     <form action="include/tsignup.inc.php" method="POST">
         <div class="form-group">
             <label for="">Username :</label>
             <input type="text" placeholder="enter text here !"
             name="username">
         </div>
         <div class="form-group">
             <label for="">Email :</label>
             <input type="text" name="email">
         </div>
         <div class="form-group">
             <label for="">Password :</label>
             <input type="password" name="password">
         </div>
         <div class="form-group">
             <label for="">address :</label>
             <input type="text" name="address">
         </div>
         <div class="form-group">
             <label for="">Phone-number :</label>
             <input type="text" name="pnumber">
         </div>
        
         <div class="form-group">
             <label for="">Female :</label>
             <input type="radio" name=gender value="fmail">
         </div>
         <div class="form-group">
             <label for="">male :</label>
             <input type="radio" name="gender" value="male">
         </div>
         <input type="submit" value="Register" name="submit">
     </div>
     </div>
     
      
    </div>
    
    <script>
        var tab1=document.getElementById('tab1');
        var tab2=document.getElementById('tab2');
        var content1=document.getElementById('content1')
        var content2=document.getElementById('content2')
        var message=document.getElementById('message')
        tab1.addEventListener('click',function(){
            content1.style.display="block";
           content2.style.display="none";
           tab1.style.background="#ccc";
           tab2.style.background="#fff";
           tab1.style.color="#fff";
           tab2.style.color="#000";

        })
        tab2.addEventListener('click',function(){

           content1.style.display="none";
           content2.style.display="block";
           tab2.style.background="#ccc";
           tab1.style.background="#fff";
           tab2.style.color="#fff";
           tab1.style.color="#000";

        })
        setTimeout(() => {
            message.style.display="block";
        }, 1000);
    </script>
</body>
</html>