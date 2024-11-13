<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerPageModel extends Model { 

	protected $table = 'customers';
	
	protected $allowedFields = ['customerNumber', 'addressLine1', 'addressLine2', 'contactFirstName', 'contactLastName', 'city','country', 'creditLimit', 
'customerName', 'email', 'phone', 'postalCode', 'state'];
	
	
////////////////////////////////////////////////////////////////////////////////////////////////
	

}//end class ProductPageModel

?>
