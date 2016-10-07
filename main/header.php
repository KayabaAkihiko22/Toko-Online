<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Takeda Rena Shopping Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="<?php echo base_url(); ?>assets/themes/less/bootshop.less">
	<script src="<?php echo base_url(); ?>assets/themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo base_url(); ?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url(); ?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url(); ?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/images/ico/logo-rena-chan.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
	<?php echo $this->session->flashdata('message');?>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong>&nbsp;<?php $tes = $this->session->userdata('login_ok'); if($tes == TRUE) { echo $this->session->userdata('userakun'); } else { echo "Guest";}?></strong></div>
	<div class="span6">
	<div class="pull-right">
		<a href="<?php echo base_url(); ?>index.php/main/product_summary"><span class="">Fr</span></a>
		<a href="<?php echo base_url(); ?>index.php/main/product_summary"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">Rp.<?php echo $this->cart->total();?></span>
		<a href="<?php echo base_url(); ?>index.php/main/pRp.<?php echo $this->cart->total();?>roduct_summary"><span class="">$</span></a>
		<a href="<?php echo base_url(); ?>index.php/main/product_summary"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i><?php echo $this->cart->total_items();?> Items in your cart </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url(); ?>index.php"><img src="<?php echo base_url(); ?>assets/themes/images/logo2.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo base_url(); ?>index.php/main/special_offer">Specials Offer</a></li>
	 <li class=""><a href="<?php echo base_url(); ?>index.php/main/normal">Delivery</a></li>
	 <li class=""><a href="<?php echo base_url(); ?>index.php/main/contact">Contact</a></li>
	 <li class="">
	 <?php 
	 $validasi = $this->session->userdata('login_ok');
	 if($validasi == FALSE) : ?>
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="<?php echo base_url(); ?>index.php/main/userlogin" method="post">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Username" name="username">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password" name="password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>
		  </div>
		<?php endif; ?>
		<?php if($validasi == TRUE) : ?>
			<a href="<?php echo base_url(); ?>index.php/main/userlogout" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
		<?php endif; ?>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->