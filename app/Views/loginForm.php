<?php 

/* Loads the form and url helper */	
helper(['url', 'form']);

$index_path = getenv('INDEX');
$js_path = getenv('JS');
$base = base_url() . index_page() . "/";

$this->session = \Config\Services::session();

?>

 <!-- jQuery - the core -->
	<script src="<?php echo $js_path . "/jquery-1.3.2.min.js"?>" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="<?php echo $js_path . "/slide.js"?>" type="text/javascript"></script>

</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>Welcome to Mini Things</h1>
				<h2>Purveyors of Miniature Toys</h2>		
				<p class="grey">We strive to offer you the very best little things on the web at the littlest  prices</p>
			</div>
			<div class="left">
				<!-- Login Form --> 		  
				<?php echo form_open($index_path.'/CustomerController/ValidateUser'); ?>
				
					<h1>Member Login</h1>
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" value="" size="23" />
					<label class="grey" for="password">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Link -->
				
					<h1>Not a member yet? <a href="<?php echo $index_path; ?>/register">Sign up!!</a></h1>			
                    <h2>Benefits of Membership</h2>
                    - Monthly newsletter
                    <br>- Special Offers & discounts
                    <br>- Free entry to Mini Things annual convention
                    <br>- Ability to track your orders
			</div>
		</div>
</div> <!-- /login -->	

	<!-- The tab on top -->	
	<?php if (session()->get('customerName')): 
    $customername=session()->get('customerName'); ?>
<?php endif; ?>	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>Hello <?php if (isset($customername)) echo $customername; ?></li> <!--carol -->

			<li class="sep">|</li>
			<li><a href="#">Logout</li>

			<li id="toggle">
			<?php if($customername==''){?>

				<a id="open" class="open" href="#">Log In | Register</a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>	
				<?php }?>
		
			</li>

			<li class="right">&nbsp;</li>

		</ul> 
	</div> <!-- / top -->
	
</div> <!--panel -->