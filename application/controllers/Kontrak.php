<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', 'bidding');
        $this->session->set_flashdata('menu_2', 'bidding');
        $this->load->model('');
    }
    public function view()
    {
        $produkid = $this->input->get('id', TRUE);
        // $data['data_user_bid'] = json_decode(request_api_get(API_GET . '/Bid/getBidByProdukId/' . $produkid, false))->data;
        $data['kontrak'] = json_decode(request_api_get(API_GET . '/Kontrak/getKontrakByProdukId/' . $produkid, false))->data;
        // var_dump($data['kontrak']);
        // die;
        // if ($data['data_user_bid'] != null) {
        $this->load->view('kontrak/v_kontrak', $data);
        // } else {
        //     echo "<script type='text/javascript'>alert('Bidding belum ada yang terpilih!!!');</script>";
        //     redirect(base_url('bidding'));
        // }
    }
    public function create()
    {
        $produkid = $this->input->get('id', TRUE);
        $data['data_user_bid'] = json_decode(request_api_get(API_GET . '/Bid/getBidByProdukId/' . $produkid, false))->data;
        $data['invoice'] = json_decode(request_api_get(API_GET . '/Invoice/getInvoiceByProdukId/' . $produkid, false))->data;
        // var_dump($data['data_user_bid']);
        // die;
        if ($data['data_user_bid'] != null) {
            $this->load->view('kontrak/add_kontrak', $data);
        } else {
            echo "<script type='text/javascript'>alert('Bidding belum ada yang terpilih!!!');</script>";
            redirect(base_url('bidding'));
        }
    }
    public function pdf()
    {
        $produkid = $this->input->get('id', TRUE);
        $this->load->library('Pdf');
        $data['kontrak'] = json_decode(request_api_get(API_GET . '/Kontrak/getKontrakByProdukId/' . $produkid, false))->data;
        // var_dump($data['kontrak']);
        // die;
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('kontrak/v_kontrak_pdf', $data);
    }

    public function print()
    {
        $produkid = $this->input->get('id', TRUE);
        $data['kontrak'] = json_decode(request_api_get(API_GET . '/Kontrak/getKontrakByProdukId/' . $produkid, false));
        // var_dump($data['kontrak']->data->owner_signature);
        // die;
        $signature_worker = '';
        $signature_owner = '';
        if ($data['kontrak']->data->worker_signature == NULL) {
            $signature_worker = '<td style="text-align: center; "><img src="' . base_url() . '/assets/images/logo/logo.png" alt="images" width="100px" style="opacity: 0.1;"></td>';
        } else {
            $signature_worker = '<td style="text-align: center; "><img src="' . API . '/assets/'. $data['kontrak']->data->worker_signature . '" alt="images" width="100px"></td>';
        }
        if ($data['kontrak']->data->owner_signature == NULL) {
            $signature_owner = '<td style="text-align: center; "><img src="' . base_url() . '/assets/images/logo/logo.png" alt="images" width="100px" style="opacity: 0.1;"></td>';
        } else {
            $signature_owner = '<td style="text-align: center; "><img src="' . API . '/assets/'. $data['kontrak']->data->owner_signature . '" alt="images" width="100px"></td>';
        }

        $view = '<div id="body">' . $data['kontrak']->data->kontrakbody . '</div>
        <table style="width:100%">
            <tr>
                <th style=" height:80px;vertical-align: top;">Pihak pertama</th>
                <th style=" height: 80px;vertical-align: top;">Pihak kedua</th>
                <th style=" height: 80px;vertical-align: top;">Pihak ketiga</th>
            </tr>
            <tr>
            <td style="text-align: center; "><img src="' . base_url() . 'assets/images/logo/logo.png" alt="images" width="100px" style="opacity: 0.1;"></td>
            ' . $signature_owner . '
            ' . $signature_worker . '
            </tr>
            <tr>
                <td style="text-align: center; ">m-Bangun</td>
                <td style="text-align: center; ">' . $data['kontrak']->data->owner_nama . '</td>
                <td style="text-align: center; ">' . $data['kontrak']->data->worker_nama . '</td>
            </tr>
        </table>';
        echo $view;
    }
    function encode_img_base64($img_path = false)
    {
        if ($img_path) {
            return base64_encode(file_get_contents($img_path));
        }

        return false;
    }
}
