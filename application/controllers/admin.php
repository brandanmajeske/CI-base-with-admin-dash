<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
*   Admin Controller
*/
class Admin extends CI_Controller {

	/**
	 * Admin Controller Index blah blah
	 */
	
	public function index($error = null){
		$user_data  = $this->session->all_userdata();
		$username = $user_data['username'];
		$this->load->model('profile_model');

		if($this->session->userdata('logged_in')){
			$this->load->view('header');
			$profile = $this->profile_model->getUser($username);
			$this->load->view('admindash', array('user_data' => $user_data, 'profile' => $profile));
			$this->load->view('footer');
		} else {
			redirect('login');
		}		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */