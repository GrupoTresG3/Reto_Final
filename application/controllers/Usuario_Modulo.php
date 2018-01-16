<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Modulo extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');		
		$this->load->model('Usuario_model');
		$this->load->model('Modulo_model');
		$this->load->model('Usuario_Modulo_model');		
	}

	//ok
	public function index()
	{
		$datos['segmento']=$this->uri->segment(3);
		if (!$datos['segmento']){
			$datos['usuarios_modulos'] = $this->Usuario_Modulo_model->obtener_usuarios_modulos_valores();
		}else{
			$datos['usuarios_modulos'] = $this->Usuarios_Modulos_model->obtener_usuarios_modulos($datos['segmento']);
		}
		$datos['usuarios'] = $this->Usuario_model->obtener_usuarios();
		$datos['modulos'] = $this->Modulo_model->obtener_modulos();

		$this->load->view('header');
		$this->load->view('usuario_modulo/listar_usuario_modulo',$datos);
		$this->load->view('usuario_modulo/nuevo_usuario_modulo',$datos);
		$this->load->view('footer');
	}

	//ok
	public function nuevo(){
		$datos['usuarios'] = $this->Usuario_model->obtener_usuarios();
		$datos['modulos'] = $this->Modulo_model->obtener_modulos();
		$this->load->view('header');
		$this->load->view('usuario_modulo/nuevo_usuario_modulo',$datos);
		$this->load->view('footer');
	}

	//ok
	public function nuevo_usuario_modulo(){
		$datos = array(
			'ID_Usuario' => $this->input->post('ID_Usuario'),
			'ID_Modulo' => $this->input->post('ID_Modulo'),
		);
		$this->Usuario_Modulo_model->nuevo_usuario_modulo($datos);
		redirect('Usuario_Modulo');		
	}

	//ok
	public function editar(){
		$datos['segmento']=$this->uri->segment(3);
		$datos['usuarios_modulos']=$this->Usuario_Modulo_model->obtener_usuario_modulo($datos['segmento']);
		$datos['usuarios'] = $this->Usuario_model->obtener_usuarios();
		$datos['modulos'] = $this->Modulo_model->obtener_modulos();
		$this->load->view('header');
		$this->load->view('usuario_modulo/editar_usuario_modulo',$datos);
		$this->load->view('footer');
	}

	//ok
	public function actualizar(){
		$datos = array(
			'ID_Usuario' => $this->input->post('ID_Usuario'),
			'ID_Modulo' => $this->input->post('ID_Modulo'),
		);
		$id = $this->uri->segment(3);
		$this->Usuario_Modulo_model->actualizar_usuario_modulo($id,$datos);
		redirect('Usuario_Modulo');
	}

	public function borrar(){
		$id = $this->uri->segment(3);
		$this->Usuario_Modulo_model->borrar_usuario_modulo($id);
		redirect('Usuario_Modulo');
	}	

	public function filtrar_usuario_modulo(){
		$datos = array(
			'ID_Usuario' => $this->input->post('ID_Usuario'),
			'ID_Modulo' => $this->input->post('ID_Modulo'),		);	
		//$filtro_centro = $this->input->post('ID_Centro');
		//$filtro_curso = $this->input->post('ID_Curso');	

		$datos['usuarios_modulos']=$this->Usuario_Modulo_model->filtrar_usuario_modulo_valores($datos);	
		$datos['usuarios'] = $this->Usuario_model->obtener_usuarios();
		$datos['modulos'] = $this->Modulo_model->obtener_modulos();

		$this->load->view('header');
		$this->load->view('usuario_modulo/listar_usuario_modulo',$datos);
		$this->load->view('usuario_modulo/nuevo_usuario_modulo',$datos);
		$this->load->view('footer');		
	}
}