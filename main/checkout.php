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
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="<?php echo base_url(); ?>index.php/main/product_details"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>assets/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
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
		<li class="active">Checkout Page</li>
    </ul>
	<table width="870px" height="300px" cellspacing="1" cellpadding="12" style="font-size: 20px;">
		<tr>
			<th>
				MemberID
			</th>
			<th>
			:
			</th>
			<td>
			<?php echo $this->session->userdata('username'); ?>
			</td>
		</tr>
		<tr>
			<th valign="top">
			Product
			</th>
			<th valign="top">
			:
			</th>
			<td valign="top">
				<?php 
				$cart = $this->cart->contents(); 
				foreach ($cart as $item) :
				?>
				<ul>
					<li><?= $item['name']; ?></li>
				</ul>
				<?php endforeach; ?>
			</td>
		</tr>
		<tr>
			<th>
				Total Item
			</th>
			<th>
			:
			</th>
			<td>
			<?= $this->cart->total_items(); ?>
			</td>
		</tr>
		<tr>
			<th>
				Total Price
			</th>
			<th>
			:
			</th>
			<td>
				 Rp <?= $this->cart->total(); ?> 
			</td>
		</tr>
		<tr>
			<th width="200">
				<a href="<?php echo base_url(); ?>index.php/main/confirmbuy"><button>CONFIRM BUY</button></a>
				<a href="<?php echo base_url(); ?>index.php/main/product_summary"><button>CANCEL</button></a>
			</th>
		</tr>
	</table>
    	
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->