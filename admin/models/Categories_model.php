<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

	protected $subcategories;
	protected $parent_categories;
	public $categories;

	/**
	 * getAllCategories
	 *
	 * Bu fonksiyon ile bütün kategorileri ekrana bastırabiliriz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function getCategory($category_id) {
		return $this->db->get_where("categories", ['category_id' => $category_id])->row();
	}

	/**
	 * getAllCategories
	 *
	 * Bu fonksiyon ile bütün kategorileri ekrana bastırabiliriz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function getAllCategories($not = NULL) {
		if ($not) {
			$this->db->where("category_id !=", $not);
		}
		$this->db->order_by("category_order", "asc");
		$categories = $this->db->get_where("categories")->result();
		foreach ($categories as $key => $value) {
			$categories[$key]->category_status = $this->checkStatus($value->category_status);
			$categories[$key]->category_parent = $value->category_parent == 0 ? "Üst Kategori Yok" : $this->getCategory($value->category_parent)->category_title;
		}
		$this->drawCategory($this->orderCategories($categories));

		return $this->categories;
	}

	/**
	 * orderCategories
	 *
	 * Bu fonksiyon ile bütün kategorileri hiyerarşik sıraya sokabilirsiniz.
	 *
	 * @access	public
	 * @param	array	category_list
	 * @param 	int 	parent_id
	 * @return	object	
	 */

	public function orderCategories($categories, $parent_id = 0) {
		$ordered = [];
		foreach ($categories as $category) {
			if ($category->category_parent == $parent_id) {
				$children = $this->orderCategories($categories, $category->category_id);
				if ($children) {
					$category->children = $children;
				}else {
					$category->children = [];
				}

				$ordered[] = $category;
			}
		}	

		return $ordered;
	}

	/**
	 * drawCategories
	 *
	 * Bu fonksiyon ile sıralanmış kategorileri array haline getirebilirsiniz.
	 *
	 * @access	public
	 * @param	array	category_list
	 * @param 	int 	parent_id
	 * @return	object	
	 */

	public function drawCategory($categories) {
		foreach ($categories as $key => $value) {
			$this->categories[] = $value;
			if (!empty($value->children)) {
				$this->drawCategory($value->children);
			}
		}
	}

	/**
	 * getSubCategories
	 *
	 * Bu fonksiyon ile bütün kategoriye ait alt kategorileri listeleyebilirsiniz.
	 *
	 * @access	public
	 * @param	int		category_id
	 * @return	object	
	 */

	public function getSubCategories($category_id) {
		$this->db->order_by("category_order", "asc");
		return $this->db->get_where("categories", ["category_parent" => $category_id])->result();
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

	/**
	 * createCategory
	 *
	 * Bu fonksiyon ile yeni bir kategori oluşturabilirsiniz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function createCategory() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category_title', 'Kategori Başlığı', 'trim|required');
		$this->form_validation->set_rules('category_description', 'Kategori Başlığı', 'trim|required');
		if ($_FILES['category_image']['error'] > 0) {
			$this->form_validation->set_rules('category_image', 'Kategori Görseli', 'trim|required');
		}
		if ($this->form_validation->run() == FALSE) {
			$this->message = validation_errors();
			return false;
		} else {
			$config['upload_path']          = './uploads/';
			$config['encrypt_name']			= TRUE;
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048;
			$config['max_width']            = 800;
			$config['max_height']           = 800;
			$insertData = [
				"category_parent"		=>	$this->input->post("category_parent") ? (int) $this->input->post("category_parent", TRUE) : 0,
				"category_title"		=>	$this->input->post("category_title", TRUE),
				"category_description"	=>	$this->input->post("category_description", TRUE),
				"category_order"		=>	(int) $this->input->post("category_order", TRUE),
				"category_status"		=>	(int) $this->input->post("category_status", TRUE),
			];

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('category_image')) {
				$this->message = $this->upload->display_errors();
				return false;
			}else {
				$insertData['category_image'] = $this->upload->data("file_name");
			}
			$this->db->trans_begin();
			$this->db->insert("categories", $insertData);
			$id = $this->db->insert_id();
			$this->db->update("categories", ['category_sef' => permalink($this->input->post("category_title", TRUE) . "-" . $id)], ['category_id' => $id]);
			if ($this->db->trans_status() === FALSE) {
				$this->message = "Veritabanı hatası";
				$this->db->trans_rollback();
			} else {
				$this->message = "Başarılı";
				$this->category_id = $id;
				$this->category_title = $this->input->post("category_title", TRUE);
				$this->db->trans_commit();
				return true;
			}
		}
	}

	/**
	 * createCategory
	 *
	 * Bu fonksiyon ile yeni bir kategori oluşturabilirsiniz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function editCategory($category_id) {
		$category = $this->getCategory($category_id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category_title', 'Kategori Başlığı', 'trim|required');
		$this->form_validation->set_rules('category_description', 'Kategori Başlığı', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->message = validation_errors();
			return false;
		} else {
			$updateData = [
				"category_parent"		=>	$this->input->post("category_parent") ? (int) $this->input->post("category_parent", TRUE) : 0,
				"category_title"		=>	$this->input->post("category_title", TRUE),
				"category_description"	=>	$this->input->post("category_description", TRUE),
				"category_order"		=>	(int) $this->input->post("category_order", TRUE),
				"category_status"		=>	(int) $this->input->post("category_status", TRUE),
			];

			if ($category->category_title != $this->input->post("category_title", TRUE)) {
				$updateData['category_sef'] = permalink($this->input->post("category_title", TRUE)) . "-" . $category_id;
			}

			if ($_FILES['category_image']['error'] == 0) {
				$config['upload_path']          = './uploads/';
				$config['encrypt_name']			= TRUE;
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 2048;
				$config['max_width']            = 800;
				$config['max_height']           = 800;

				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('category_image')) {
					$this->message = $this->upload->display_errors();
					return false;
				}else {
					@unlink(FCPATH . "uploads/" . $category->category_image);
					$updateData['category_image'] = $this->upload->data("file_name");
				}
			}


			
			$this->db->trans_begin();
			$this->db->update("categories", $updateData, ['category_id' => $category_id]);
			if ($this->db->trans_status() === FALSE) {
				$this->message = "Veritabanı hatası";
				$this->db->trans_rollback();
			} else {
				$this->message = "Başarılı";
				$this->db->trans_commit();
				return true;
			}
		}
	}

	/**
	 * deleteCategory
	 *
	 * Bu fonksiyon ile mevcut bir kategoriyi silebilirsiniz.
	 *
	 * @access	public
	 * @return	object	
	 */

	public function deleteCategory($category_id) {
		$subs = $this->db->get_where("categories", ['category_parent' => $category_id])->result();
		$subs[] = $this->getCategory($category_id);
		foreach ($subs as $key => $value) {
			@unlink(FCPATH . "uploads/" . $value->category_image);
		}
		$this->db->trans_begin();
		$this->db->delete("categories", ['category_id' => $category_id]);
		$this->db->delete("categories", ['category_parent' => $category_id]);
		if ($this->db->trans_status() === FALSE) {
			$this->message = "Veritabanı hatası";
			$this->db->trans_rollback();
		} else {
			$this->message = "Başarılı";
			$this->db->trans_commit();
			return true;
		}
	}

}

/* End of file Categories_model.php */
/* Location: .//D/xampp/htdocs/engintasarim/admin/models/Categories_model.php */