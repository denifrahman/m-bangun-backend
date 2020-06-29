<!DOCTYPE html>
<html lang="en">
<!-- awal::Head -->

<head>
    <?php $this->load->view('component/head') ?>
    <link href="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

    <title>MITRA</title>
</head>
<!-- akhir::Head -->
<!-- awal::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- awal:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- AWAL: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <?php $this->load->view('component/header') ?>
        </header>
        <!-- AKHIR: Header -->
        <!-- awal::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <!-- AWAL: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
            <div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
                <!-- AWAL: Aside Menu -->
                <?php $this->load->view('component/sidebar') ?>
                <!-- AKHIR: Aside Menu -->
            </div>
            <!-- AKHIR: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-lg-12">
                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--tab">
                                <div class="m-portlet__body bg-light">
                                    <ul class="nav nav-tabs nav-tabs-line">
                                        <li class="nav-item">
                                            <a class="nav-link active" onclick="getTableMemberAktif()" data-toggle="tab" href="#kt_tab_pane_1">Member Aktif</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getTableMemberAktivasiAkun()" data-toggle="tab" href="#kt_tab_pane_2">Aktivasi Premium</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getTableMemberTidakAktif()" data-toggle="tab" href="#kt_tab_pane_3">Member tidak aktif</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                            <?php $this->load->view('master/members/table_members_aktif') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                            <?php $this->load->view('master/members/table_members_aktivasi_premium') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                                            <?php $this->load->view('master/members/table_members_non_aktif') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>

                    <!--End::Section-->
                </div>
            </div>
        </div>
        <!-- akhir:: Body -->
        <!-- Button trigger modal -->

        <!-- Modal add -->
        <?php $this->load->view('master/members/add_v') ?>
        <!-- end modal add -->

        <!-- awal::Footer -->
        <footer class="m-grid__item		m-footer ">
            <?php $this->load->view('component/footer') ?>
        </footer>
        <!-- akhir::Footer -->
    </div>
    <!-- akhir:: Page -->
    <!-- awal::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- akhir::Scroll Top -->
    <?php $this->load->view('component/script') ?>
    <script src="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
    <script>
        const id_member = "<?= $this->session->userdata('data_profil')->userid ?>"
        $(document).ready(function() {
            getTableMemberAktif();
        });

        function reload_table() {
            table.ajax.reload(null, false); //reload datatable ajax
        }

        function hapus(id) {
            swal({
                title: "Apakah anda yakin?",
                text: "Hapus hanya bersifat non aktif",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Hapus"
            }).then(function(e) {
                if (e.value) {
                    $.ajax({
                        method: 'get',
                        dataType: 'json',
                        url: '<?= API_GET ?>users/deleteUser/' + id,
                        success: function(data) {
                            console.log(data);
                            if (data.status === true) {
                                reload_table();
                                e.value && swal("Terhapus!", "Data di non aktifkan.", "success");
                            } else {
                                e.value && swal("Gagal Terhapus!", "Data gagal di non aktifkan.", "error");
                            }
                        },
                        fail: function(e) {
                            toastr.warning('Data gagal terhapus!');
                        },
                        error: function(e) {
                            toastr.error('Data gagal terhapus!');
                        }
                    });

                }
            })
        }
        
    </script>

</body>
<!-- akhir::Body -->

</html>