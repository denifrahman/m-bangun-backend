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
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <span class="m-portlet__head-icon m--hide">
                                                <i class="la la-gear"></i>
                                            </span>
                                            <h4 class="m-portlet__head-text">
                                                Produk
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <button type="button" onclick="tambah()" class="btn btn-sm m-btn--pill btn-primary"><i class="flaticon-add-circular-button"></i> Tambah Data</button>
                                    </div>
                                </div>
                                <div class="m-portlet__body bg-light">
                                    <ul class="nav nav-tabs nav-tabs-line">
                                        <li class="nav-item">
                                            <a class="nav-link active" onclick="getTableAktif()" data-toggle="tab" href="#kt_tab_pane_1">Aktif</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" onclick="getTableTidakAktif()" data-toggle="tab" href="#kt_tab_pane_2">Tidak Aktif</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_1">
                                            <?php $this->load->view('toko/table_produk_aktif') ?>
                                        </div>
                                        <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                            <?php $this->load->view('toko/table_produk_tidak_aktif') ?>
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
    <?php $this->load->view('toko/modal_add') ?>
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
        const id_member = "<?= $this->session->userdata('data_profil')->produkkategorisubid ?>"
        $(document).ready(function() {
            var produkthumbnail = document.getElementById("produkthumbnail");
            var produkfoto1 = document.getElementById("produkfoto1");
            var produkfoto2 = document.getElementById("produkfoto2");
            var produkfoto3 = document.getElementById("produkfoto3");
            var produkfoto4 = document.getElementById("produkfoto4");

            produkthumbnail.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#produkthumbnail_v').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                if (this.files[0].size > 500000) {
                    alert("File is too big!");
                    this.value = "";
                };
            };
            produkfoto1.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#produkfoto1_v').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                if (this.files[0].size > 500000) {
                    alert("File is too big!");
                    this.value = "";
                };
            };
            produkfoto2.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#produkfoto2_v').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                if (this.files[0].size > 500000) {
                    alert("File is too big!");
                    this.value = "";
                };
            };
            produkfoto3.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#produkfoto3_v').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                if (this.files[0].size > 500000) {
                    alert("File is too big!");
                    this.value = "";
                };
            };
            produkfoto4.onchange = function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#produkfoto4_v').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                if (this.files[0].size > 500000) {
                    alert("File is too big!");
                    this.value = "";
                };
            };
            $("#status_view").change(function() {
                const checked = $(this).is(':checked'); 
                if (checked) {
                    $("#produkaktif").val('1');
                }else{
                    $("#produkaktif").val('0');
                }
            });
            $("#produkpersentase").on("keyup", function(event) {
                var hitungPersentase = parseInt($("#produkbudget").val()) * parseInt($("#produkpersentase").val()) / 100;
                $('#produkharga_view').val(format_number(parseInt($("#produkbudget").val()) + hitungPersentase));
                $('#produkharga').val(parseInt($("#produkbudget").val()) + hitungPersentase);
                console.log($("#produkbudget").val())
            });
            console.log('sda');
            $('#produkharga_view').mask('000.000.000.000.000.000', {
                reverse: true
            });
            $("#produkharga_view").on("keyup", function(event) {
                var biaya = $(this).cleanVal();
                console.log(biaya);
                $('#produkharga').val(biaya);
            });
            getTableAktif();
            setStatusProdukAktif();
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
                "timeOut": "500000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
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
                if ($("#produkid").val() == 'undefined') {
                    url = "<?= API_POST ?>Produk/create"
                } else {
                    url = "<?= API_POST ?>Produk/update"
                }
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
                            $('#modal_add').modal('hide');
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

        function clearForm() {
            $('#produkthumbnail_v').attr('src', src = "http://m-bangun.com/api/assets/icon/nofoto.jpg");
            $('#produkfoto1_v').attr('src', src = "http://m-bangun.com/api/assets/icon/nofoto.jpg");
            $('#produkfoto2_v').attr('src', src = "http://m-bangun.com/api/assets/icon/nofoto.jpg");
            $('#produkfoto3_v').attr('src', src = "http://m-bangun.com/api/assets/icon/nofoto.jpg");
            $('#produkfoto4_v').attr('src', src = "http://m-bangun.com/api/assets/icon/nofoto.jpg");
            $("#produkid").val('undefined');
            $("#submit").trigger("reset");
            $("#produkthumbnail").show().prop('required', true)
            $("#produkfoto1").show().prop('required', true)
            $("#produkfoto2").show().prop('required', true)
            $("#produkfoto3").show().prop('required', true)
            $("#produkfoto4").show().prop('required', true)
        }

        function tambah() {
            clearForm();
            $("#modal_add").modal({
                show: true,
                backdrop: 'static',
                keyboard: false
            });
        }
    </script>

</body>
<!-- akhir::Body -->

</html>