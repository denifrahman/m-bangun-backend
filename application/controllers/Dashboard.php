<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->session->set_flashdata('menu_1', 'dashboard');
		$this->session->set_flashdata('menu_2', 'dashboard');
	}

	public function index()
	{

		$userid_siswa = $this->session->userdata('data_profil')->userid;
		$data['profil'] = $this->session->userdata('data_profil');
		// $data['info_akademik'] = json_decode(request_api_get(API_GET . '/dashboard_siswa/get_all_info_akademik'))->data; // request api
		// $data['catatan_siswa'] = json_decode(request_api_get(API_GET . '/dashboard_siswa/get_catatan_by_siswa/' . $userid_siswa))->data; // request api
		// $user_insert = $data['catatan_siswa'][0];
		// echo json_encode($this->limit_string('sdadada', 10));
		// die;
		// echo json_encode(($data['catatan_siswa']));
		if($userid_siswa = $this->session->userdata('data_profil')->userroleid == 6){
			redirect('lowongan_kerja');
		}else{
			$this->load->view('welcome_siswa', $data);
		}
	}
	function limit_string($string, $charlimit)
	{
		if (substr($string, $charlimit - 1, 1) != ' ') {
			$string = substr($string, '0', $charlimit);
			$array = explode(' ', $string);
			array_pop($array);
			$new_string = implode(' ', $array);

			return $new_string . '...';
		} else {
			return substr($string, '0', $charlimit - 1) . '...';
		}
	}
}
