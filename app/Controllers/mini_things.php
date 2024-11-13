<?php
namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\mini_thingsModel; 

use CodeIgniter\Config\BaseConfig;

class mini_things extends BaseController {
	
    public function index()
	{
			$mini_thingsModel = new mini_thingsModel();  
		
            $data['base'] = config('baseURL');
            $data['css'] = config('css');
            $data['index'] = config('index_page');
            $data['img'] = config('img');
			
			$images = $mini_thingsModel->index();
			shuffle($images);

			$data['productCode1'] = $images[0]['productCode'];
			$data['displayName1'] = $images[0]['productName'];
			$data['displayVendor1'] = $images[0]['productVendor'];
			$data['displayImage1'] = $images[0]['image'];
			$data['displayPrice1'] = number_format($images[0]['MSRP'], 2);
			
			$data['productCode2'] = $images[1]['productCode'];
			$data['displayName2'] = $images[1]['productName'];
			$data['displayVendor2'] = $images[1]['productVendor'];
			$data['displayImage2'] = $images[1]['image'];
			$data['displayPrice2'] = number_format($images[1]['MSRP'], 2);
			
			$data['productCode3'] = $images[2]['productCode'];
			$data['displayName3'] = $images[2]['productName'];
			$data['displayVendor3'] = $images[2]['productVendor'];
			$data['displayImage3'] = $images[2]['image'];
			$data['displayPrice3'] = number_format($images[2]['MSRP'], 2);
			
			$data['productCode4'] = $images[3]['productCode'];
			$data['displayName4'] = $images[3]['productName'];
			$data['displayVendor4'] = $images[3]['productVendor'];
			$data['displayImage4'] = $images[3]['image'];
			$data['displayPrice4'] = number_format($images[3]['MSRP'], 2);
       						
			echo view('index', $data);    
	}
	
		
	public function fillIntelligentSearch() {
		
		$productNames = $this->mini_thingsModel->fillIntelligentSearch();
		
		//echo 'var array = '.json_encode($productNames).';';
		return json_encode($productNames);
	}
}


?>
