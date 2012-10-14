<?php
class Pregunta extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('form_pregunta');
		$this->load->view('footer');
	}

	public function nueva()
	{
		$this->load->view('header');
		$this->load->view('form_pregunta');
		$this->load->view('footer');
	}

	public function control()
	{
		
	}

	public function ver()
	{
		$this->load->view('header');
		$this->load->view('lista', $data);
		$this->load->view('footer');
	}
}