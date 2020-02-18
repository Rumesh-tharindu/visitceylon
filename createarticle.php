<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/adminpanel.css">
</head>
<body>
    <nav>
      <p style="margin-top:10px;">ADMIN Panel
        <img src="assets/images/panel.png" heigth="30px;" width="30px;" alt="">
        <a href="adminlogout.php" 
        style="margin-left:1000px; background-color:#000;color:#fff;
        padding:10px 25px;border-radius:3px;text-decoration:none;">LOGOUT</a>
      </p>
     
    </nav>
    <div class="row">
    <div class="col-md-2">
       <div class="sidebar">
       <a href="users.php">USERS</a>
       <a href="guidepanel.php">GUIDES</a>
       <a href="post.php">ARTICLES</a>
       <a href="createarticle.php">CREATE ARTICLE</a>
       </div>
    </div>
    <div class="col-md-10">
      <h1>CREATE ARTICLE</h1>
      <form action="" multiple="multiple">
          <div class="form-group">
          <label for="">Tittle</label>
          <input type="text" name="title">
          </div>
          <div class="form-group">
          <label for="file">Select file</label>
          <input type="file" id="file">
          </div>
          
          <div class="form-group">
          <textarea name="" id="" cols="30" rows="10">
              type your article here
          </textarea>
          </div>
          
          <input type="submit"  value="POST" name="submit">
      </form>
 
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>
</body>
</html>