<?php

/* Loads the form and url helper */	
helper(['url', 'html']);

echo view('header'); 
echo view('sidebar');

$index_path = getenv("INDEX");

$pc     = $product['productCode'];
$img 	= $product['image'];

?>

<?php echo form_open("$index_path/ProductController/handleProductActivity/$pc/"); ?>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="<?php echo "$index_path/ProductController/handleProductActivity/$pc/"; ?>">
  <p><h1>Details for Product: <?php echo $pc  ?></p></h1> <br />
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="181"><label for="productName">Product Name</label></td>
      <td width="356"><input name="productName" type="text" id="productName" size="45" value="<?php echo $product['productName'] ?>" /></td>
    </tr>
    <tr>
      <td><label for="">Product Vendor</label></td>
      <td><input name="productVendor" type="text" id="productVendor" size="45" value="<?php echo $product['productVendor'] ?>"  /></td>
    </tr>
    <tr>
      <td><label for="description">Description</label></td>
      <td><textarea name="description" cols="45" rows="6" id="description"><?php echo $product['productDescription'] ?></textarea></td>
    </tr>
    <tr>
      <td>Product Line</td>
      <td><input name="productLine" type="text" id="productLine" size="45" value="<?php echo $product['productLine'] ?>"  /></td>
    </tr>
    <tr>
      <td>Product Scale</td>
      <td><input name="productScale" type="text" id="productScale" size="45" value="<?php echo $product['productScale'] ?>"  /></td>
    </tr>
    <tr>
      <td>Qty In Stock</td>
      <td><input name="quantityInStock" type="text" id="quantityInStock" size="45" value="<?php echo $product['quantityInStock'] ?>"  /></td>
    </tr>
    <tr>
      <td>Buy&nbsp;Price</td>
      <td><input name="buyPrice" type="text" id="buyPrice" size="45" value="<?php echo $product['buyPrice'] ?>"  /></td>
    </tr>
    <tr>
      <td>MSRP</td>
      <td><input name="msrp" type="text" id="msrp" size="45" value="<?php echo $product['MSRP'] ?>"  /></td>
    </tr>
    <tr>
      <td colspan="2"><img src="<?php echo $img_base . "CI/assets/images/products/$img"?>" width="470" height="300" /></td>
    </tr>
    <tr>
      <td><label for="userfile">Update The Image?</label></td>
      <td><input name="userfile" type="file" id="userfile" size="40" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td><input type="submit" name="insert" id="insert" value="Insert Product" /></td>
      <td><input type="submit" name="update" id="update" value="Update Product" /></td>
      <td><input type="submit" name="delete" id="delete" value="Delete Product" /></td>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</form>
<?php echo >view('footer'); ?>