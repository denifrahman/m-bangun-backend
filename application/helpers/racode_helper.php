<?php
function cmb_dinamis($name,$table,$field,$pk,$selected=null,$order=null){
    $ci = get_instance();
    $cmb = "<select name='$name' class='form-control'>";
    if($order){
        $ci->db->order_by($field,$order);
    }
    $data = $ci->db->get($table)->result();
    foreach ($data as $d){
        $cmb .="<option value='".$d->$pk."'";
        $cmb .= $selected==$d->$pk?" selected='selected'":'';
        $cmb .=">".  strtoupper($d->$field)."</option>";
    }
    $cmb .="</select>";
    return $cmb;  
}

function select2_dinamis($name,$table,$field,$placeholder){
    $ci = get_instance();
    $select2 = '<select name="'.$name.'" class="form-control select2 select2-hidden-accessible" multiple="" 
               data-placeholder="'.$placeholder.'" style="width: 100%;" tabindex="-1" aria-hidden="true">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $select2.= ' <option>'.$row->$field.'</option>';
    }
    $select2 .='</select>';
    return $select2;
}

function datalist_dinamis($name,$table,$field,$value=null){
    $ci = get_instance();
    $string = '<input value="'.$value.'" name="'.$name.'" list="'.$name.'" class="form-control">
    <datalist id="'.$name.'">';
    $data = $ci->db->get($table)->result();
    foreach ($data as $row){
        $string.='<option value="'.$row->$field.'">';
    }
    $string .='</datalist>';
    return $string;
}

function rename_string_is_aktif($string){
        return $string=='y'?'Aktif':'Tidak Aktif';
    }
    

function is_login(){
    $ci = get_instance();
    if(!$ci->session->userdata('logged_in')){
        redirect('login');
    }
    // else{
    //     $modul = $ci->uri->segment(1);
        
    //     $userroleid = $ci->session->userdata('data_profil')->data_user->userroleid;
    //     // dapatkan id menu berdasarkan nama controller
    //     $menu = $ci->db->get_where('v_t_akses_user_detail',array('url_sub_menu'=>$modul,'id_role'=>$userroleid))->row_array();
    //     // $id_menu = $menu['id_menu'];
    //     // chek apakah user ini boleh mengakses modul ini
    //     // $main_menu = $ci->db->get_where('v_t_akses_main_menu',array('nama_menu'=>$modul,'userroleid'=>$userroleid))->row_array();
    //     // $str = $ci->db->last_query();
    //     // var_dump($menu < 1);
    //     // die;
    //     if($menu<1){
    //         if($ci->session->userdata('data_profil')->data_user->userroleid == 1 || $ci->session->userdata('data_profil')->userroleid == 2){
    //             redirect('welcome');
    //             exit;
    //         }else if($ci->session->userdata('data_profil')->data_user->userroleid == 6){
    //             redirect('lowongan_kerja');
    //             exit;
    //         }else{
    //             redirect('welcome_siswa');
    //         }
    //     }
    // }
}

function alert($class,$title,$description){
    return '<div class="alert '.$class.' alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> '.$title.'</h4>
                '.$description.'
              </div>';
}

// untuk chek akses level pada modul peberian akses
function checked_akses($id_user_level,$id_menu){
    $ci = get_instance();
    $ci->db->where('id_user_level',$id_user_level);
    $ci->db->where('id_menu',$id_menu);
    $data = $ci->db->get('tbl_hak_akses');
    if($data->num_rows()>0){
        return "checked='checked'";
    }
}


function autocomplate_json($table,$field){
    $ci = get_instance();
    $ci->db->like($field, $_GET['term']);
    $ci->db->select($field);
    $collections = $ci->db->get($table)->result();
    foreach ($collections as $collection) {
        $return_arr[] = $collection->$field;
    }
    echo json_encode($return_arr);
}
