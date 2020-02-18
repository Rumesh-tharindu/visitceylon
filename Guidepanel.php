<?php
 include "include/db.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/adminpanel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <nav>
      <p>ADMIN Panel
        <img src="assets/images/panel.png" heigth="30px;" width="30px;" alt="">
      </p>
    </nav>
    <div class="row">
    <div class="col-md-2">
       <div class="sidebar">
       <a href="users.php">USERS</a>
       <a href="guide.php">GUIDES</a>
       <a href="post.php">ARTICLES</a>
       <a href="carticles">CREATE ARTICLE</a>
       </div>
    </div>
    <div class="col-md-10">
      <h1>GUIDES</h1>

<div class="container">

<table class="table table-bordered" style="margin-top:50px">
  <thead>
    <tr style="text-align:center;">
      <th scope="col">Useranme</th>
      <th scope="col">Email</th>
      <th scope="col">address</th>
      <th scope="col">Phone number</th>
      <th scope="col">Experience</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $query="SELECT * FROM guide";
     $result=$mysqli->query($query);
     
     
  ?>
  <?php while($row=$result->fetch_assoc()):?>
    <tr style="text-align:center;">
      <th scope="row"><?php echo $row['username'];?></th>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['pnumber'];?></td>
      <td><?php echo $row['experience'];?></td>
      <td><a href="adminpanel.php" class="btn btn-success" style="margin-right:30px;">UPDATE</a></td>
      <td> <a type="process.php" class="btn btn-danger">DELETE</a></td></td>
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
    
</body>
</html>