<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function dashboard() {
		$this->layout->render_admin("dashboard", []);
	}

	public function index() {
		redirect(base_url("admin/dashboard"));
	}

}

/* End of file Admin.php */
/* Location: .//D/xampp/htdocs/engintasarim/admin/controllers/Admin.php */