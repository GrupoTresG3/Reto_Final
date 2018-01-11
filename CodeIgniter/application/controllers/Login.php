<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');   
    $this->load->model('Login_model');
  }

  //ok
  public function index()
  { 
    $this->load->view('header');
    $this->load->view('login/loginview');
    $this->load->view('footer');
  }

    public function obtener_tipo_usuario(){
    $datos = array(
      'user' => $this->input->post('user'),
      'password' => $this->input->post('password')               
    );
    $this->Login_model->obtener_tipo_usuario($datos);
    redirect('');   
  }

  
}