<?php
 session_start(); // start session 
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Donate Us</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body class="donate_body">
	<div class="form_div">
		<h1 class="donate_heading">Donation Form</h1>
<!-- form code  -->
	   <form action=""  method="POST" class="form">
	   	 <label>Name</label><br>
	   	   <input type="Name" name="name" class="input" required=""><br>
	   	 <label>Phone No</label><br>
	   	   <input type="Number" name="number" class="input" required=""><br>
	   	 <label>Email </label><br>
	   	    <input type="Email" name="email" class="input" required=""><br>
	   	 <label>Amount </label><br>
	   	    <input type="number" name="amount" class="input" required=""><br>
	   	    <button name="submit"class="submit_btn">Continue</button>
<?php 
   // if usr click on submit then below code execute 
 
				  if(isset($_POST['submit']))
				  {
				  	  include 'connection.php';
					  	$name=$_POST['name'];
					  	$number=$_POST['number'];
					   	$email=$_POST['email'];
					  	$amount=$_POST['amount'];
                                                     // insert data into donation table 
					  	$query1="INSERT INTO `donation_table`(`name`, `phone`, `email`, `amount`) VALUES ('$name','$number','$email','$amount')";
					  	$check=mysqli_query($con,$query1);
					  	if($check)
					  	{
					  		?>
					  		   <form action="success.php"><script class="hidden" src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_InclMD0xKUAbJl" async name="submit"> </script> </form>

					  		 <?php

					  	}
					  }
									  
  	        ?>
         

	   </form>
	 </div>  

</body>
</html>
