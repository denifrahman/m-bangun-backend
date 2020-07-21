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
                                            <a class="nav-link active" onclick="getNewRequestTable()" data-toggle="tab" href="#kt_tab_pane_1">New Requst</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTablePublish()" data-toggle="tab" href="#kt_tab_pane_2">Publish</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTableNegosiasi()" data-toggle="tab" href="#kt_tab_pane_3">Negosiasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTableKontrak()" data-toggle="tab" href="#kt_tab_pane_4">Kontrak</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTableProgres()" data-toggle="tab" href="#kt_tab_pane_5">Prosess</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTableFinish()" data-toggle="tab" href="#kt_tab_pane_6">Finish</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getNewRequestTableDitolak()" data-toggle="tab" href="#kt_tab_pane_7">Ditolak</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                            <?php $this->load->view('request/table_request') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                            <?php $this->load->view('request/table_publish') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">
                                            <?php $this->load->view('request/table_negosiasi') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel" aria-labelledby="kt_tab_pane_4">
                                            <?php $this->load->view('request/table_kontrak') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel" aria-labelledby="kt_tab_pane_5">
                                            <?php $this->load->view('request/table_progress') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel" aria-labelledby="kt_tab_pane_6">
                                            <?php $this->load->view('request/table_finish') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_7" role="tabpanel" aria-labelledby="kt_tab_pane_7">
                                            <?php $this->load->view('request/table_ditolak') ?>
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
        <!-- end modal add -->

        <!-- awal::Footer -->
        <footer class="m-grid__item		m-footer ">
            <?php $this->load->view('component/footer') ?>
        </footer>
        <!-- akhir::Footer -->
    </div>
    <!-- akhir:: Page -->

    <!-- Load modal -->
    <?php $this->load->view('request/modal_detail_request') ?>
    <!-- end load modal -->
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
            $("#produkpersentase").on("keyup", function(event) {
                var hitungPersentase = parseInt($("#produkbudget").val()) * parseInt($("#produkpersentase").val()) / 100;
                $('#produkharga_view').val(format_number(parseInt($("#produkbudget").val()) + hitungPersentase));
                $('#produkharga').val(parseInt($("#produkbudget").val()) + hitungPersentase);
                console.log($("#produkbudget").val())
            });
            getNewRequestTable();
            setStatus();
            setKategori();
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            $("#select_2").change(function() {
                var kategoriid = $("#select_2").val();
                setSubKategori(kategoriid);
            });
            $('#submit').submit(function(e) {
                swal({
                    title: "",
                    text: "Tunggu Sebentar...",
                    imageUrl: baseURL + "assets/images/ajax-loader.gif",
                    showConfirmButton: false,
                    closeOnClickOutside: false,
                    allowOutsideClick: false,
                    imageWidth: 30,
                    imageHeight: 30,
                });
                e.preventDefault();
                url = "<?= API_POST ?>Produk/updateStatus",
                    type = "POST"
                $.ajax({
                    url: url,
                    type: "post",
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    cache: false,
                    async: false,
                    success: function(result) {
                        if (result.status) {
                            $("#nama_file").val('');
                            reload_table();
                            $('#modal_detail_request').modal('hide');
                            swal({
                                title: "Data Berhsil Di Simpan",
                                type: "success"
                            });
                        }
                    }
                });
            });
        });

        function reload_table() {
            table.ajax.reload(null, false); //reload datatable ajax
        }
    </script>

</body>
<!-- akhir::Body -->

</html>