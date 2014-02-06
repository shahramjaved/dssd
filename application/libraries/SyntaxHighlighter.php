<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH . 'third_party/syntax_highlighter/geshi.php');

class SyntaxHighlighter{
  
  private $geshi;
  private $isLangSourceSet;
  function __construct($file_path='', $language=''){
    $this->ci =& get_instance();
    $this->isLangSourceSet = false;
    
    if ($file_path){      
      $source = file_get_contents($file_path);
    }else{
      $source = '';
    }
    
    if ($file_path && $language){
      $this->isLangSourceSet = true;
    }
    
    $this->geshi = new GeSHi($source, $language);    
  }
  
  public function SetLanguageAndSource($language, $filePath){
    $source = file_get_contents($filePath);    
    $this->geshi->set_source($source);
    $this->geshi->set_language($language);
    $this->isLangSourceSet = true;
  }
  
  public function HighlightLines($lines){    
    $this->geshi->highlight_lines_extra($lines);
  }
  
  public function AddMiniMapLink($lineNums){
    $this->geshi->set_start_highlight_extra_lines($lineNums);
  }
  
  
  public function setToolTip($text){        
    
  }
  
  public function SetId($id){
    $this->geshi->enable_ids(true);
    $this->geshi->set_overall_id($id);
  }
  
  public function EnableLineNumbers(){    
    $this->geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 37);
  }
  
  public function getFormattedCode(){
    if ($this->isLangSourceSet){
      return $this->geshi->parse_code();
    }else{
      return 'No Language and File Path Set';
    }
  }
  
}