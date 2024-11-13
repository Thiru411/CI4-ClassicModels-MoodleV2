<?php 

/* Loads the form and url helper */	
helper(['url', 'form']);

$index_path = getenv('INDEX');
$js_path = getenv('JS');
$base = base_url() . index_page() . "/";

$this->session = \Config\Services::session();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini Things - Login</title>
	
	<!-- CSS -->
	<style>
		/* General styles */
		body {
			font-family: Arial, sans-serif;
			background: #f9f9f9;
			margin: 0;
			padding: 0;
		}
		
		#toppanel {
			width: 100%;
			background: #333;
			color: #fff;
		}
		
		#panel {
			width: 90%;
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			display: flex;
			flex-wrap: wrap;
			gap: 20px;
		}
		
		.left, .right {
			flex: 1 1 100%;
			background: #444;
			padding: 20px;
			border-radius: 8px;
			color: #fff;
		}

		.content {
			display: flex;
			flex-direction: column;
		}

		.left h1, .left h2, .right h1 {
			color: #fff;
		}
		
		.grey {
			color: #bbb;
		}

		.field {
			width: 100%;
			padding: 8px;
			margin: 5px 0;
			border-radius: 4px;
			border: 1px solid #ddd;
		}
		
		.bt_login {
			background: #5a9;
			border: none;
			color: #fff;
			padding: 10px;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}
		
		.bt_login:hover {
			background: #48a;
		}

		.tab {
			background: #333;
			padding: 10px 0;
			text-align: center;
		}

		.login {
			display: flex;
			justify-content: center;
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.login li {
			color: #fff;
			margin: 0 10px;
		}
		
		.login a {
			color: #fff;
			text-decoration: none;
		}

		.login a:hover {
			text-decoration: underline;
		}

		/* Footer */
		footer {
			background: #333;
			color: #fff;
			text-align: center;
			padding: 20px;
			position: relative;
			bottom: 0;
			width: 100%;
		}

		footer p {
			margin: 0;
			font-size: 14px;
		}

		/* Responsive Design */
		@media (min-width: 600px) {
			#panel {
				flex-direction: row;
			}

			.left, .right {
				flex: 1 1 30%;
			}
		}
	</style>
	
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
					<p class="grey">We strive to offer you the very best little things on the web at the littlest prices.</p>
				</div>
				<?php if (session()->getFlashdata('error')) : ?>
    <p style="color: red;"><?php echo session()->getFlashdata('error'); ?></p>
<?php endif; ?>
				<div class="left">
					<!-- Login Form --> 		  
					<?php echo form_open($index_path.'/CustomerController/ValidateUser'); ?>
					
					<h1>Member Login</h1>
					<label class="grey" for="email">Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label class="grey" for="password">Password:</label>
					<input class="field" type="password" name="password" id="password" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Remember me</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
					<a class="lost-pwd" href="#">Lost your password?</a>
					<?php echo form_close(); ?>
				</div>
				
				<div class="left right">			
					<!-- Register Link -->
					<h1>Not a member yet? <a href="<?php echo $index_path; ?>/register">Sign up!!</a></h1>			
                    <h2>Benefits of Membership</h2>
                    <p>
                    - Monthly newsletter<br>
                    - Special Offers & discounts<br>
                    - Free entry to Mini Things annual convention<br>
                    - Ability to track your orders
                    </p>
				</div>
			</div>
		</div> <!-- /panel -->	

		<!-- The tab on top -->	
	
	</div> <!-- /toppanel -->

	<!-- Footer -->
	<footer>
	<p>Upgraded to CI4 2022 - Carol Rainsford - Version 3 - 2013 Liz Bourke and Alan Ryan<a href="http://www.lit.ie"></a></p>
		</footer>
</body>
</html>
