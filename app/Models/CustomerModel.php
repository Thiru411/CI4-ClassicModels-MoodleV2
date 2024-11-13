<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model { 
    protected $table = 'customers';
    protected $allowedFields = ['companyName','customerName', 'contactLastName', 'contactFirstName', 'phone', 'addressLine1', 'addressLine2', 'city', 'state', 'postalCode', 'country', 'email', 'password'];

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    public function __construct() {
     
        $this->db = \Config\Database::connect();  //Connect to the database on class creation
		
    }// end function __construct()
    
  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to retrieve all the customers based on $offset
	 */   
    public function getCustomers($offset) {
		
 
    }//end function getCustomers()
	
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to retrieve all the customers based on $id
	 *this function is called as part of the drill down
	 */
    public function getCustomer($id) {
 	  
 
		
    }//end function getCustomer()

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to retrieve a customers info based on $customerName
	 *this function is called when the user searches for a customer name
	 */
	public function getCustomerByName($customerName) {
      	
 

    }//end function getCustomerByName(


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to delete a customer record info based on $id
	 */
    public function deleteCustomer($id) {

 
		
    }//end function deleteCustomer()


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
	/*
	 *function to update a complete customer record
	 *all updated info contained in $customer 
	 */
      public function updateCustomer($customer) {
		  
        

    }//end function updateCustomer()
     
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
	 
    /*
	 *function to insert a complete customer record
	 *all info is contained in $customer 
	 */ 
    public function insertCustomer($data)
    {
        // Check if customer already exists
        if ($this->authenticate($data['email'], $data['password'])) {
            return false; // Customer exists, do not insert
        }

        // Call the stored procedure to insert a new customer
        $sql = "CALL customer_add(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $query = $this->db->query($sql, [
            $data['customerName'],
            $data['contactLastName'],
            $data['contactFirstName'],
            $data['phone'],
            $data['addressLine1'],
            $data['addressLine2'],
            $data['city'],
            $data['state'],
            $data['postalCode'],
            $data['country'],
            $data['email'],
            $data['password']  // Ensure this is hashed if it's a plain password
        ]);

        // Return true if insertion was successful
        return $query ? true : false;
    }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    /*
	 *function to authenticate a customer login
	 */ 
	public function authenticate($email, $password)
    {
        // Call the stored procedure authenticateCustomer
         $db = \Config\Database::connect();
		 
		 $query = $this->db->query("CALL authenticateCustomer(?, ?)", [$email, $password]);

        // Assuming the procedure returns a row if successful
        $result = $query->getRow();
    if (!empty($result)) {
        return (object) [
            'isAuthenticated' => true,
            'customerName' => $result->customerName
        ];
    }
    return false;
    }

    public function getCustomerName($email)
    {
        $customer = $this->where('email', $email)->first();
        return $customer ? $customer['name'] : '';
    }

	 
	 /*
	 *function to return the total number of records in the customers table
	 */ 
	public function getTotalRows() {
		
 
	}

}//end class CustomerModel




?>