<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\AuthenticationModel; 

class AuthenticationController extends BaseController {

    public function __construct() {
   
	$this->session = \Config\Services::session();
 
     }
    
    public function index() {
        echo view('index.html');
    }

    public function login() {
		
        echo view('loginForm');
    }
	
	public function processLogin() {
 
	}
	

    public function insert() {

     }

    public function update() {
 
    }

    public function getProducts() {
        $data['AllProducts'] = $this->ProductModel->getProducts();
        echo view('product/ViewAllProducts', $data);
    }

     
    public function getCustomer($customerNumber) {
       
 
    }

    public function deleteCustomer($customerNumber) {
        
    }
}

?>
