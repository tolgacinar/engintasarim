<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->model('common_model', "common");
		$data = [
			"categories"	=>	$this->common->getCategories(4)
		];
		$this->layout->render_site("home", $data);
	}

}

/* End of file Main.php */
/* Location: .//D/xampp/htdocs/engintasarim/site/controllers/Main.php */