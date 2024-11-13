<?php

/* Loads the form and url helper */	
helper(['url']);

$img_path = getenv('IMG');
$index_path = getenv('INDEX');

echo view('header'); 
echo view('sidebar'); 

$pc = $product['productCode'];
$image = $product['image'];

?>
<?php echo form_open("$index_path/ProductController/handleCartActivity/$pc"); ?>

  <h3><b>Products Details for product: <?php echo $product['productCode']; ?></b></h3>
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="181"><label for="productName">Product Name</label></td>
      <td width="356"><input name="productName" type="text" id="productName" value="<?php echo $product['productName']; ?>" size="45" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>Product Line</td>
      <td><input name="productLine" type="text" id="productLine" value="<?php echo $product['productLine']; ?>" size="45" readonly="readonly"  /></td>
    </tr>
    <tr>
      <td><label for="productScale">Product Scale</label></td>
      <td><input name="productScale" type="text" id="productScale" value="<?php echo $product['productScale']; ?>" size="45" readonly="readonly"  /></td>
    </tr>
    <tr>
      <td><label for="productVendor">Product Vendor</label></td>
      <td><input name="productVendor" type="text" id="productVendor" value="<?php echo $product['productVendor']; ?>" size="45" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><label for="Description">Description</label></td>
      <td><textarea name="Description" cols="45" readonly="readonly" id="Description"><?php echo $product['productDescription']; ?></textarea></td>
    </tr>
	<tr>
      <td><label for="quanitytPurchased">Quantity Purchased</label></td>
      <td><input name="quanitytPurchased" type="text" id="quanitytPurchased" value="1" size="5" /></td>
    </tr>
    <tr>
      <td><label for="quanitytInStock">Quantity In Stock</label></td>
      <td><input name="quanitytInStock" type="text" id="quanitytInStock" value="<?php echo $product['quantityInStock']; ?>" size="45" readonly="readonly" /></td>
    </tr>
    <tr>
      <td><label for="price">Price</label></td>
      <td><input name="price" type="text" id="price" value="<?php echo $product['buyPrice']; ?>" size="45" readonly="readonly" /></td>
    </tr>
    <tr>											
      <td colspan="2"><img src="<?php echo $img_path . "/products/$image"?>" width="470" height="300" /></td>
    </tr>																
<!--  </table>  -->
  <p>&nbsp;</p>
<!--  <table width="553" border="0" cellpadding="5" cellspacing="5">  -->
    <tr>
      <td><input type="submit" name="add" value="Add To Cart" /></td>
      <td><input type="submit" name="cancel" id="cancel" value="Go Back" /></td>
    </tr>
  </table>
 </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>

<?php echo view('footer'); ?>