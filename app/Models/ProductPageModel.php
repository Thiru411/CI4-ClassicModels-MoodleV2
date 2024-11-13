<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductPageModel extends Model { 



	protected $table = 'products';
	
	protected $allowedFields = ['productCode', 'productName', 'productVendor', 'MSRP', 'image'];
	
	
////////////////////////////////////////////////////////////////////////////////////////////////
	

}//end class ProductPageModel

?>
