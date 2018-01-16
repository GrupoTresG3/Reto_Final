<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TEvaluador extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');		
		$this->load->model('TEvaluador_model');

	}

	public function index()
	{
		$datos['segmento']=$this->uri->segment(3);
		if (!$datos['segmento']){
			$datos['tevaluadores'] = $this->TEvaluador_model->obtener_tevaluadores();
		}else{
			$datos['tevaluadores'] = $this->TEvaluador_model->obtener_tevaluadores($datos['segmento']);
		}
		
		$this->load->view('header');
		$this->load->view('tevaluador/listar_tevaluador',$datos);
		$this->load->view('tevaluador/nuevo_tevaluador');
		$this->load->view('footer');
	}

	public function nuevo(){
		$this->load->view('header');
		$this->load->view('tevaluador/nuevo_tevaluador');
		$this->load->view('footer');
	}

	public function nuevo_tevaluador(){
		$datos = array(
			'DESC_TEvaluador' => $this->input->post('DESC_TEvaluador')
		);
		$this->TEvaluador_model->nuevo_tevaluador($datos);
		redirect('TEvaluador');		
	}

	public function editar(){
		$datos['segmento']=$this->uri->segment(3);
		$datos['tevaluadores']=$this->TEvaluador_model->obtener_tevaluador($datos['segmento']);
		$this->load->view('header');
		$this->load->view('tevaluador/editar_tevaluador',$datos);
		$this->load->view('footer');
	}

	public function actualizar(){
		$datos = array(
			'DESC_TEvaluador' => $this->input->post('DESC_TEvaluador')
		);
		$id = $this->uri->segment(3);
		$this->TEvaluador_model->actualizar_tevaluador($id,$datos);
		redirect('TEvaluador');
	}

	public function borrar(){
		$id = $this->uri->segment(3);
		$this->TEvaluador_model->borrar_tevaluador($id);
		redirect('TEvaluador');
	}	
}