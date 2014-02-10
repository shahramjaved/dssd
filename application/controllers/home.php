<?php

  if (!defined('BASEPATH'))
    exit('No direct script access allowed');

  class Home extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->library('tank_auth');
      $this->load->library('SyntaxHighlighter');
      if (!$this->tank_auth->is_logged_in()) {         // Not logged in
        redirect('/auth/login/');
      }
    }

    public function index() {
      $this->load->view('partials/main_header');
      $this->load->view('dashboard.php');
      $this->load->view('partials/main_footer');
    }

    public function loadCode() {
      $viewData = array();
      $scc_id = $this->input->post('scc_id');
      $clone_list_id = $this->input->post('clone_list_id');

      $userId = 15;
      $loadId = 1;
      $lines = array();
      $miniMapLinks = array();
      $miniMapLinkLable = array();
      if ($clone_list_id == 0) {
        $fileName = 'Cocos2dxBitmap.java';
        for ($i = 56; $i <= 68; $i++) {
          $lines[] = $i;
        }
        $miniMapLinks[] = 56;
        $miniMapLinkLable[56] = array('text' => 'Clone 1', 'rows' => 12);
        for ($i = 156; $i <= 168; $i++) {
          $lines[] = $i;
        }
        $miniMapLinks[] = 156;
        $miniMapLinkLable[156] = array('text' => 'Clone 2', 'rows' => 12);
      } else {
        $fileName = 'Cocos2dxGLSurfaceView.java';
        for ($i = 96; $i <= 108; $i++) {
          $lines[] = $i;
        }
        $miniMapLinks[] = 96;
        $miniMapLinkLable[96] = array('text' => 'Clone 1', 'rows' => 12);
        for ($i = 196; $i <= 208; $i++) {
          $lines[] = $i;
        }
        $miniMapLinks[] = 196;
        $miniMapLinkLable[196] = array('text' => 'Clone 2', 'rows' => 12);
      }

      $filePath = UPLOADED_FILES_FOLDER . $userId . "/" . $loadId . "/" . $fileName;
      $obj = new SyntaxHighlighter($filePath, 'java');
      $obj->EnableLineNumbers();


      $obj->HighlightLines($lines);
      $obj->AddMiniMapLinkLabel($miniMapLinkLable);
      $obj->SetId("window" . $clone_list_id);
      echo $obj->getFormattedCode();
    }

    public function SingleCloneClass() {
      $viewData = array();

      $viewData['scc_data'] = array(
        array(
          'no' => 0,
          'scc_id' => 0,
          'length' => 38,
          'total_clones' => 2,
        ),
        array(
          'no' => 1,
          'scc_id' => 1,
          'length' => 147,
          'total_clones' => 2,
        ),
      );

      $viewData['scc_clone_list_data'] = array(
        0 => array(
          array(
            'clone_list_id' => 0,
            'no' => 0,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 56,
            'end_line' => 68,
            'file_name' => 'File1.php',
          ),
          array(
            'clone_list_id' => 1,
            'no' => 1,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 96,
            'end_line' => 108,
            'file_name' => 'File1.php',
          ),
        )
      );




      $this->load->view('partials/main_header');
      $this->load->view('clone_table/scc.php', $viewData);
      $this->load->view('partials/main_footer');
    }

    public function SingleCloneClass2() {
      $viewData = array();

      $viewData['scc_data'] = array(
        array(
          'no' => 0,
          'scc_id' => 0,
          'length' => 38,
          'total_clones' => 2,
        ),
        array(
          'no' => 1,
          'scc_id' => 1,
          'length' => 147,
          'total_clones' => 2,
        ),
      );

      $viewData['scc_clone_list_data'] = array(
        0 => array(
          array(
            'clone_list_id' => 0,
            'no' => 0,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 56,
            'end_line' => 68,
            'file_name' => 'File1.php',
          ),
          array(
            'clone_list_id' => 1,
            'no' => 1,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 96,
            'end_line' => 108,
            'file_name' => 'File1.php',
          ),
        ),
        1 => array(
          array(
            'clone_list_id' => 0,
            'no' => 0,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 56,
            'end_line' => 68,
            'file_name' => 'File3.php',
          ),
          array(
            'clone_list_id' => 1,
            'no' => 1,
            'gid' => 0,
            'did' => 0,
            'fid' => 4,
            'start_line' => 96,
            'end_line' => 108,
            'file_name' => 'File4.php',
          ),
        ),
      );




      $this->load->view('partials/main_header');
      $this->load->view('clone_table/scc2.php', $viewData);
      $this->load->view('partials/main_footer');
    }

    function mylcs($s1, $s2) {
//$a[strlen($s1)+1][strlen($s2)+1];	

      $i = 0;
      $s1_len = strlen($s1);
      $s2_len = strlen($s2);
      $a = array_fill(0, ($s1_len + 1), array_fill(0, ($s2_len + 1), 0));
      $s1 = str_split($s1);
      $s2 = str_split($s2);
      for ($i = 0; $i < $s1_len; $i++) {
        for ($j = 0; $j < $s2_len; $j++) {
          if ($s1[$i] == $s2[$j])
            $a[$i + 1][$j + 1] = $a[$i][$j] + 1;
          else
            $a[$i + 1][$j + 1] = max($a[$i + 1][$j], $a[$i][$j + 1]);
        }
      }

      $x = $s1_len;
      $y = $s2_len;
      $result = array();
      $clean_result = array();
      $clean_result2 = array();
      $return_array = array();
      while ($x != 0 and $y != 0) {
        if ($a[$x][$y] == $a[$x - 1][$y])
          $x--;

        else if ($a[$x][$y] == $a[$x][$y - 1])
          $y--;
        else {
          array_push($result, $s1[$x - 1]);
          //echo $s1[$x-1];
          $x--;
          $y--;
        }
      }
      $result = array_reverse($result);
      $s1_copy = $s1;
      $s2_copy = $s2;

      $comma_separated = implode("", $result);
      $comma_separated = str_replace(array('[', ']', '(', ')', ';', '{', '}'), ' ', $comma_separated);
      $result = explode(' ', $comma_separated);

      $count = count($result);

      $comma_separated = implode("", $s1_copy);
      $comma_separated = str_replace(array('[', ']', '(', ')', ';', '{', '}'), ' ', $comma_separated);
      $s1_copy = explode(' ', $comma_separated);

      $comma_separated = implode("", $s2_copy);
      $comma_separated = str_replace(array('[', ']', '(', ')', ';', '{', '}'), ' ', $comma_separated);
      $s2_copy = explode(' ', $comma_separated);


      //var_dump($s1_copy);
      for ($k = 0; $k < $count; $k++) {
        if (($key = array_search($result[$k], $s1_copy)) !== false) {
          //echo $result[$k];
          //echo ' ';
          array_push($clean_result, $result[$k]);
          array_push($clean_result, " ");
          unset($s1_copy[$key]);
        }

        if (($key = array_search($result[$k], $s2_copy)) !== false) {
          //echo $result[$k];
          //echo ' ';
          array_push($clean_result2, $result[$k]);
          array_push($clean_result2, " ");
          unset($s2_copy[$key]);
        }
      }
      //var_dump($s1_copy);
      $comma_separated = implode("", $clean_result);
      $different = implode(" ", $s1_copy);
      $different2 = implode(" ", $s2_copy);
      $return_array[0] = $different;
      $return_array[1] = $different2;
      return $return_array;
      //return $comma_separated;
    }

  }
  