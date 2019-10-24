<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Local Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- FONT AWSOME CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Sign In</title>
</head>
<body>
	<div class="container-fluid">

		<div class="row align-items-center pt-5 pb-5">
			<div class="col-4"></div>
	    	<div class="col-4">
	        	<form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
	        		<?php echo $this->session->flashdata('msg2');?>
	        		<?php echo $this->session->flashdata('msg3');?>
	        		<?php echo $this->session->flashdata('msg4');?>
	        		<?php echo $this->session->flashdata('msg5');?>
	        		<h2 class="form-signin-heading">Please sign in</h2>

	        		<?php echo $this->session->flashdata('msg');?>

	            	<label for="username" class="sr-only">Username</label>
	            	<input type="email" name="email" class="form-control" placeholder="Email" required autofocus>

	            	<label for="password" class="sr-only">Password</label>
	            	<input type="password" name="password" class="form-control" placeholder="Password" required>

	            	<div class="checkbox">
	             		<label>
	                		<input type="checkbox" name="remember_me" > Remember me
	                		<!-- Orig value="remember-me" 
	                			This defaults to "on" when ticked & html "value=..." is not present in the html 
	                			and empty/null, when not ticked. 
	                		-->
	            		</label>
	           		</div>

	           		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	        	</form>
	       </div>
	       <div class="col-4"></div>
       	</div>

       	<!-- /////////////////////////////////// -->
		<!-- ///////////// FOOTER ////////////// -->
		<!-- /////////////////////////////////// -->
		<footer class="row bg-dark align-items-end">
		<!-- For grids that are the same from the smallest of devices to the largest, use the .col 
			Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to .col
		-->
			<div class="col">col</div>
		    <div class="col">col</div>
		    <div class="col">col</div>
		    <div class="col">col</div>
		</footer>

	<!-- /////////////////////////////////// -->
	<!-- /////////////////////////////////// -->
    </div><!-- end BS container -->

	<!-- /////////////////////////////////// -->
	<!-- JS SCRIPTS BOTTOM OF BODY TAG ///// -->
	<!-- /////////////////////////////////// -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	<!-- NOTE: We can also echo site_url('assets/js/jquery.min.js') if assets was contained inside application dir... -->
</body>
</html>