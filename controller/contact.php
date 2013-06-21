<?php
class Contact extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('contacts_model');
		$this->load->helper('form');
		$this->load->helper('date');
	}

	public function index(){
		$data['title']='Contact';

		$this->load->view('templates/header',$data);
		$this->load->view('contact/index',$data);
		$this->load->view('templates/footer');
	}

	public function create(){
		$this->form_validation->set_rules('name','Name','required');

		$data['title']='Success';
		
		if($this->form_validation->run() === FALSE){
			$this->index();
		}
		else{
			if($_FILES['image']['size']>0){
				$fname = explode('.',$_FILES['image']['name']);
				$image = now().".$fname[1]";

				$config = array(
					'upload_path'=>'./public/images/tmp/',
					'allowed_types'=>'gif|jpg|png',
					'file_name'=>$image
				);
				$this->load->library('upload',$config);
				if(! $this->upload->do_upload('image')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('contact/failure',$error);
				}

			}
			else{
				$image='';
			}
			$this->contacts_model->set_contacts($image);
			$this->load->view('templates/header',$data);
			$this->load->view('contact/success',$data);
			$this->load->view('templates/footer');
		}
	}
}
?>