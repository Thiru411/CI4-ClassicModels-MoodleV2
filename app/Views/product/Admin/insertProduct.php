<?php

/* Loads the form and url helper */	
helper(['url']);

$index_path = getenv("INDEX");

echo view('header'); 
echo view('sidebar'); 


?>
<?php echo form_open("$index_path/ProductController/insertProduct");?>      
 
  <h1><p>Insert Product</p></h1><br /><br />
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="181"><label for="productCode">Product Code..</label></td>
      <td width="356"><input name="productCode" type="text" id="productCode" size="45"/></td>
    </tr>
    <tr>
      <td><label for="productName">Product Name</label></td>
      <td><input name="productName" type="text" id="productName" size="45"/></td>
    </tr>
    <tr>
      <td><label for="productLine">Product Line</label></td>
      <td><input type="text" name="productLine" id="productLine" size="45"/></td>
    </tr>
    <tr>
      <td><label for="productScale">Product Scale</label></td>
      <td><input type="text" name="productScale" id="productScale" size="45" /></td>
    </tr>
    <tr>
      <td><label for="productVendor">Product Vendor/</label></td>
      <td><input type="text" name="productVendor" id="productVendor" size="45"/></td>
    </tr>
    <tr>
      <td><label for="productDescription">Description</label></td>
      <td><textarea name="productDescription" cols="38" id="productDescription"></textarea></td>
    </tr>
    <tr>
      <td><label for="quantityInStock">Quantity In Stock</label></td>
      <td><input type="text" name="quantityInStock" id="quantityInStock" size="45"/></td>
    </tr>
    <tr>
      <td><label for="buyPrice">Buy Price</label></td>
      <td><input type="text" name="buyPrice" id="buyPrice" size="45"/></td>
    </tr>
    <tr>
      <td><label for="MSRP">MSRP</label></td>
      <td><input type="text" name="MSRP" id="MSRP" size="45"/></td>
    </tr>
    <tr>
      <td><label for="userfile">Image</label></td>
      <td><input name="userfile" type="file" id="userfile" size="45" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="553" border="0" cellpadding="5" cellspacing="5">
  
    <tr>
      <td><input type="submit" name="save" id="save" value="Save New Customer"></td>
      <td><input type="reset" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</form>

<?php echo view('footer'); ?>