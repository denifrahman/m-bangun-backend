<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->session->set_flashdata('menu_1', '');
        $this->session->set_flashdata('menu_2', 'profil_user');
    }

    public function index()
    {
        $this->load->view('profil_user_v');
    }
    public function view()
    {
        $id_user = $this->session->userdata('data_profil')->id;
        $data['data_user'] = json_decode(request_api_get(API_GET . '/m_user/get_by_id/' . $id_user, false))->data; // request api
        // var_dump($data['data_user']);
        // die;
        $this->load->view('profil_user_v', $data);
    }
    public function upload()
    {
        $lembar_jawaban = str_replace(" ", "_", $_FILES['nama_file']['name']);
        $config['upload_path']          = 'assets/img/profile';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 50000;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $config['file_name']            =  $lembar_jawaban;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('nama_file')) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            // echo 'file_e_modul_pdf sukses';
            // $data = array('upload_data' => $this->upload->data());
            $uploadedImage = $this->upload->data();
            $this->resizeImage($uploadedImage['file_name']);
            $data1['data_post'] = array(
                'id' => $this->input->post('id_user'),
                'foto_profile' => $lembar_jawaban,
            );
            $send = json_decode(request_api_post(API_POST . '/m_user/ubah_foto', $data1, false));
        }
        echo json_encode($send);
    }
    public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'width' => 500,
      );
   
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
   
      $this->image_lib->clear();
   }    
    public function delete_by_id($id, $nama_file)
    {
        // $file = "assets/img/profile/".$nama_file;
        // if (is_readable($file) && unlink($file)) {
        //     echo "The file has been deleted";
        // } else {
        //     echo "The file was not found or not readable and could not be deleted";
        // }
        $data1['data_post'] = array(
            'id' => $id,
            'foto_profile' => '',
        );
        $send = json_decode(request_api_post(API_POST . '/m_user/ubah_foto', $data1, false));
        echo json_encode($send);
    }
}
