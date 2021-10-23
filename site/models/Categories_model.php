<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	public $category = [];

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

	/**
	* getCategoryBySef
	*
	* Bu fonksiyon sef url ile kategorilerinizi bulmaya yarar.
	*
	* @access	public
	* @param 	string 	category_sef
	* @return	object	
	*/

	public function getCategoryBySef($category_sef) {
		$category = $this->db->get_where("categories", ["category_sef" => $category_sef, "category_status" => 1])->row();

		return $category;
	}

	/**
	* subCategories
	*
	* Bu fonksiyon bir kategorinin alt kategorilerini bulabilirsiniz.
	*
	* @access	public
	* @param 	int 	category_id
	* @return	object	
	*/

	public function subCategories($category_id) {
		$categories = $this->db->get_where("categories", ["category_parent" => $category_id, "category_status" => 1])->result();

		return $categories;
	}


}

/* End of file Categories_model.php */
/* Location: .//D/xampp/htdocs/engintasarim/site/models/Categories_model.php */