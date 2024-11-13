<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CustomerModel; 
use App\Models\CustomerPageModel;

class CustomerController extends BaseController {

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    public function __construct() {

		//load relevant CI libraries and helpers and init the configuration options for pagination
		$this->pagination = \Config\Services::pager();
		  
		$this->encrypt = \Config\Services::encrypt();
		$this->session = \Config\Services::session();	
		  
		helper(['url']);
		  
		$this->CustomerModel = new CustomerModel();            
 
		$this->CustomerPageModel  = new CustomerPageModel();		
		  
	 }// function __construct()
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    
	 /*
	  *index function for this controller
	  */
	 public function index(){
		
		return view('lg');

		//   $this->getAllCustomers(0); //call internal function to display all customers
	 
	 }//end function index()
	 
	 
	 /*
	  *top level function to allow a customer to register with the site
	  */
	  public function register() {
		return view('customer/registerCustomer');


	  }
  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to load all the customers in the db (with pagination)
	 *called from the sidebar
	 */
    public function getAllCustomers() {
                
 
         
    }//end  function getCustomers()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
  
    /*
	 *function to provide drill down information for a particular customer.
	 *the drill down info is based on $customerNumber
	 */
	public function getDrillDownCustomer($customerNumber) {
	   
     
	}//end function getDrillDownCustomer() 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	
	/*
	 *function to search for customers based on their name
	 *called from the form allowing client to search by name
	 */
	public function getCustomerByName() {
		
 	
	}//end function getProductByName()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *function which handles the buttons at the button of the drilldown view
	 */
    public function handleCustomerActivity($customerNumber) {
		
        if (isset($_POST['insert']))
          echo view('customer/insertCustomer'); //call view to handle an insert
        else if (isset($_POST['update']))
            $this->updateCustomer($customerNumber); //call function within this controller to handle an update		
        else if (isset($_POST['delete']))
            $this->deleteCustomer($customerNumber); //call function within this controller to handle a deletion
        
    }//end function handleCustomerActivity()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *function to allow the deletion of a customer based on the $customerNumber
	 */
    public function deleteCustomer($customerNumber) {
		       
    }//end function deleteCustomer()
    
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *function to perform an insertion of customer into into the DB via the model
	 */
    public function insertCustomer() {
       
 

    }//end function insertCustomer()
	
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	/*
	 *function to allow a customer to register their details
	 */
	public function registerCustomer()
    {
        helper(['form', 'url']);

        // Load the CustomerModel
        $customerModel = new CustomerModel();
		$customerName=$this->request->getPost('contactFirstName').' '.$this->request->getPost('contactLastName');
        // Get form input
        $data = [
            'contactLastName' => $this->request->getPost('contactLastName'),
			'customerName'=>$customerName,
            'contactFirstName' => $this->request->getPost('contactFirstName'),
            'phone' => $this->request->getPost('phone'),
            'addressLine1' => $this->request->getPost('addressLine1'),
            'addressLine2' => $this->request->getPost('addressLine2'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'postalCode' => $this->request->getPost('postalCode'),
            'country' => $this->request->getPost('country'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        // Insert customer using model's insertCustomer method
         $isInserted = $customerModel->insertCustomer($data);

        // Prepare message and render msgpage
        if ($isInserted) {
			$message = "{$customerName}, you have successfully logged in.";
			$this->session->set('customerName', $customerName);

			return redirect()->to(base_url('/mini_things'));

		} else {
			// Set error message in flash data
			$this->session->setFlashdata('error', "You have entered an invalid email/password combination. Please try again.");
			
			// Redirect back to login page
			return redirect()->back();
		}
    }
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	/*
	 *function to perform an update of customer into into the DB via the model
	 *the update is based on $customerNumber
	 */
    public function updateCustomer($customerNumber) {
		

    }//end function updateCustomer()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *internal function to load a success/failure message after an update, deletion or insertion to the DB.
	 */    
    public function handleFlag($flag) {
		
		//if $flag is true display success message else display failure message
		if ($flag)
          	$data['msg'] = "The changes you have made have been saved to the database";
        else
            $data['msg'] = "The changes you have made have NOT been saved to the database. Please try again";
        
		//load the view which will display the appropriate message
		echo view('msgpage', $data);

    }//end function handleFlag()


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

	/*
	 *function to validate a user attempting to login
	 */   
	public function validateUser() {
		 	 	 
			// Get the form input
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			
			// Load the CustomerModel
			$customerModel = new CustomerModel();
			
			// Authenticate the user
			$authResult = $customerModel->authenticate($email, $password);
			
			// Handle authentication result
			if ($authResult && isset($authResult->customerName)) {
				$message = "{$authResult->customerName}, you have successfully logged in.";
				$this->session->set('customerName', $authResult->customerName);

				return redirect()->to(base_url('/mini_things'));

			} else {
				// Set error message in flash data
				$this->session->setFlashdata('error', "You have entered an invalid email/password combination. Please try again.");
				
				// Redirect back to login page
				return redirect()->back();
			}
	 
}//end class CustomerController 
}
?>