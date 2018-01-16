<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		if(!$this->session->userdata('username')){
			redirect('welcome');
		}

		if(isset($_POST['password'])){
			$this->load->model('usuario_model');
			if($this->usuario_model->logins($_POST['username'], md5($_POST['password']))){
				$this->session->set_userdata('username', $_POST['username']);
				redirect('welcome');
			}
			else{
				redirect('login#bad-password');
			}
		}
		$this->load->view('login');
	}
}
?>