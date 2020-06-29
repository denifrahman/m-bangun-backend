<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master_M extends CI_Model {

   //Pemanggilan data kota pada database
    public function kota() {
        return $this->db->get('m_kota')->result();
    }

    //Pemanggilan data kelengkapan pada database
    public function kelengkapan() {
        return $this->db->get('m_kelengkapan')->result();
    }

    //Pemanggilan data lama kebutuhan pada database
    public function lama_kebutuhan() {
        return $this->db->get('m_lama_kebutuhan')->result();
    }

    //Pemanggilan data produk pada database
    public function produk() {
        return $this->db->get('m_produk')->result();
    }

    //Pemanggilan data kecamatan pada database berdasarkan parameter id kota
    public function kecamatanByKota($id_kota) {
        $this->db->where('id_kota', $id_kota);
        return $this->db->get('m_kecamatan')->result();
    }

    //Pemanggilan data kelurahan pada database berdasarkan parameter id kecamatan
    public function kelurahanByKecamatan($id_kecamatan) {
        $this->db->where('id_kecamatan', $id_kecamatan);
        return $this->db->get('m_kelurahan')->result();
    }

    //Pemanggilan data slider pada database berdasarkan parameter id partner mitra
    public function get_slider_home($id) {
        $this->db->where('id_partner_mitra', $id);
        return $this->db->get('web.m_slider')->result();
    }

    //Pemanggilan data testimoni pada database berdasarkan parameter id partner mitra
    public function get_testimoni_home($id) {
        $this->db->where('id_partner_mitra', $id);
        return $this->db->get('web.m_testimoni')->result();
    }

    //Pemanggilan data featured on pada database berdasarkan parameter id partner mitra
    public function get_featured_home($id) {
        $this->db->where('id_partner_mitra', $id);
        return $this->db->get('web.m_featured')->result();
    }

    //Pemanggilan data gabung pada database berdasarkan parameter id partner mitra
    public function get_gabung_home($id) {
        $this->db->where('id_partner_mitra', $id);
        return $this->db->get('web.m_gabung')->result();
    }

    //Pemanggilan data partner mitra pada database
    public function get_partner_mitra() {
        return $this->db->get('m_partner_mitra')->result();
    }

    //Pemanggilan data partner mitra dan setting aplikasi
    public function get_partner_mitra_n_setting() {
        $this->db->join('c_setting', 'c_setting.id_partner_mitra = m_partner_mitra.id', 'left');
        $this->db->where('id_range_pembiayaan', 3);

        return $this->db->get('m_partner_mitra')->result();
    }

    //Pemanggilan data status pengajuan
    public function get_status($id) {
        // select tp.id_mitra, tp.tanggal, wm.nama as nama_mitra, mb.nama as nama_batch,  ms.nama as nama_status from t_pengajuan tp
        // left join web.m_mitra wm on wm.username = tp.id_mitra
        // left join m_batch mb on mb.id = tp.id_batch
        // left join m_status ms on ms.id = tp.id_status
        $this->db->select("tp.id_mitra, tp.nama_usaha, to_char( tp.tanggal, 'DD/MM/YYYY') as tanggal, tp.tanggal as tgl, wm.alamat as alamat_usaha, mb.nama as nama_batch,  ms.nama as nama_status, tp.id as id_pengajuan");
        $this->db->join('web.m_mitra wm', 'wm.username = tp.id_mitra', 'left');
        $this->db->join('m_batch mb', 'mb.id = tp.id_batch', 'left');
        $this->db->join('m_status ms', 'ms.id = tp.id_status', 'left');
        $this->db->where('tp.id_mitra', $id);
        $this->db->order_by('tgl', 'desc');
        return $this->db->get('t_pengajuan tp')->result();
    }

    //Pemanggilan datastatus berdasarkan id pengajuan
    public function get_statusByPengajuan($id) {
        // select tp.id_mitra, tp.tanggal, wm.nama as nama_mitra, mb.nama as nama_batch,  ms.nama as nama_status from t_pengajuan tp
        // left join web.m_mitra wm on wm.username = tp.id_mitra
        // left join m_batch mb on mb.id = tp.id_batch
        // left join m_status ms on ms.id = tp.id_status
        $this->db->select("wm.username as username, wm.nama as nama_mitra, wm.email as email_mitra, to_char(wm.tanggal_lahir,'DD-MM-YYYY') as tanggal_lahir, wm.no_ktp,wm.no_telepon, wm.no_whatsapp, wm.alamat, wm.kode_pos
                      ,tp.nama_usaha, tp.no_telepon_usaha, tp.alamat_usaha, tp.lama_usaha, tp.lama_pengalaman, tp.rata_rata_omset_perbulan, tp.rata_rata_biaya_usaha_perbulan
                      ,tp.kebutuhan_investasi_diajukan, tp.modal_kerja, tp.peralatan, tp.hutang_usaha, tp.program_pemasaran
                      , tp.foto_ktp, tp.foto_npwp, tp.foto_kk, tp.foto_tampak_depan, tp.foto_lingkungan_sekitar, tp.foto_aktifitas_usaha, tp.foto_peralatan_usaha, tp.foto_produksi
                      , mb.nama as nama_batch , bu.nama as nama_bentuk_usaha, ju.nama as nama_jenis_usaha, tp.presentase_mitra, tp.presentase_investor
                      , mk1.nama as nama_kel_mitra, mke1.nama as nama_kec_mitra, mko1.nama as nama_kot_mitra
                      , mk2.nama as nama_kel_usaha, mke2.nama as nama_kec_usaha, mko2.nama as nama_kot_usaha
                      ");
        $this->db->join('web.m_mitra wm', 'wm.username = tp.id_mitra', 'left');
        $this->db->join('m_batch mb', 'mb.id = tp.id_batch', 'left');
        $this->db->join('m_status ms', 'ms.id = tp.id_status', 'left');
        $this->db->join('m_bentuk_usaha bu', 'bu.id = tp.id_bentuk_usaha', 'left');
        $this->db->join('m_jenis_usaha ju', 'ju.id = tp.id_jenis_usaha', 'left');

        //mitra
        $this->db->join('m_kelurahan mk1', 'mk1.id = wm.id_kelurahan', 'left');
        $this->db->join('m_kecamatan mke1', 'mke1.id = mk1.id_kecamatan', 'left');
        $this->db->join('m_kota mko1', 'mko1.id = mke1.id_kota', 'left');

        //usaha
        $this->db->join('m_kelurahan mk2', 'mk2.id = tp.id_kelurahan', 'left');
        $this->db->join('m_kecamatan mke2', 'mke2.id = tp.id_kecamatan', 'left');
        $this->db->join('m_kota mko2', 'mko2.id = tp.id_kota', 'left');


        $this->db->where('tp.id', $id);
        // $this->db->where('nama', 'tentang-kami');
        return $this->db->get('t_pengajuan tp')->result();
    }

    //Pemanggilan data range pembiayaan berdasatkan nominal range yang telah dipilih
    public function get_range_pembiayaan($range) {
        $this->db->where("jumlah_akhir >= $range and jumlah_awal <= $range");
        return $this->db->get('m_range_pembiayaan')->result();
    }

    //Pemanggilan data batas range berdasarkan id range pembiayaan
    public function get_batas_range($id = "") {
        $this->db->select("min(jumlah_awal) as batas_awal, max(jumlah_akhir) as batas_akhir");
        if ($id) {
            $this->db->where("id = $id");
        }
        return $this->db->get('m_range_pembiayaan')->row();
    }

    //Pemanggilan data verifikasi berdasarkan id pengajuan
    public function get_data_verifikasi($id) {
        $this->db->select("to_char( tv.tanggal, 'DD/MM/YYYY HH24:MI') as tanggal, mu.nama_user as verifikator, ms.nama as status");
        $this->db->join('m_status ms', 'ms.id = tv.id_status', 'left');
        $this->db->join('m_user mu', 'mu.nip = tv.user_ins', 'left');
        $this->db->where('tv.id_pengajuan', $id);
        $this->db->order_by('tv.tanggal', 'desc');

        return $this->db->get('t_verifikasi tv');
    }

    //Pemanggilan data mitra pada halaman utama berdasarkan id partner mitra dan batch yang aktif
    public function get_data_mitra_home($id, $limit,  $batch) {
        $this->db->select("tp.id_mitra, wm.nama, wm.foto, tp.nama_usaha, tp.foto_tampak_depan, tp.kebutuhan_investasi_diajukan, mk.nama as nama_kota, tp.kebutuhan_investasi_diajukan, tp.rata_rata_omset_perbulan, mju.nama as nama_jenis, tp.presentase_mitra");
        $this->db->join('web.m_mitra wm', 'wm.username = tp.id_mitra', 'left');
        $this->db->join('m_kota mk','mk.id = tp.id_kota','left');
        $this->db->join('m_jenis_usaha mju','mju.id = tp.id_jenis_usaha','left');
        $this->db->where("tp.id_status", 17);
        $this->db->where("tp.id_batch", $batch);
        $this->db->where("wm.id_partner_mitra", $id);
        $this->db->order_by('tp.id_mitra', 'desc');
        $this->db->limit($limit);

        return $this->db->get('t_pengajuan tp')->result();
    }

    //Perhitungan jumlah data mitra berdasarkan id partner mitra
  	function count_data_mitra($id, $batch){
        $this->db->join('web.m_mitra wm', 'wm.username = tp.id_mitra', 'left');
        $this->db->join('m_kota mk','mk.id = tp.id_kota','left');
        $this->db->join('m_jenis_usaha mju','mju.id = tp.id_jenis_usaha','left');
        $this->db->where("tp.id_status", 17);
        $this->db->where("tp.id_batch", $batch);
        $this->db->where("wm.id_partner_mitra", $id);

  		return $this->db->get('t_pengajuan tp')->num_rows();
  	}

    //Pemanggilan data mitra berdasarkan id partner mitra dan pemberian limit ( dengan paginasi )
    public function get_data_mitra_all($number, $offset, $id, $batch){
        $this->db->select("tp.id_mitra, wm.nama, wm.foto, tp.nama_usaha, tp.foto_tampak_depan, tp.kebutuhan_investasi_diajukan, mk.nama as nama_kota, tp.kebutuhan_investasi_diajukan, tp.rata_rata_omset_perbulan, mju.nama as nama_jenis, tp.presentase_mitra");
        $this->db->join('web.m_mitra wm', 'wm.username = tp.id_mitra', 'left');
        $this->db->join('m_kota mk','mk.id = tp.id_kota','left');
        $this->db->join('m_jenis_usaha mju','mju.id = tp.id_jenis_usaha','left');
        $this->db->where("tp.id_status", 17);
        $this->db->where("tp.id_batch", $batch);
        $this->db->where("wm.id_partner_mitra", $id);
        $this->db->order_by('tp.id_mitra', 'desc');

      return $this->db->get('t_pengajuan tp',$number,$offset)->result();
    }

    //Pemanggilan data batch yang aktif
    public function get_batch_aktif() {
        $this->db->where('is_aktif', true);
        return $this->db->get('m_batch')->row();
    }

    //Pemanggilan data status rencana kerja berdasarkan user yang menginputkan
    public function status_rencana_kerja($id) {
        $this->db->select("a.*,k.nama as kebutuhan,to_char(a.tanggal_transfer,'DD-MM-YYYY') as tanggal_pencairan_tf,to_char(a.tanggal_pencairan,'DD-MM-YYYY') as estimasi_pencairan, to_char(a.tanggal,'DD-MM-YYYY') as tanggal_raker,m.nama as mitra,to_char(a.tgl_ins,'DD-MM-YYYY') as tanggal_formatted,s.nama as status, z.nama as wilayah, pm.nama as partner_mitra");
        $this->db->from("bs.t_rencana_kerja a");
        $this->db->join("t_akad ta", "ta.id=a.id_akad", "inner");
        $this->db->join("web.m_mitra m", "m.username=ta.id_mitra", "inner");
        $this->db->join("t_pengajuan tp", "tp.id=ta.id_pengajuan", "inner");
        $this->db->join("m_pembagian_zona zon", "zon.id_kecamatan=tp.id_kecamatan", "left");
        $this->db->join("m_zona z", "z.id=zon.id_zona", "left");
        $this->db->join("m_kelengkapan k", "k.id=a.id_kelengkapan", "inner");
        $this->db->join("m_partner_mitra pm", "pm.id=ta.id_partner_mitra", "left");
        $this->db->join("m_status s", "s.id=a.id_status", "left");
        $this->db->where("a.user_ins", $id);
        return $this->db->get()->result();
    }

    //Pemanggilan data status master kebutuhan berdasarkan mitra
    public function status_master_kebutuhan($id) {
        $this->db->select("a.*,b.nama as batch,m.username as mitra,s.nama as status,p.nama_usaha,to_char(a.tgl_ins,'DD-MM-YYYY') as tanggal_formatted");
        $this->db->from("bs.t_master_kebutuhan_harian a");
        $this->db->join("web.m_mitra m", "a.id_mitra=m.username", "inner");
        $this->db->join("m_status s", "s.id=a.id_status", "inner");
        $this->db->join("t_pengajuan p", "p.id_mitra=m.username", "inner");
        $this->db->join("m_batch b", "b.id=p.id_batch", "inner");
        $this->db->where("p.id_status", 17);
        $this->db->where("m.username", $id);
        return $this->db->get()->result();
    }

    //Pemanggilan data status kebutuhan berdasarkan mitra
    public function status_kebutuhan($id) {
        $this->db->select("a.*,b.nama as batch,m.username as mitra,s.nama as status,p.nama_usaha,to_char(a.tgl_ins,'DD-MM-YYYY') as tanggal_formatted");
        $this->db->from("bs.t_kebutuhan_harian a");
        $this->db->join("web.m_mitra m", "a.id_mitra=m.username", "inner");
        $this->db->join("m_status s", "s.id=a.id_status", "inner");
        $this->db->join("t_pengajuan p", "p.id_mitra=m.username", "inner");
        $this->db->join("m_batch b", "b.id=p.id_batch", "inner");
        $this->db->where("p.id_status", 17);
        $this->db->where("m.username", $id);
        return $this->db->get()->result();
    }

}
