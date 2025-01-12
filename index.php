<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ashoka Ngo - Sumit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css?v=<?php echo time(); ?>">  <!--css file -->
	 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css?v=<?php echo time(); ?>">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <!--   ---Nav Bar ---  -->
   <header class="background" id="home">
   	 <nav><!--    navbar code start  -->
   	 	<input type="checkbox" id="check">
   	 	<label for="check" class="checkbtn">
   	 		<i class="fas fa-bars"></i>
   	 	</label>
   	 	<label class="logo">Ashoka</label>
   	 		<ul>
   	 			<li><a href="#home" class="active">Home</a></li>
   	 			<li><a href="#about">About Us</a></li>
   	 			<li><a href="#donate">Why Donate us</a></li>
   	 			<li><a href="#contact">Contact</a></li>
   	 			
   	 		</ul>
   	 </nav>

   	 <div>
    	 <h2 class="title">Every Child <br> Deserve to eat</h2>
     </div>
     <br><br>
     <div class="shot_links">
    	 <a href="donate.php" target="_blank" class="btn">Donate</a>
    	 <a href="#about" class="btn">About</a>
     </div>	 
    

   </header>

<!-- 	about us section -->
    <main >
    	<div class="about_background" id="about">
    		<h2 class="heading">about us</h2>
         <div class="transbox">
	
	           <p> A Non Political Helping Organization
            Helping Pithampur Team Help Pithampur distributed the ration material by making   kits to around 30 Families with the financial assistance provided by you
						  Our heartfelt thanks to all of you.
						  Thirty Kits Made.
						  Masale kit ....( Mirchi, Dhaniya, Haldi, Jira )
						  Parle G Biscuits and sanitizers were also given.
						  
						  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						  consequat.   proident, sunt in culpa qui officia deserunt mollit anim id 

				    </p>
         </div>
    	</div>
<!--   gallery code -->
    	<div class="trust" id="trust">
    		<h2 class="heading">Trust Gallery</h2>
    		<div class="gallery_container">
    			  <img src="gallery_1.webp"class="gallery_img">
    			  <img src="gallery_2.jpg" class="gallery_img">
    		   	<img src="gallery_3.jpg" class="gallery_img">
    		   	<img src="gallery_4.jpg" class="gallery_img">
    			  <img src="gallery_5.jpg" class="gallery_img">
    			  <img src="gallery_6.jpg" class="gallery_img">
    		</div>
    	</div>


<!-- 	    donation code -->
    	<div>
    		<div id="donate">
    				<h2 class="heading heading_bg">Why Donate Us</h2>
    				<div class="our_work_container">
    				  <div>
    				  	  <h1 class="health"><i>Health -</i></h1>
    					  <div class="para_container">
    					    <p class="health_para">We need your help to continue providing health care services for the people. Donate for health care is a platform that allows you to donate money in order to improve people lives. </p>
    					  </div>
    			  	</div>
                  <br><br>
              <div>
    					    <h1 class="health"><i>Livelihood -</i></h1>
    					  <div class="para_container">
    					    <p class="health_para">Unemployment is the major problem of India, owing to lack of knowledge and guidance. Almost one-third of Indian population is youth who is striving hard to get employment these days. NGO is set up to offer employment opportunities to the underprivileged so that they can earn livelihood and live a better life, without relying on others.</p>
    					  </div>
    				  </div>
                <br><br>
              <div>
    				    	<h1 class="health"><i>Education -</i></h1>
    					  <div class="para_container">
    					     <p class="health_para">Education is the right of every kid and keeping this fact in mind, we are striving hard for the betterment of the unprivileged by arranging education opportunities for them. Education is the sole thing that can take our country to the unmatched heights and thus our NGO aims at educating needy children who cannot study due to lack of opportunities and resources.</p>
    					  </div>
    			  	</div>
    			  </div>
    		</div>
    	</div>  
    </main> 

<!-- 	footer 1 code  -->
    	<footer>
    	 <div class="footer" id="contact">
	    	 	 <div>
	    	 	 	 <h2>Ashoka</h2>
	    	 	 	  <hr>
	    	 	 	  <p class="footer_item">256 AE-Housing.Vis*** Jh**  </p>
	    	 	 	  <p class="footer_item">Housing.Vis*** Jh**  </p>
	    	 	 	  <p class="footer_item">9399805947</p>
	    	 	 </div>
	    	 	 <div class="quick_container">
	    	 	 	<h2>Quick Links</h2>
	    	 	 	<hr>
		    	 	 	<a href="#home" class="quick_link">Home</a><br>
		    	 	 	<a href="#about" class="quick_link">About Us</a><br>
		    	 	 	<a href="#contact" class="quick_link">Contact</a><br>
              <a href="#contact" class="quick_link">Trust Gallery</a><br>
		    	 	 	<a href="donate.php" class="quick_link">Donate</a><br>
	    	 	 </div>
	    	 	 <div class="contact_form">
	    	 	 	<h2 id="contact">Connect with us</h2>
<!-- 				 contact us form  -->
	    	 	 	  <form  method="POST">
		   	         <label>Name</label><br>
		   	   					<input type="Name" name="name" class="contact_in" required=""><br>
						   	 <label>Phone No</label><br>
						   	    <input type="Number" name="number" class="contact_in" required=""><br>
						   	 <label>Email </label><br>
						   	    <input type="Email" name="email" class="contact_in" required=""><br>
						   	 <button class="submit" name="submit">Contact Us</button>
						  </form>
	    	 	 </div>
    	 	 
    	 </div>	
<!-- 		footer 2  -->
     <div class="developer">
     	 Created by <a href="https://www.instagram.com/sumit_sahu_444/" target="_blank" class="name">  <i class="fab fa-instagram" aria-hidden="true" style="color: white; margin-right: 4px;" ></i>Mr. Sumit Sahu </a> for AnsrCoach Internship Program
     </div>

    	</footer>
</body>
</html>
<?php
// if your submit then this below cod execute 
  if(isset($_POST['submit'])) 
  {
      include 'connection.php';
  	$name=$_POST['name'];
  	$number=$_POST['number'];
  	$email=$_POST['email'];

  	$query= "INSERT INTO `contact_table`( `name`, `phone`, `email`) VALUES ('$name','$number','$email')";
  	$check=mysqli_query($con,$query);
     if($check)
     {
         header("location:/success.php");
     }
  }
?>
