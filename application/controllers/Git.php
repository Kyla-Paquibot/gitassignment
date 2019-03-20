<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Git extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
}
