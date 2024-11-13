<?php
namespace App\Models;
use CodeIgniter\Model;
class OrderDetailsModel extends Model { 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    public function __construct() {
  
        $this->db = \Config\Database::connect();  //Connect to the database on class creation
		
    }// end function __construct()
    
  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to retrieve all the orders details based on $offset
	 */   
	 
	 
    public function getOrderDetails($id, $offset) {

 

    }//end function getOrderDetails()
	
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function insertOrderDetails($orderNumber, $orderDetails) {

  

    }//end function insertOrder()

	
}//end class OrderDetailsModel




?>
