<?php
class Tags extends CI_Controller {

	public function index()
	{
		$db = mongo_connect();
		$tags = $db->tags->find();
	}
}