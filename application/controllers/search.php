<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Search Controller
*/
class Search extends CI_Controller {

	function __construct(){
		parent::__construct();


	} // end __construct

	/**
	 * Some Note
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('search');
		$this->load->view('footer');
	}
}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */