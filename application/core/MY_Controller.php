<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();
	public function __construct()
	{
		parent::__construct();
	}

	public function layout()
	{
		$this->template['header'] = $this->load->view('layout/header', $this->data, TRUE);
		$this->template['footer'] = $this->load->view('layout/footer', $this->data, TRUE);
		$this->template['page'] = $this->load->view($this->page, $this->data, TRUE);
		$this->load->view('layout/main', $this->template);
	}
}
