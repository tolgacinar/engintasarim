<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categories_model', 'categories');
	}

	public function index() {
		$data = [
			"categories"	=>	$this->categories->getAllCategories()
		];

		$this->layout->render_admin("categories/list", $data);
	}

}

/* End of file Categories.php */
/* Location: .//D/xampp/htdocs/engintasarim/admin/controllers/Categories.php */