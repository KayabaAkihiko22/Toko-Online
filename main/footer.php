<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<?php 
				 $tes = $this->session->userdata('login_ok'); if($tes == FALSE) : ?>
				<a href="<?php echo base_url(); ?>index.php/main/login">YOUR ACCOUNT</a>
				<a href="<?php echo base_url(); ?>index.php/main/login">PERSONAL INFORMATION</a> 
				<a href="<?php echo base_url(); ?>index.php/main/login">ADDRESSES</a> 
				<a href="<?php echo base_url(); ?>index.php/main/login">DISCOUNT</a>  
				<a href="<?php echo base_url(); ?>index.php/main/login">ORDER HISTORY</a>
				<?php endif; ?>
				<?php 
				 $tes = $this->session->userdata('login_ok'); if($tes == TRUE) : ?>
				<a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>">YOUR ACCOUNT</a>
				<a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>">PERSONAL INFORMATION</a> 
				<a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>">ADDRESSES</a> 
				<a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>">DISCOUNT</a>  
				<a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>">ORDER HISTORY</a>
				<?php endif; ?>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="<?php echo base_url(); ?>index.php/main/contact">CONTACT</a>  
				<a href="<?php echo base_url(); ?>index.php/main/register">REGISTRATION</a>  
				<a href="<?php echo base_url(); ?>index.php/main/legal_notice">LEGAL NOTICE</a>  
				<a href="<?php echo base_url(); ?>index.php/main/tac">TERMS AND CONDITIONS</a> 
				<a href="<?php echo base_url(); ?>index.php/main/faq">FAQ</a>
			 </div>
			 <div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="<?php echo base_url(); ?>index.php/main/special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url(); ?>assets/themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/themes/js/bootshop.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="<?php echo base_url(); ?>assets/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="<?php echo base_url(); ?>assets/themes/css/#" name="bootshop"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="<?php echo base_url(); ?>assets/themes/css/#" name="businessltd"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="amelia" title="Amelia"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="spruce" title="Spruce"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="superhero" title="Superhero"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="cyborg"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="cerulean"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="journal"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="readable"><img src="t<?php echo base_url(); ?>assets/hemes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="simplex"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="slate"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="spacelab"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="united"><img src="<?php echo base_url(); ?>assets/themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern1"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern2"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern3"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern4"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern5"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern6"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern7"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern8"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern9"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern10"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern11"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern12"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern13"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern14"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern15"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern16"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern17"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern18"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern19"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="<?php echo base_url(); ?>assets/themes/css/#" name="pattern20"><img src="<?php echo base_url(); ?>assets/themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>