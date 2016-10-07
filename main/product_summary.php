<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="<?php echo base_url(); ?>index.php/main/product_summary"><img src="<?php echo base_url(); ?>assets/themes/images/ico-cart.png" alt="cart"><?php echo $this->cart->total_items();?> Items in your cart  <span class="badge badge-warning pull-right">Rp.<?php echo $this->cart->total();?></span></a></div>
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
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  SHOPPING CART [ <small><?php echo $this->cart->total_items();?> Item(s) </small>]<a href="<?php echo base_url(); ?>index.php/main/products" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	<table class="table table-bordered">
		<tr><th> I AM ALREADY REGISTERED  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Username</label>
				  <div class="controls">
					<input type="text" id="inputUsername" placeholder="Username">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Password</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Sign in</button> OR <a href="register.html" class="btn">Register Now!</a>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					  <a href="forgetpass.html" style="text-decoration:underline">Forgot password ?</a>
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table>		
	
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity/Update</th>
				  <th>Price</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
              	<?php 
              	$cart = $this->cart->contents();
              	foreach ($cart as $item) :
              	?>
                <tr>
                  <td> <img width="60" src="<?php echo base_url($item['options']['gambar']); ?>" alt=""/></td><?php #assets/themes/images/products/4.jpg ?>
                  <td><?= $item['name']; ?><br/>Color : black, Material : metal</td>
				  <td>
					<div class="input-append">
						<form method="post" action="<?php echo base_url(); ?>index.php/keranjang/update/<?php echo $item['rowid']; ?>">
							<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" name="jumlah" value="<?php echo $item['qty']; ?>"disabled/>
							<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="hidden" name="qty" value="<?php echo $item['qty']; ?>"/>
							<input class="btn" name="submit" type="submit" value="+"><?php #echo "<i class='icon-plus'></i>" ?>
							<input class="btn" name="submit" type="submit" value="-"><?php #echo "<i class='icon-minus'></i>" ?>
						</button><a href="<?php echo base_url(); ?>index.php/keranjang/delete/<?php echo $item['rowid']; ?>">
						<button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button></a>
					</form>				
				</div>
				  </td>
                  <td>Rp <?= $item['price'] ?></td>
                  <td>Rp <?= $item['subtotal']?></td>
                </tr>
            <?php endforeach; ?>
				 <tr>
                  <td colspan="4" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>Rp.<?php echo $this->cart->total();?></strong></td>
                </tr>
				</tbody>
            </table>

	<a href="<?php echo base_url(); ?>index.php/main/products" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<?php $tes = $this->session->userdata('login_ok'); if($tes == FALSE) : ?>
	<a href="<?php echo base_url(); ?>index.php/main/login" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	<?php endif; ?>
	<?php $tes = $this->session->userdata('login_ok'); if($tes == TRUE) : ?>
	<a href="<?php echo base_url(); ?>index.php/main/checkout" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	<?php endif; ?>
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->