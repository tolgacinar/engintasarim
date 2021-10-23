<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('categories_model', 'categories');
	}

	public function index() {
		$data = [
			"categories"	=>	$this->categories->getCategories(4)
		];
		$this->layout->render_site("categories", $data);
	}

	public function detail($sef) {
		$category = $this->categories->getCategoryBySef($sef);
		if (!empty($category)) {
			$data = [
				"category"		=>	$category,
				"subcategories"	=>	$this->categories->subCategories($category->category_id),
			];
			$this->layout->render_site("category_detail", $data);
		}else {
			show_404();
		}
	}

}

/* End of file Categories.php */
/* Location: .//D/xampp/htdocs/engintasarim/site/controllers/Categories.php */