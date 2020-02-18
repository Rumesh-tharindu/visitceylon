<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    
    <div class="container">
    <div class="header">
       <p>Sign into VisitCeyloan</p>
      </div>
      <form action="include/login.inc.php" method="POST">
      
      <div class="form-group">
      <label for="">Username or Email</label>
         <input type="text" name="username">
      </div>
         
         <div class="form-group">
         <label for="">password</label>
         <input type="password" name="password">
         </div>
         <input type="submit" name="submit" value="Sign In" id="sign-in">
      </form>
      <div class="info">
          <p>New to VisitCeyloan ? <a href="signup.php"> Create an new account</a></p>
      </div>
    </div>
</body>
</html>