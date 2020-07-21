<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', 'toko');
        $this->session->set_flashdata('menu_2', 'toko');
        $this->load->model('');
    }

    public function index()
    {
        $this->load->view('Toko/main_v');
    }
    public function page()
    {
        $this->load->library('pagination');
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['base_url'] = base_url() . 'index/Beranda/anggota';
        $pageSize = $this->input->get('pageSize') == null ? '10' : $this->input->get('pageSize');
        $pageNumber = $this->input->get('pageNumber') == null ? '0' : $this->input->get('pageNumber');
        $data['data'] = json_decode(request_api_get(API_GET . '/Produk/getAllRequest/' . $pageSize . '/' . $pageNumber, false));
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;', $str_links);
        var_dump($data['links']);
        die;
        $this->load->view('Toko/main_v', $data);
    }
    public function nama()
    {
        $nama = urldecode($this->input->get('nama')) == null ? '10' : urldecode($this->input->get('nama'));
        $data['data'] = json_decode(request_api_get(API_GET . '/Produk/getAllByNama/' . $nama, false));
        $this->load->view('Toko/main_v', $data);
    }
    public function detail()
    {
        // $nama = urldecode($this->input->get('nama')) == null ? '10' : urldecode($this->input->get('nama'));
        // $data['data'] = json_decode(request_api_get(API_GET . '/Produk/getAllByNama/' . $nama, false));
        $this->load->view('Toko/detail_request');
    }
}
