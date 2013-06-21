
<?php 

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper('url');
   $this->load->library('form_validation');
   $this->load->helper('form');
   $this->load->model('contacts_model');
 }

 function index()
 {
  if($this->nativesession->get('logged_in')){
    $data['contacts']=$this->contacts_model->get_contacts();
    $data['title']='Brad';
    $this->load->view('templates/header',$data);
    $this->load->view('brad/hub',$data);
    $this->load->view('templates/footer');
  }
  else{
    $data['title']='Login';
    $this->load->view('templates/header',$data);
    $this->load->view('brad/index',$data);
    $this->load->view('templates/footer');
  }
 }

 function verifyLogin(){
  //This method will have the credentials validation
  $this->form_validation->set_rules('username','Username','required');
  $this->form_validation->set_rules('password','Password','required');

  if($this->form_validation->run() === FALSE){
    $this->index();
  }
  else{
    $sess_array=array(
      'username'=>'brad'
      );
    $this->nativesession->set('logged_in',$sess_array);
    redirect('brad', 'refresh');
  }
 }

 function logout(){
  $this->nativesession->delete('logged_in');
  redirect('home','refresh');
 } 
}
?>

    