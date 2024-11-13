<?php
namespace App\Models;
use CodeIgniter\Model;
class ProductModel extends Model { 

		protected $table = 'product';
		
////////////////////////////////////////////////////////////////////////////////////////////////
	
	 /*
	  *constructor function for this controller
	  */
    public function __construct() {
  
		$this->db = \Config\Database::connect();  //Connect to the database on class creation
		
    }//end constructor	
	
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	/*
	 *function to allow the retrival of all products
	 */		
	public function getAllProducts() {
		
 	
	}
	
////////////////////////////////////////////////////////////////////////////////////////////////	

	 /*
	  *function to retrive an array of products based on an offset (used for pagination)
	  */
	  public function getProducts($offset) { 

      
	  }//end function getProductsForAdmin()

 
////////////////////////////////////////////////////////////////////////////////////////////////		

	 /*
	  *function to retrive a product based on its productCode
	  */  
      public function getProduct($productCode) {
		
 
     
	 }//end function getProduct()
	
	
////////////////////////////////////////////////////////////////////////////////////////////////	

	 /*
	  *function to retrive a product based on its productName
	  */ 
      public function getProductByName($productName) {
      	
 
    
	}//end function getProductByName()
	

////////////////////////////////////////////////////////////////////////////////////////////////	


	 /*
	  *function to delete a product based on its productCode
	  *only available to ADMIN STAFF.
	  */
    public function deleteProduct($pCode) {

 

	}//end function deleteProduct()
	

////////////////////////////////////////////////////////////////////////////////////////////////	

	 /*
	  *function to update a products details
	  *this function accepts a array of product details
	  *only available to ADMIN STAFF.
	  */
	public function updateProduct($product) {

 
    }//end function updateProduct()


////////////////////////////////////////////////////////////////////////////////////////////////	

	 /*
	  *function to insert a products details to the db
	  *this function accepts a array of product details
	  *only available to ADMIN STAFF.
	  */
    public function insertProduct($product) {

 

    }//end function insertProduct()

////////////////////////////////////////////////////////////////////////////////////////////////	


	 /*
	  *function to count the number of records in the products table
	  */
	public function record_count() {
		
 
    }

}//end class ProductModel

?>