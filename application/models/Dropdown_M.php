<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdown_M extends CI_Model
{

  public function __construct()
  {
    parent::__construct();

  }

    // get data dropdown
    function nama_bank()
    {
        // ambil data dari db

        $this->db->order_by('id', 'asc');
        $result = $this->db->get('m_bank');

        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Pilih salah satu';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id] = $row->nama;
            }
        }
        return $dd;
    }
    // get data dropdown

    // get data dropdown
    function bentuk_badan_usaha()
    {
        // ambil data dari db

        $this->db->order_by('id', 'asc');
        $result = $this->db->get('m_bentuk_usaha');

        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Pilih salah satu';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id] = $row->nama;
            }
        }
        return $dd;
    }
    // get data dropdown

    // get data dropdown
    function jenis_usaha()
    {
        // ambil data dari db

        $this->db->order_by('id', 'asc');
        $result = $this->db->get('m_jenis_usaha');

        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Pilih salah satu';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id] = $row->nama;
            }
        }
        return $dd;
    }
    // get data dropdown

    // get data dropdown
    function status_usaha()
    {
        // ambil data dari db

        $this->db->order_by('id', 'asc');
        $result = $this->db->get('m_status_usaha');

        // bikin array
        // please select berikut ini merupakan tambahan saja agar saat pertama
        // diload akan ditampilkan text please select.
        $dd[''] = 'Pilih salah satu';
        if ($result->num_rows() > 0) {
            foreach ($result->result() as $row) {
            // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
                $dd[$row->id] = $row->nama;
            }
        }
        return $dd;
    }
    // get data dropdown


}


/* End of file ModelName.php */
/* Location: ./application/models/ModelName.php */

?>
