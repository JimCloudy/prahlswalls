<?php
class Projects extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('projects_model');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['projects']=$this->projects_model->get_projects();
		$data['title']='Projects';

		$this->load->view('templates/header',$data);
		$this->load->view('projects/index',$data);
		$this->load->view('templates/footer');
	}
}
?>
