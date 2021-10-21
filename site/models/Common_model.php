<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	/**
		 * getCategories
		 *
		 * Bu fonksiyon ile kategorilerinizi listeleyebilirsiniz.
		 *
		 * @access	public
		 * @return	object	
		 */

	public function getCategories($limit = null) {
		$this->db->order_by("category_order", "asc");
		if ($limit) {
			$this->db->limit($limit);
		}
		$categories = $this->db->get_where("categories", ["category_parent" => 0, "category_status" => 1])->result();
		$return = [];
		foreach ($categories as $key => $value) {
			$value->category_parent = "Üst Kategori Yok";
			$return[] = $value;
		}
		
		return $return;
	}

}

/* End of file Common_model.php */
/* Location: .//D/xampp/htdocs/engintasarim/site/models/Common_model.php */