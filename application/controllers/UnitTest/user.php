<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
  
  function __construct()
  {
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('security');
    $this->load->library('tank_auth');
    $this->lang->load('tank_auth');
    $this->form_validation->set_error_delimiters('', '');
    $this->load->library('unit_test');
  }
  
  function run(){
    
    
    
  }
  
  
}
