<?php 

class Details extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('details');
	}

}

/* End of file  */
/* Location: ./application/controllers/ */