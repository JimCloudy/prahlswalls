<?php
class Contacts_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function set_contacts($image){
		$data = array(
			'Name'=>$this->input->post('name'),
			'Email'=>$this->input->post('email'),
			'Project'=>$this->input->post('project'),
			'Image'=>$image
			);

		return $this->db->insert('contacts',$data);
	}

	public function get_contacts($id = FALSE){

		if($id === FALSE){
			$query=$this->db->get('contacts');
			return $query->result_array();	
		}

		$query = $this->db->get_where('contacts',array('CID'=>$id));
		return $query->row_array();
	}

}
?>
