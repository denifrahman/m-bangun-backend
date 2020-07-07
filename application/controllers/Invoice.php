<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', 'bidding');
        $this->session->set_flashdata('menu_2', 'bidding');
        $this->load->model('');
    }
    public function produk()
    {
        $produkid = $this->input->get('id', TRUE);
        $data['data_user_bid'] = json_decode(request_api_get(API_GET . '/Bid/getBidByProdukId/' . $produkid, false))->data;
        $data['invoice'] = json_decode(request_api_get(API_GET . '/Invoice/getInvoiceByProdukId/' . $produkid, false))->data;
        // var_dump($data['data_user_bid']);
        // die;
        if ($data['data_user_bid'] != null) {
            $this->load->view('invoice/v_invoice', $data);
        } else {
            echo "<script type='text/javascript'>alert('Bidding belum ada yang terpilih!!!');</script>";
            redirect(base_url('bidding'));
        }
    }
}
