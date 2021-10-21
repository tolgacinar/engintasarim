<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	/**
	 * getAllCategories
	 *
	 * Bu fonksiyon ile bütün kategorileri ekrana bastırabiliriz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function getAllCategories() {
		$categories = $this->db->get_where("categories")->result();

		foreach ($categories as $key => $value) {
			$categories[$key]->category_status = $this->checkStatus($value->category_status);
		}

		return $categories;
	}

	/**
	 * checkStatus
	 *
	 * Bu fonksiyon ile kategori durumunu HTML olarak renderlyabiliriz
	 *
	 * @access	public
	 * @param	int		status
	 * @return	html	
	 */

	private function checkStatus($status) {
		return $status == '1' ? '<div class="badge success flex"><span class="block">Aktif</span></div>' : '<div class="badge error flex"><span class="block">Pasif</span></div>';
	}

}

/* End of file Categories_model.php */
/* Location: .//D/xampp/htdocs/engintasarim/admin/models/Categories_model.php */