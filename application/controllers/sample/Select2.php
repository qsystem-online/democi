<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select2 extends CI_Controller {
    public function customOption(){       
        $this->load->library("menus"); 
        $data =[];
		$main_header = $this->parser->parse('inc/main_header',[],true);
		$main_sidebar = $this->parser->parse('inc/main_sidebar',[],true);		
		$page_content = $this->parser->parse('pages/sample/select2/sample1',$data,true);
		$main_footer = $this->parser->parse('inc/main_footer',[],true);
		
        $control_sidebar = NULL;
        
		$this->data["MAIN_HEADER"] = $main_header;
		$this->data["MAIN_SIDEBAR"] = $main_sidebar;
		$this->data["PAGE_CONTENT"] = $page_content;
		$this->data["MAIN_FOOTER"] = $main_footer;
		$this->data["CONTROL_SIDEBAR"] = $control_sidebar;
		$this->parser->parse('template/main',$this->data);
    }
}