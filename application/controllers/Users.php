<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', 'master');
        $this->session->set_flashdata('menu_2', 'users');
    }

    public function index()
    {
        $this->load->view('master/m_user/data_v');
    }

}
