<?php

echo view('header'); 
echo view('sidebar'); 

$index_page = getenv("INDEX");
 
$table = new \CodeIgniter\View\Table();

$template = [
	 'table_open' => '<table border="2" cellpadding="4" cellspacing="0">',
	 'thead_open' => '<thead>',
	 'thead_close' => '</thead>',
	 'heading_row_start' => '<tr>',
	 'heading_row_end' => '</tr>',
	 'heading_cell_start' => '<th>',
	 'heading_cell_end' => '</th>',
	 'tfoot_open' => '<tfoot>',
	 'tfoot_close' => '</tfoot>',
	 'footing_row_start' => '<tr>',
	 'footing_row_end' => '</tr>',
	 'footing_cell_start' => '<td>',
	 'footing_cell_end' => '</td>',
	 'tbody_open' => '<tbody>',
	 'tbody_close' => '</tbody>',
	 'row_start' => '<tr>',
	 'row_end' => '</tr>',
	 'cell_start' => '<td>',
	 'cell_end' => '</td>',
	 'row_alt_start' => '<tr>',
	 'row_alt_end' => '</tr>',
	 'cell_alt_start' => '<td>',
	 'cell_alt_end' => '</td>',
	 'table_close' => '</table>'
];

$table->setTemplate($template);

/* Loads the form and url helper */	
helper(['url', 'form']);

$index_path = getenv('INDEX');

?>
<?php echo form_open("$index_path/ProductController/handleCartActivity/0"); ?>		
             
	<p> <h3><b>Your cart contains: <?php  echo $NumberofItems;?> Products</b>  </h3></p>
				   
		<table border="1">
		<th>ID</th>
		<th>Product Code</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Action</th>


		<?php foreach ($CartDetails as $cartInfo){
					//echo $cartInfo['id'];
					echo "<tr>";
					echo "<td>".$cartInfo['id']."</td>";
					echo "<td>".$cartInfo['productCode']."</td>";
					echo "<td>".$cartInfo['productName']."</td>";
					echo "<td>".$cartInfo['qty']."</td>";
					echo "<td>".$cartInfo['price']."</td>";
					echo "<td> <a href=\"$index_page/ShoppingCartController/Remove/" . $cartInfo['id'] ."\"> More...</a></td>" ;
					echo "</tr>";
			}
		?>			   
		</table>		
		
		<p><b> Total &euro;<?php echo $CartValue;?></b></p>
		<input name="update" id="update" type="submit" value="Update" />
		<input name="Checkout" type="submit" value="Checkout" />
		<input name="ContinueShopping" type="submit" value="Continue Shopping" />
   </form>
   
<?php

echo view('footer'); 
?>
</body>
</html>
