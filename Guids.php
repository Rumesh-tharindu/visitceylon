<?php
include "header.php";
include "include/db.inc.php";
?>


               <div class="jumbotron text-center">
	  	          <h1>GUIDE</h1>
	  	          <h3>ARE YOU A GUIDE?</h3>
				  <h5><p class="text-justify text-center">Our website have the best tourist Guides in Sri Lanka.You can commiunicate with them easily using this website.</p></h5>
				  <button type="button" class="btn btn-dark btn-lg">Register</button>
				  <button type="button" class="btn btn-dark btn-lg">Login</button>
				</div>
						<br><br>



						<div class="container text-center">
  <h2 >TOP RATING GUIDES</h2>
 
  <div class="row">
  <?php
     $query="SELECT * FROM guide ORDER BY id  DESC";
     $result=$mysqli->query($query);
     while($row=$result->fetch_assoc()):?>
    <div class="col-md-3" style="border:1px solid #ccc;margin:20px;">
   
      <div class="thumbnail">
          <img src="assets/images/profile/<?php echo $row['image']?>" alt="Lights" style="width:100px;
          height:100px;border-radius:50px">
          <div class=" caption" ">
            <h6><p><?php echo $row['username']?></p></h6>
            <p><?php echo $row['experience']?></p>
          </div>
         
      </div>
      
    </div>
    <?php endwhile; ?>
    </div>
  </div>
</div>         
   
                      
      </section>



       <div class="jumbotron text-center">
	  	          <h1>REGISTER NOW !!!</h1>
	  	          <h3>ARE YOU A TRAVELLER</h3>
				  <h5><p class="text-justify text-center">Are you planning a new tour? If you want to contact trusted and clever guide, register quickly!!</p></h5><br><br>
				  <button type="button" class="btn btn-primary btn-lg">Register</button>
				  <button type="button" class="btn btn-primary btn-lg">LogIn</button>
				</div>
						<br><br>



 <?php
include "footer.php";

?>