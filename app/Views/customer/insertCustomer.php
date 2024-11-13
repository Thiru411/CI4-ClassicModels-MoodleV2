<?php
 
/* Loads the form and url helper */	
helper(['url']);

echo view('header'); 
echo view('sidebar'); 

$index_path = getenv('INDEX');

//possibly use form helper and table library for this task.

?>
<?php echo form_open("$index_path/CustomerController/insertCustomer"); ?>

  <h1><p>Insert Customer Details</p></h1> <br />
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td width="181"><label for="customerName12">Customer Name</label></td>
      <td width="356"><input name="customerName" type="text" id="customerName" size="45"/></td>
    </tr>
    <tr>
      <td><label for="contactLastName">Contact Last Name</label></td>
      <td><input name="contactLastName" type="text" id="contactLastName" size="45"/></td>
    </tr>
    <tr>
      <td><label for="contactFirstName">Customer First Name</label></td>
      <td><input type="text" name="contactFirstName" id="contactFirstName" size="45"/></td>
    </tr>
    <tr>
      <td><label for="phone">Phone</label></td>
      <td><input type="text" name="phone" id="phone" size="45" /></td>
    </tr>
    <tr>
      <td><label for="addressLine1">Address 1</label></td>
      <td><input type="text" name="addressLine1" id="addressLine1" size="45"/></td>
    </tr>
    <tr>
      <td><label for="addressLine2">Address 2</label></td>
      <td><input type="text" name="addressLine2" id="addressLine2" size="45"/></td>
    </tr>
	 <tr>
      <td><label for="email">Email</label></td>
      <td><input type="text" name="email" id="email" size="45"/></td>
    </tr>
    <tr>
      <td><label for="city">City</label></td>
      <td><input type="text" name="city" id="city" size="45"/></td>
    </tr>
    <tr>
      <td><label for="state">State</label></td>
      <td><input type="text" name="state" id="state" size="45"/></td>
    </tr>
    <tr>
      <td><label for="postalCode">Postal Code</label></td>
      <td><input type="text" name="postalCode" id="postalCode" size="45"/></td>
    </tr>
    <tr>
      <td><label for="country">Country</label></td>
      <td><input type="text" name="country" id="country" size="45"/></td>
    </tr>
    <tr>
      <td><label for="creditLimit">Credit Limit </label></td>
      <td><input type="text" name="creditLimit" id="creditLimit" size="45"/></td>
    </tr>
	    <tr>
      <td><label for="password">Password</label></td>
      <td><input type="text" name="password" id="password" size="45"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="553" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td><input type="submit" name="save" id="save" value="Save New Customer" /></td>
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