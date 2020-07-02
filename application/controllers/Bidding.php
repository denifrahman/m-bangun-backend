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
        $produkid = $this->input->get('id', TRUE);
        $data['data_user_bid'] = json_decode(request_api_get(API_GET . '/Bid/getBidByProdukId/' . $produkid, false))->data;
        if($data['data_user_bid'] != null){
            $this->load->view('progress/v_progress',$data);
        }else{
            echo "<script type='text/javascript'>alert('Bidding belum ada yang terpilih!!!');</script>";
            redirect(base_url('bidding'));
        }
    }
    public function invoice()
    {
        $produkid = $this->input->get('id', TRUE);
        $data['data_user_bid'] = json_decode(request_api_get(API_GET . '/Bid/getBidByProdukId/' . $produkid, false))->data;
        if($data['data_user_bid'] != null){
            $this->load->view('bidding/progress',$data);
        }else{
            echo "<script type='text/javascript'>alert('Bidding belum ada yang terpilih!!!');</script>";
            redirect(base_url('bidding'));
        }
    }
}
