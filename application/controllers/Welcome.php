<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_login();
		$this->session->set_flashdata('menu_1', 'welcome');
		$this->session->set_flashdata('menu_2', 'welcome');
	}

	public function index()
	{

		$id_mitra = $this->session->userdata('data_profil')->id;
		$data['profil'] = $this->session->userdata('data_profil');
		$this->load->view('home_v', $data);
		
	}
}
