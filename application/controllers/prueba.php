<?php
class Prueba extends CI_Controller {
	
	public function index()
	{
		echo "hola";
	}
	
	public function inserta()
	{
		$m = new Mongo();
		$db = $m->dare;
		$collection = $db->prueba;
		$collection->insert(array('f'=>'b', 'y' => 0));
		
		//$this->mongodb->insert('prueba', );
	}

	public function encuentra()
	{
		$m = new Mongo();
		$db = $m->dare;
		
		//$collection = $db->prueba;
		//$cursor = $collection->find();
		//foreach ($cursor as $obj) {
		foreach ($db->prueba->find() as $obj) {
    		print_r($obj);
		}
	}
}
?>