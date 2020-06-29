<?php

class Utility_M extends CI_Model {

  //Function untuk enkripsi password
    function EncryptPasswd($value) {
        $salt = '#*seCrEt!@-*%'; //bumbu untuk enkripsi
        $str = do_hash($salt . $value);
        $str = do_hash($salt . $str, 'md5'); //memakai hash md5 untuk enkripsi
        return $str;
    }

    //Pengecekan Login
    public function logged_in() {
  		if(!$this->session->userdata('logged_in')){
  			redirect(base_url('login'));
  		}
    }

}

/* End of file UtilityM.php */
/* Location: ./application/models/Utility_m.php */
