<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mongo_connect'))
{
	public function mongo_connect()
	{
		// by default mongo connects to localhost:27017
		$m = new Mongo();
		$db = $m->dare; //selecting dare db
		return $db;
	}
}