<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Another_page extends MY_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// }

	public function index()
	{
		$this->data['title'] = "Another Page"; 
		$this->data['name'] = "Another Page";
		$this->page = "another_page";
		$this->layout();
	}
}
