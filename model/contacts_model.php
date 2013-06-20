<?php
class Contacts_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function set_contacts(){
		$data = array(
			'Name'=>$this->input->post('name'),
			'Email'=>$this->input->post('email'),
			'Project'=>$this->input->post('project')
			);

		return $this->db->insert('contacts',$data);
	}

	public function get_contacts(){
		$query=$this->db->get('contacts');
		return $query->result_array();
	}

}
?>
