<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('crypt');
    }

    /*
    Fungsi : Menampilkan view Admin
     */
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect(base_url(''));
        } else {
            $this->load->view('admin_v');
        }
    }

    /*
    Fungsi : cek Admin sukses / tidak
     */
    public function masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $encrypt_pass = $this->crypt->encrypt($password, 'abcdef0123456789');

        $data['data_post'] = array(
            'username' => $username,
            'password' => $encrypt_pass
        );

        //melakukan post ke api dengan parameter array data
        $send = json_decode(request_api_post(API . '/loginSuperAdmin', $data, false));

        if ($send->meta->success) {
            //set session dari data yang telah diambil sebelumnya dari api

            $set_session = array(
                'data_profil' => $send->data,
                'logged_in' => true,
            );

            $this->session->set_userdata($set_session);
            $this->session->set_flashdata('perintah_benar', 'Berhasil Admin'); //menSet flashdata digunakan untuk toast
            redirect(base_url('welcome')); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
        } else {
            $this->session->set_flashdata('perintah_salah', 'Gagal Admin, Silahkan coba lagi!'); //menSet flashdata digunakan untuk toast
            redirect(base_url('admin')); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
        }
        // echo json_encode($send);

    }

    /*
    Fungsi : logout, hapus semua session yang ada
     */
    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url()); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
    }
}
