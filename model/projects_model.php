<?php
class Projects_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	public function get_projects(){
			$query=$this->db->get('projects');
			return $query->result_array();
	}
}
?>
