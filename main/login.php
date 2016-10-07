<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="<?php echo base_url(); ?>index.php/main/product_summary.html"><img src="<?php echo base_url(); ?>assets/themes/images/ico-cart.png" alt="cart"><?php echo $this->cart->total_items();?> Items in your cart  <span class="badge badge-warning pull-right">Rp.<?php echo $this->cart->total();?></span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="<?php echo base_url(); ?>index.php/main/products"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="<?php echo base_url(); ?>index.php/main/products">HEALTH & BEAUTY [18]</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/main/products">SPORTS & LEISURE [58]</a></li>
			<li><a href="<?php echo base_url(); ?>index.php/main/products">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul>
		<br/>
		  <div class="thumbnail">
			<img src="<?php echo base_url(); ?>assets/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Clothes</h5>
				<h4 style="text-align:center"><a class="btn" href="<?php echo base_url(); ?>index.php/main/product_details"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>assets/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Clothes</h5>
				    <h4 style="text-align:center"><a class="btn" href="<?php echo base_url(); ?>index.php/main/product_details"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>assets/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Register</h3>	
	<hr class="soft"/>
	
	<div class="row">
		<div class="span4">
			<div class="well">
			<h5>Create Your Account</h5><br/>
			<form action="<?php echo base_url(); ?>index.php/main/user" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputFname">Full Name <sup>*</sup></label>
					<div class="controls">
			  	<input type="text" id="inputFname" placeholder="Full Name" name="username">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="inputFname">Username <sup>*</sup></label>
					<div class="controls">
			  	<input type="text" id="inputFname" placeholder="Username" name="userakun">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="inputFname">Password <sup>*</sup></label>
					<div class="controls">
			  	<input type="password" id="inputFname" placeholder="Password" name="password">
					</div>
				</div>
			  <div class="controls">
			  <button type="submit" class="btn block">Create Your Account</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>Login</h5>
			<form action="<?php echo base_url(); ?>index.php/main/userlogin" method="post">
			  <div class="control-group">
				<label class="control-label" for="username">Username</label>
				<div class="controls">
				  <input class="span3"  type="text" id="username" placeholder="Username" name="username">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  id="inputPassword1" placeholder="Password" name="password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="<?php echo base_url(); ?>index.php/main/forgetpass">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>
<!-- MainBody End ============================= -->