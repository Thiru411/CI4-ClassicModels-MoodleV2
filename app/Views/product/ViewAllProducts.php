<?php

echo view('header'); 
echo view('sidebar'); 

helper('url');

$index_path = getenv('INDEX');
$img_path = getenv('IMG');
?>
		<h2>View All Products</h2>
                <table border="1">
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Actions</th>
                <?php
			
		foreach ($AllProducts as $product){
			echo "<tr>";
			echo "<td>" . $product['productName']. "</td>";
			echo "<td>" . $product['productDescription'] . "</td>";
			echo "<td> <img src=\"$img_path/thumbs/". $product['image']. "\" /> </a> </td>";
 			echo "<td>" . $product['buyPrice']. "</td>";
 			echo "<td> 
			<a href=\"$index_path/ProductController/getDrillDownProduct/". $product['productCode'] . "\"><img src=\"$img_path/more.jpg\" alt=\"More Details\" width=\"38\" height=\"38\" /> </a> <br> 	
			<a href=\"$index_path/ProductController/SelectandAddToCart/". $product['productCode'] . "\"> <img src=\"$img_path/addtocart.png\" alt=\"Add To Cart\" width=\"38\" height=\"38\" /> </a></a>	</td>" ;
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
