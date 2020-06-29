<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidding extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', 'bidding');
        $this->session->set_flashdata('menu_2', 'bidding');
        $this->load->model('');
    }

    public function index()
    {
        $this->load->view('bidding/main_v');
    }
    public function progress()
    {
        $this->load->view('bidding/progress');
    }
}
