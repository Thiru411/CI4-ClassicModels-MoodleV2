<?php

echo view('header'); 
echo view('sidebar'); 


/* Loads the form and url helper */	
helper(['url', 'form']);

$index_path = getenv("INDEX");
$img_path = get_env("IMG");

echo form_open("$index_path/ProductController/getProductByName/");

?>
<p>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script> $(function() {
var availableTags = [
//need to replace the following with a call to a function in the controller.
"18th century schooner",
"18th Century Vintage Horse Carriage",
"1900s Vintage Bi-Plane",
"1917 Maxwell Touring Car",
"1969 Corvair Monza",
"1969 Dodge Charger",
"1999 Yamaha Speed Boat",
"1998 Chrysler Plymouth Prowler",
"The Queen Mary",
"Pont Yacht",
"The USS Constitution Ship",
"American Airlines: B767-300",
"American Airlines: MD-11S",
"2003 Harley-Davidson Eagle Drag Bike",
"2002 Yamaha YZR M1"
];
$( "#productName" ).autocomplete({
source: availableTags
});
});
</script>

</head>
<body>
<div class="ui-widget">
<label for="productName">Product Search: </label>
<input name="productName" id="productName" size="45" />

<input type="submit" value="Go" />
</div>
      				    
      				  </p>

      				</form>

				<br />		
				<h2>View All Products</h2>
                <table border="1">
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Vendor</th>
                <th>Product Description</th>
                <th>Image</th>
                <th>More Details</th>
                <?php
			
				foreach ($AllProducts as $product){
				 echo "<tr>";
				 	$pc = $product['productCode'];
				 	$pn = $product['productName'];
				  	$pv = $product['productVendor'];
				   	$pd = $product['productDescription'];
				 	$img = $product['image'];
				 	echo "<td> $pc </td>";
				  	echo "<td> $pn </td>";
				  	echo "<td> $pv </td>";
 				   	echo "<td> $pd </td>";
 			   		echo "<td> <img src=\"$img_path/CI/assets/images/thumbs/$img\" /></td>";
 			    	echo "<td> <a href=\"$index_path/ProductController/getDrillDownProductForAdmin/$pc\"> More...</a></td>" ;
				 echo "</tr>";
				}
				?>
                </table>
                

<?php
echo $pager->links();
echo view('footer'); 


?>
</body>
</html>
