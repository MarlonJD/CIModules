<?php
class TestLanguage extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');   	 
        $this->lang->load("main","english");
    }

    function index() {
        $this->load->view('language_view');
    }
}