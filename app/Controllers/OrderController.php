<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\OrderModel;
use App\Models\OrderDetailsModel;  
use App\Models\ShoppingCartModel; 
use CodeIgniter\I18n\Time;

class OrderController extends BaseController {

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    public function __construct() {
          
        helper(['url', 'form', 'date']);
		  
		$this->session = \Config\Services::session();		
		$this->pagination = \Config\Services::pager();
		$cart = \Config\Services::cart();
		  
		$this->OrderModel = new OrderModel();  
		$this->OrderDetailsModel = new OrderDetailsModel();  
		$this->ShoppingCartModel = new ShoppingCartModel();		  
     
	 }// function __construct()
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    
	 /*
	  *index function for this controller
	  */
	 public function index(){
		
	 
	 
	 }//end function index()
	 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to load all the orders in the db (with pagination)
	 *called from the sidebar
	 */
    public function getAllOrders() {
                
    
         
    }//end  function getCustomers()


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  
    /*
	 *function to provide drill down information for a particular order.
	 *the drill down info is based on $orderNumber
	 */
	public function getDrillDownOrder($orderNumber) {
       
 
    
	}//end function getDrillDownCustomer() 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 

	/*
	 *function to allow the deletion of a order based on the $OrderNumber
	 */
    public function deleteOrder($OrderNumber) {
		
 
       
    }//end function deleteOrder()
    
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	/*
	 *function to perform an insertion of order into into the DB via the model
	 */
    public function createOrder() {
		
  
    }//end function insertOrder()
	
	


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *internal function to load a success/failure message after an update, deletion or insertion to the DB.
	 */    
    public function handleFlag($flag) {
		
 

    }//end function handleFlag()
	 
	 

}//end class CustomerController 

?>
