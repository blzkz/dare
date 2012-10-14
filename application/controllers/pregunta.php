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
		$db = mongo_connect();
		$q = $db->pregunta->save(array('titulo' => $_POST['titulo'], 'pregunta' => $_POST['pregunta']));
		foreach ($db->pregunta->find()->sort(array('_id'=> -1))->limit(1) as $obj) {
    		$id = $obj[_id];
		}
		redirect("/pregunta/ver/".$id);
		exit;
	}

	// Para ver una pregunta en concreto
	public function ver()
	{

	}

	public function lista()
	{
		$this->load->view('header');
		$this->load->view('lista', $data);
		$this->load->view('footer');
	}
}