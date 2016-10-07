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
		<li class="active">User Page</li>
    </ul>
	
    	<table width="870px" height="300px" cellspacing="1" cellpadding="12" style="font-size: 20px;">
    	<?php foreach($data as $row) : ?>
	    	<tr>
		    	<th rowspan="5" width="400px">
		    	<?php if ($row->gambar) { 
		    			echo "<img src='$row->gambar'>";
		    	 		}
		    			 else { 
		    			echo "<img src=". base_url('assets/img/defaultpicture.jpg').">";
		    			 } 
		    	?>
		    	</th>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Username
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->username; ?>
		    	</td>
		    	<td width="200">
		    		<button class="btn btn-primary" width="400"><a style="color: #ffffff;" href="">Edit Profile</a></button>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Password
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->password; ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Full Name
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->userakun; ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left" width="330px">
		    	Last Login
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td width="330px">
		    		<?= $row->lastlogin; ?>
		    	</td>
	    	</tr>
	    	<tr>
	    		<td colspan="">
	    			<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/tambah">Add New Product</a>
	    		</td>
	    	</tr>
	    <?php endforeach; ?>
    	</table>

    	<fieldset>
    		<legend>Transaksi</legend>
    		<table width="700">
    			<tr>
    				<td valign="top">
			    		<table>
			    			<tr>
				    			<th>
				    				<a href="<?php echo base_url(); ?>index.php/main/pending/<?= $row->username; ?>"><label style="width: 130px;" class="btn btn-large btn-info">Pending</label>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/waiting"><label style="width: 130px;" class="btn btn-large btn-info">Waiting</label>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/process"><label style="width: 130px;" class="btn btn-large btn-info">Process</label>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/delivery"><label style="width: 130px;" class="btn btn-large btn-info">Delivery</label>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/finish"><label style="width: 130px;" class="btn btn-large btn-info">Finish</label>
				    			</th>
			    			</tr>
			    		</table>
			    	</td>
			    	<td valign="top" align="center">
			    	<?php if($this->uri->segment(2) == "pending") : ?>
			    		<table width="700" border="2" style="
			    		font-size: 17px;
			    		">
			    			<tr>
			    				<th>Kode Transaksi</th>
			    				<th>Tanggal Beli</th>
			    				<th>Jumlah Item</th>
			    				<th>Total Harga</th>
			    				<th>Option</th>
			    			</tr>
			    			<?php 
			    			foreach ($pending as $row) :
			    			?>
			    			<tr>
			    				<th><?= $row->trxid; ?></th>
			    				<th><?= $row->tanggal; ?></th>
			    				<th><?= $row->qty; ?></th>
			    				<th><?= $row->harga; ?></th>
			    				<th><a href="<?php echo base_url(); ?>index.php/main/payment/<?= $row->userid; ?>/"><button style="width: 90px; height: 38px;" class="btn btn-large btn-info">$ PAY</button></th>
			    			</tr>
			    			<?php endforeach; ?>
			    		</table>
			    	<?php endif; ?>
			    	</td>
			    </tr>
			</table>

    	</fieldset>

		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->