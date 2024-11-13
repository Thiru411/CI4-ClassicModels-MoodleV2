<?php

namespace App\Models;

use CodeIgniter\Model;

class mini_thingsModel extends Model {
 

	function __construct()
    {
		$this->db = \Config\Database::connect();  //Connect to the database on class creation
	}
  
	    public function index()
		{
            $data['base'] =  base_url(); //$this->config->item('base_url');
            $data['css'] = base_url()."public/assets/css/"; 
			
			//Call Stored Procedure to get Product 
			$query = $this->db->query("CALL getAllProducts()");

			//If no details found
			if ($query->getNumRows() < 1 ) {
				$display_block = "<p><em>Sorry, no products exist.</em></p>";
			} else {		
				return $query->getResultArray();
			}   
		}
	
	public function fillIntelligentSearch() {
	
		$this->db->select('productName');
		$query = $this->db->get('products');
		return $query->result_array();
	}
	
	


         
}


?>
