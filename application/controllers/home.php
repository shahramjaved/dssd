<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
       {
            parent::__construct();
            $this->load->library('tank_auth');
            if (!$this->tank_auth->is_logged_in()) {									// Not logged in
				redirect('/auth/login/');
			}
       }
	  public function index()
	  {    
	  	$this->load->view('partials/main_header');
	    $this->load->view('dashboard.php');
	    $this->load->view('partials/main_footer');
	  }
}
