
<?php

include("functions/functions.php");
include("includes/db.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("header.php");
cart();

?>


    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span>
    

    <?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
     
<div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        

    <?php  getbrands();  ?>


 
</ul>
 <br>
 <br>

     
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
      
           <br>
 <br>
 <br>
     
 
        <?php

         special();

        ?>

    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Service</div>
        <table class="table">
            <tr class='tr'> 
            <th class="title_box">NAME:</th>
            <th class="title_box">SERVICE:</th>
            <th class="title_box">MOBILE NO:</th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Cloud Computing</th><th> 8076626714,<br>8766269191,<br></th>
            </tr><tr class='tr'>
              <th>Power Technologies</th><th>Robotics</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Web Development</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Networking</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Database Manage</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Android App Development</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>SEO and SMO</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>AI and ML</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
            <tr class='tr'>
              <th>Power Technologies</th><th>IOT</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
            <tr class='tr'>
              <th>Power Technologies</th><th>Graphic Design</th><th><br>+(91)-9819695422,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Animation-2D and 3D</th><th><br>+(91)-9819695422,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Software Development</th><th><br>+(91)-9819695422,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Cyber Security</th><th><br>+(91)-9819695422,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>IT Support</th><th> 8076626714,<br>8766269191,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Data Entry</th><th><br>+(91)-9819695422,<br></th>
            </tr>
			<tr class='tr'>
              <th>Power Technologies</th><th>Repair of Electronics</th><th><br>+(91)-9819695422,<br></th>
            </tr>
        </table>
        <br> 
</div>

    <!-- end of center content -->
<div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Guest!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;item(s)<br />
          <span class="border_cart"></span> Total: <span class="price"><?php total_price(); ?></span> </div>
        <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
       
       <br>
     
            <?php
 
            special();

           ?> 

        <br>
     
 
        <?php

         special();

        ?>
        
             <br>
     
 
        <?php

         special();

        ?>
     <br>
     
 
        <?php

         special();

        ?>


      
        <!-- end of right content -->
</div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"> <img src="images/footer_logo.png" alt="" width="170" height="49"/> </div>
    <div class="center_footer"> All Rights Reserved 2016<br />
           <img src="images/payment.gif" alt="" /> </div>
    
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
