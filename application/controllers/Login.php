<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('crypt');
    }

    /*
    Fungsi : Menampilkan view login
     */
    public function index()
    {
        // if ($this->session->userdata('logged_in')) {
        //     redirect(base_url(''));
        // } else {
        $this->load->view('login_v');
        // }
    }

    /*
    Fungsi : cek login sukses / tidak
     */
    public function masuk()
    {
        $username = $this->input->post('useremail');
        $password = $this->input->post('userpassword');


        // melakukan post ke api dengan parameter array data
        if ($username == '' || $password == '') {
            $this->session->set_flashdata('perintah_salah', 'Gagal Login, Silahkan coba lagi!'); //menSet flashdata digunakan untuk toast
            redirect(base_url('login'));
        } else {
            $encrypt_pass = $this->crypt->encrypt($password, 'abcdef0123456789');

            $data['data_post'] = array(
                'useremail' => $username,
                'userpassword' => $encrypt_pass,
            );
            $send = json_decode(request_api_post(API_POST . '/users/loginAdmin', $data, false));
            if ($send->status) {
                $set_session = array(
                    'data_profil' => $send->data,
                    'logged_in' => true,
                );
                //set session dari data yang telah diambil sebelumnya dari api
                $this->session->set_userdata($set_session);
                if ($send->data->status_pembayaran_nama == 'BELUM') {

                    $this->session->set_flashdata('perintah_benar', 'Pembayaran belum di konfirmasi'); //menSet flashdata digunakan untuk toast
                    redirect(base_url('daftar')); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
                } else {
                    $this->session->set_flashdata('perintah_benar', 'Berhasil Login'); //menSet flashdata digunakan untuk toast
                    redirect(base_url('dashboard')); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
                }
            } else {
                $this->session->set_flashdata('perintah_salah', 'Gagal Login, Silahkan coba lagi!'); //menSet flashdata digunakan untuk toast
                redirect(base_url('login')); //Redirect ke halaman lain jika pengecekan mendapat hasil satu atau berhasil
            }
        }
        echo json_encode($send);
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
