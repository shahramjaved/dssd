<?php

class TestAuth extends CI_Controller
{    
    function __construct()
    {          
      parent::__construct();
      
      $this->load->library('unit_test');
      $this->load->library('form_validation');
      $this->load->library('security');
      $this->load->library('tank_auth');
      $this->lang->load('tank_auth');		
    }
    
    public function index(){
      $this->login();
      $this->checkDataSetInSession();
      
      
      
      
      
      $this->logout();
      $this->checkDataSetInSessionAfterLogout();
      echo $this->unit->report();
    }    

    private function login(){
      $login = "shahramjaved75";
      $password = "123456";
      $remember = false;
      $login_by_username = ($this->config->item('login_by_username', 'tank_auth') && $this->config->item('use_username', 'tank_auth'));
      $login_by_email = $this->config->item('login_by_email', 'tank_auth');
                        
      $test_result = $this->tank_auth->login($login, $password, $remember, $login_by_username, $login_by_email);
      
      $this->unit->run($test_result, 'is_true', "Login Test");
    }
    
    private function checkDataSetInSession(){ // Check if Data Set In Session After Login
      $userId = $this->tank_auth->get_user_id();
      $userName = $this->tank_auth->get_username();
      
      $test_result = $userId && $userName;
      
      $this->unit->run($test_result, 'is_true', "Check If Data Set In Session");
    }
    
    private function checkDataSetInSessionAfterLogout(){ // Check if Data Set In Session After Login
      $userId = $this->tank_auth->get_user_id();
      $userName = $this->tank_auth->get_username();
      
      $test_result = $userId && $userName;
      
      $this->unit->run($test_result, 'is_false', "Check If Data Set In Session After Logout");
    }
    
    private function logout(){
      $this->tank_auth->logout();
    }
    
    
}