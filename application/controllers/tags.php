<?php
class Tags extends CI_Controller {

	public function index()
	{
		$header['titulo'] = 'Tags';
		$db = mongo_connect();
		$tags = $db->tags->find();
		$data['tags'] = $tags;
		$this->load->view('header',$header);
		$this->load->view('cloud', $data);
		$this->load->view('footer');
	}

	public function tag()
	{
		$header['titulo'] = 'Tags';
		$uri = explode('/', uri_string());
		$db = mongo_connect();
		$questions = $db->pregunta->find(array('tags' => array('$in' => array(urldecode($uri[2])))));
		$data['questions'] = $questions;
		$this->load->view('header', $header);
		$this->load->view('tag', $data);
		$this->load->view('footer');
	}
}