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

	public function create() {
		if ($this->input->is_ajax_request()) {
			if ($this->categories->createCategory()) {
				$this->layout->json(true, ['message' => $this->categories->message, 'category_title' => $this->categories->category_title, 'category_id' => $this->categories->category_id]);
			}else {
				$this->layout->json(false, ['message' => $this->categories->message]);
			}
		}else {
			$data = [
				"categories"	=>	$this->categories->getAllCategories()
			];
			$this->layout->render_admin("categories/create", $data);
		}
	}

	public function edit($category_id) {
		if ($this->input->is_ajax_request()) {
			if ($this->categories->editCategory($category_id)) {
				$this->layout->json(true, ['message' => $this->categories->message]);
			}else {
				$this->layout->json(false, ['message' => $this->categories->message]);
			}
		}else {
			$data = [
				"categories"	=>	$this->categories->getAllCategories($category_id),
				"cat"			=>	$this->categories->getCategory($category_id),
			];
			$this->layout->render_admin("categories/edit", $data);
		}
	}

}

/* End of file Categories.php */
/* Location: .//D/xampp/htdocs/engintasarim/admin/controllers/Categories.php */