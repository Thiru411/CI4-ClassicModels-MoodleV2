<?php

echo view('header'); 
echo view('sidebar'); 

/* Loads the form and url helper */	
helper(['url']);

$img_path = getenv("IMG");
$index_path = getenv("INDEX");
?>			
				<br />		
				<h2>Search Results</h2>
                <table border="1">
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Vendor</th>
                <th>Product Description</th>
                <th>Image</th>
                <th>More Details</th>
                <?php
			
				foreach ($Products as $product){
				 echo "<tr>";
				 	
				 	$pc  = $product['productCode'];
				 	$img = $product['image'];
				 	echo "<td> $pc </td>";
				  	echo "<td>" . $product['productName']        . " </td>";
				  	echo "<td>" . $product['productVendor']      . " </td>";
 				   	echo "<td>" . $product['productDescription'] . "</td>";
 			   		echo "<td> <img src=\"$img_path/thumbs/$img\" /></td>";
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
