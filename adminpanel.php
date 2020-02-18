<?php
 include "include/db.inc.php";
?>
<?php
 /*session_start();
 if(!empty($_SESSION)){
  header('location: /visitceylon/adminpanel.php');
 }
 else{
 
  header('location: /visitceylon/admin.php');
  }*/
?>
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
       <a href="users.php">ADMINS</a>
       <a href="guidepanel.php">GUIDES</a>
       <a href="post.php">ARTICLES</a>
       <a href="createarticle.php">CREATE ARTICLE</a>
       </div>
    </div>
    <div class="col-md-10">
      <h1>ADMINS</h1>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
style="margin-top:30px; margin-bottom:40px;">
  Add User
</button>
<div class="container">
<table class="table table-bordered" >
  <thead>
    <tr style="background-color:#ccc;text-align:center;">
      <th scope="col">Useranme</th>
      <th scope="col">Email</th>
      <th scope="col">type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $query="SELECT * FROM admin";
     $result=$mysqli->query($query);
     
     
  ?>
    <?php while($row=$result->fetch_assoc()):?>
    <tr style="text-align:center;">
      <th scope="row"><?php echo $row['adminName'];?></th>
      <td><?php echo $row['adminEmail'];?></td>
      <td><?php echo $row['type'];?></td>
      <td><a href="adminpanel.php?edit=" class="btn btn-success" style="margin-right:30px;">UPDATE</button>
      <a href="include/process1.php?delete=<?php echo $row['adminId'];?>" class="btn btn-danger">DELETE</button></td>
    </tr>
   <?php endwhile; ?>
</tbody>
</table>
</div>
      

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add user admin +</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="include/adminuser.inc.php" method="POST">
           <div class="form-group">
             <label for="">Username</label>
             <input type="text" name="username">
           </div>
           <div class="form-group">
             <label for="">Email</label>
             <input type="text" name="email">
           </div>
           <div class="form-group">
             <label for="">Password</label>
             <input type="text" name="password">
           </div>
           <div class="form-group">
             <label for="">type</label>
             <select name="type">
               <option value="admin">Admin</option>
               <option value="author">Author</option>
               <option value="publisher">Publisher</option>
             </select>
           </div>
           <input type="submit" value="add user" name="submit">
        </form>
      </div>
      
    </div>
  </div>
</div>

    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>
</html>