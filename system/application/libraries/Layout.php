<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout {
	protected $ci;
	protected $data = [];

	public function __construct() {
        $this->ci =& get_instance();
	}

	public function render_admin($view, $data = []) {
		$this->data = array_merge($this->data, $data);
		$template_data = [
			"header"	=>	$this->ci->twig->render("includes/header", $this->data),
			"content"	=>	$this->ci->twig->render("" . $view, $this->data),
			"footer"	=>	$this->ci->twig->render("includes/footer", $this->data)
		];

		$this->ci->twig->display("template", $template_data);
	}

	public function render_site() {

	}

}

/* End of file Layout.php */
/* Location: ./application/libraries/Layout.php */
