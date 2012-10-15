<?php
class Pregunta extends CI_Controller {

	public function index()
	{
		/*$this->load->view('header');
		$this->load->view('form_pregunta');
		$this->load->view('footer');*/
		$this->lista();
	}

	public function nueva()
	{
		$header['titulo'] = 'Preguntas';
		$this->load->view('header', $header);
		$this->load->view('form_pregunta');
		$this->load->view('footer');
	}

	public function control()
	{
		$db = mongo_connect();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'Titulo', 'required');
		$this->form_validation->set_rules('tags', 'Tags', 'required');
		$this->form_validation->set_rules('pregunta', 'pregunta', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			redirect('pregunta/nueva/error');
		}
		else 
		{
			$i = 0;
			$tags = array_map('trim', explode(',',$_POST['tags']));
			//$tags = array_map('mb_strtolower', $tags, 'UTF-8');
			//$tags = array_map('strtolower', $tags);
			foreach ($tags as $tag)
			{
				$tag = mb_strtolower($tag,'UTF-8');
				$tags[$i] = htmlspecialchars($tag, ENT_QUOTES);
				$i++;
			}
		//	$tags = array_map('htmlspecialchars' , $tags);
			$q = $db->pregunta->save(array('titulo' => htmlspecialchars($_POST['titulo'], ENT_QUOTES), 'pregunta' => htmlspecialchars($_POST['pregunta'], ENT_QUOTES), 'tags' => $tags));
			foreach ($db->pregunta->find()->sort(array('_id'=> -1))->limit(1) as $obj) {
	    		$id = $obj['_id'];
			}
			foreach ($tags as $tag)
			{
				$db_tag = $db->tags->findOne(array('tag' => $tag));
				if (is_null($db_tag))
				{
					$db->tags->insert(array('tag' => $tag, 'count' => 1));
				}
				else
				{
					$db->tags->update(array('tag' => $tag), array('$set' => array('count' => ($db_tag['count'] + 1))));
				}
			}

			redirect("/pregunta/ver/".$id);
		}
		exit;
	}

	// Para ver una pregunta en concreto
	public function ver()
	{
		$header['titulo'] = 'Preguntas';
		$uri = explode('/', uri_string());
		$db = mongo_connect();
		$question = $db->pregunta->findOne(array('_id' => new MongoId($uri[2])));
		$this->load->view('header',$header);
		$this->load->view('unica', $question);
		$this->load->view('footer');
	}

	public function lista()
	{
		$header['titulo'] = 'Preguntas';
		$db = mongo_connect();
		$data['preguntas'] = $db->pregunta->find();
		$this->load->view('header',$header);
		$this->load->view('lista', $data);
		$this->load->view('footer');
	}
}