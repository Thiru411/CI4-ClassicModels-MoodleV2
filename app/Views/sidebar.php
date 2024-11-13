<?php 

helper(['url']);

$index_path = getenv("INDEX");

?>

<div id="three-columns">
	  <div class="content">
			<div id="column1"><br />
				<h2>Customer View</h2>
				<ul class="list-style2">
      				<form id="form1" name="form1" method="post" action="">
      				  <p>
      				    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script> $(function() {
var availableTags = [
//need to replace the following with a call to a function in the controller.
"1969 Harley Davidson Ultimate Chopper",
"1952 Alpine Renault 1300",
"1996 Moto Guzzi 1100i",
"2003 Harley-Davidson Eagle Drag Bike",
"1972 Alfa Romeo GTA",
"1962 LanciaA Delta 16V",
"1968 Ford Mustang",
"2001 Ferrari Enzo",
"1958 Setra Bus",
"2002 Suzuki XREO",
"1969 Corvair Monza",
"1968 Dodge Charger",
"1969 Ford Falcon",
"1970 Plymouth Hemi Cuda",
"1957 Chevy Pickup",
"1969 Dodge Charger",
"1940 Ford Pickup Truck",
"1993 Mazda RX-7",
"1937 Lincoln Berline",
"1936 Mercedes-Benz 500K Special Roadster",
"1965 Aston Martin DB5",
"1980s Black Hawk Helicopter"
];
$( "#search" ).autocomplete({
source: availableTags
});
});
</script>

</head>
<body>
<div class="ui-widget">
<label for="search">Search: </label>
<input id="search" />

<input type="submit" value="Go" />
</div>
      				  </p>
      				</form></li>
					<li><a href="<?php echo $index_path; ?>/ProductController/getProducts/">View All Our Products</a></li>
					<li><a href="<?php echo $index_path; ?>/ProductController/viewCart">View Your Shopping Cart </a></li>
                    <li><a href="#">Your Orders</a></li>
                    <li><a href="#">Your Wishlist</a></li>
                    <li><a href="#">Your Recommendations</a></li>
                    <li><a href="#">Your Details</a></li>
					
				</ul><br />
                
<!------------------------------------------------------------------------------------------------------------------------------>

				<h2>Admin View</h2>
				<ul class="list-style2">			

                    <li class="first"><a href="<?php echo $index_path; ?>/CustomerController/getAllCustomers/0">Manage Customers</a></li>
					<li><a href="<?php echo $index_path; ?>/ProductController/getProductsForAdmin/0">Manage Products</a></li>
                    <li><a href="<?php echo $index_path; ?>/OrderController/getAllOrders/0">Manage Orders</a></li>
                 
					
				</ul>
				<p><a href="<?php echo $index_path; ?>/AuthenticationController/loginStaff" class="link-style">Staff Login</a></p>
			</div>
		<div id="column2">
				
                <table border="0"/>
               
     
                
</div>
	  </div>
	</div>
</div>