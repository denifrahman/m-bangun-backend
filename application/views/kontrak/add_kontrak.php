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
                        <div class="col-md-3">
                            <div class="m-portlet" style="width: 100%; height: 550px; overflow: scroll; padding-top:15px;  scrollbar-width: none; ">
                                <div class="m-portlet__body">
                                    <div class=" m--margin-top-10 m--hide">
                                    </div>
                                    <div class="row">
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                User Bid
                                            </strong>
                                        </div>
                                        <span style="width: 250px;">
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40 symbol-circle symbol-sm">
                                                    <center>
                                                        <span class="m-topbar__userpic">
                                                            <img src="http://niagatravel.com/api/api-m-bangun-jwt-token/assets/1.jpeg" class="m--img-rounded m--marginless" style="width:50px;height:50px;">
                                                        </span>
                                                    </center>
                                                </div>
                                                <div class="ml-3">
                                                    <div class="text-dark-75 font-weight-bold font-size-lg mb-0"><?= $data_user_bid->userbidnama ?></div><a href="#" class="text-muted font-weight-normal text-hover-primary"><?= date('d-m-Y', strtotime($data_user_bid->biddeal)) ?></a>
                                                    <p style="color:green;"><?= number_format($data_user_bid->bidprice) ?> | <?= $data_user_bid->statusnama ?></p>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                    <div class="m-portlet__body-separator">
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Nama Requets
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <p id="produknama">
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Owner
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <p id="usernamalengkap">
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Budget
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <h6 id="produkbudget" style="color: green;">
                                            </h6>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Lokasi
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <p id="produkalamat">
                                            </p>
                                            <div class="row col-12">
                                                <p id="nama_kecamatan">
                                                </p>
                                                <p id="nama_kabkota">
                                                </p>
                                                <p id="nama_propinsi">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Deskripsi
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <p id="produkdeskripsi">
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Waktu
                                            </strong>
                                        </div>
                                        <div class="col-12">
                                            <p id="produkwaktupengerjaan">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 row" style="margin-top: 10px;">
                                            <strong>
                                                Foto
                                            </strong>
                                        </div>
                                    </div>
                                    <div class="m-card-profile">
                                        <div class="row">
                                            <div class="m-card-profile__pic col-2.4">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img id="produkthumbnail" src="" style="width: 75px;height: 75px;">
                                                </div>
                                            </div>
                                            <div class="m-card-profile__pic col-2.4">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img id="produkfoto1" src="" style="width: 75px;height: 75px;">
                                                </div>
                                            </div>
                                            <div class="m-card-profile__pic col-2.4">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img id="produkfoto2" src="" style="width: 75px;height: 75px;">
                                                </div>
                                            </div>
                                            <div class="m-card-profile__pic col-2.4">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img id="produkfoto3" src="" style="width: 75px;height: 75px;">
                                                </div>
                                            </div>
                                            <div class="m-card-profile__pic col-2.4">
                                                <div class="m-card-profile__pic-wrapper">
                                                    <img id="produkfoto4" src="" style="width: 75px;height: 75px;">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="m-portlet m-portlet">
                                <div class="m-portlet__body">
                                    <div class="col-12">
                                        <div class="col-8">
                                            <h3 class="m-form__section">Kontrak :</h3>
                                        </div>
                                        <div class="row float-right">
                                            <div class="col-12">
                                                <a href="#" onclick="createKontrak()" class="btn btn-sm btn-primary">
                                                    <i class="la la-newspaper-o"></i>
                                                </a>
                                                <a href="#" onclick="createKontrak()" class="btn btn-sm btn-success">
                                                    <i class="la la-save"></i>
                                                </a>
                                                <a href="#" onclick="previewKontrak()" class="btn btn-sm btn-danger">
                                                    <i class="la la-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 100%; height: 458px;padding-top:55px;">
                                        <div class="col-12">
                                            <div class="m-portlet">
                                                <div class="m-portlet__body m-portlet__body--no-padding">
                                                    <div class="row" style="margin-bottom: 15px;">
                                                        <div class="col-md-12">
                                                            <div id="text_soal_summernote" name="text_soal_summernote"> </div>
                                                            <input type="hidden" name="userid_owner" id="userid_owner">
                                                            <input type="hidden" name="kontrakid" id="kontrakid">
                                                            <input type="hidden" name="userid_worker" id="userid_worker" value="<?= $data_user_bid->userid ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <!-- end load modal -->
    <!-- awal::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- akhir::Scroll Top -->
    <?php $this->load->view('component/script') ?>
    <script src="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
    <script>
        const id_member = "<?= $this->session->userdata('data_profil')->userid ?>"
        $(document).ready(function() {
            detailRequest(getParameterByName('id'));
            getKontrakByIdProduk(getParameterByName('id'));
            $('#text_soal_summernote').summernote({
                // callbacks: {
                //     onChange: function(contents, $editable) {
                //         $("#text_soal").val(encodeURIComponent(contents));
                //     }
                // },
                height: 300
            });
        });

        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        function createKontrak() {
            console.log($("#kontrakid").val());
            if ($("#text_soal_summernote").summernote('code') == null || $("#text_soal_summernote").summernote('code') == '') {
                toastr.error("Silahkan pilih kategori");
            } else {
                var url = '';
                if ($("#kontrakid").val() != 'null' || $("#kontrakid").val() == '') {
                    url = 'updateKontrak';
                } else {
                    url = 'createKontrak';
                }
                $.ajax({
                    type: "POST",
                    url: "<?= API_POST ?>Kontrak/" + url,
                    data: 'produkid=' + getParameterByName('id') + '&kontrakbody=' + encodeURIComponent($("#text_soal_summernote").summernote('code')) + '&userid_worker=' + $("#userid_worker").val() + '&userid_owner=' + $("#userid_owner").val() + '&kontrakid=' + $("#kontrakid").val(),
                    success: function(result) {
                        if (result.status) {
                            toastr.success("Kontrak berhasil di simpan");
                            $('#modal_add_invoice').modal('hide');
                            location.reload();
                        } else {
                            toastr.error("invoice gagal di tambahakan");
                        }
                    }
                });
            }
        }

        function loadTamplateKontrak() {

            $.ajax({
                type: "POST",
                url: "<?= API_POST ?>Kontrak/createKontrak",
                data: 'produkid=' + getParameterByName('id') + '&kontrakbody=' + encodeURIComponent($("#text_soal_summernote").summernote('code')) + '&userid_worker=' + $("#userid_worker").val() + '&userid_owner=' + $("#userid_owner").val() + '&kontrakid=' + $("#kontrakid").val(),
                success: function(result) {
                    if (result.status) {
                        toastr.success("Tamplate berhasil di terapkan");
                        $('#modal_add_invoice').modal('hide');
                        location.reload();
                    } else {
                        toastr.error("Tamplate gagal di tambahakan");
                    }
                }
            });

        }

        function getKontrakByIdProduk(id) {
            $.ajax({
                type: "GET",
                url: "<?= API_GET ?>/Kontrak/getKontrakByProdukId/" + id,
                cache: false,
                dataType: "json",
                success: function(result) {
                    // console.log(result.data == null);
                    if (result.status) {
                        if (result.data != null) {
                            swal.close();
                            $('#text_soal_summernote').summernote('code', result.data.kontrakbody);
                            $("#kontrakid").val(result.data.kontrakid);
                        } else {
                            $("#kontrakid").val('null');
                        }
                    }
                }
            });
        }

        function detailRequest(id) {
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
            $.ajax({
                type: "GET",
                url: "<?= API_GET ?>/Produk/getById/" + id,
                cache: false,
                dataType: "json",
                success: function(result) {
                    console.log(result);
                    if (result.status) {
                        swal.close();
                        $("#userid_owner").val(result.data.userid);
                        $("#produkid").val(id);
                        $("#produknama").text(result.data.produknama);
                        $("#produkthumbnail").attr("src", result.data.produkthumbnail);
                        $("#produkfoto1").attr("src", result.data.produkfoto1);
                        $("#produkfoto2").attr("src", result.data.produkfoto2);
                        $("#produkfoto3").attr("src", result.data.produkfoto3);
                        $("#produkfoto4").attr("src", result.data.produkfoto4);
                        $("#produkdeskripsi").text(result.data.produkdeskripsi);
                        $("#nama_propinsi").text(result.data.nama_propinsi);
                        $("#nama_kabkota").text(result.data.nama_kabkota + ', ');
                        $("#nama_kecamatan").text(result.data.nama_kecamatan + ', ');
                        $("#usernamalengkap").text(result.data.usernamalengkap);
                        $("#produkalamat").text(result.data.produkalamat);
                        $("#produkwaktupengerjaan").text(result.data.produkwaktupengerjaan);
                        $("#produkid").val(result.data.produkid);
                        $("#produkbudget").text('Rp ' + format_number(result.data.produkbudget));
                        $("#produkwaktupengerjaan").val(result.data.produkwaktupengerjaan);
                        if (result.data.produkaktif == 1) {
                            $("#produkaktif").prop('checked', true);
                        } else {
                            $("#produkaktif").prop('checked', false);
                        }
                    }
                }
            });
        }

        function previewKontrak() {
            window.open('<?= base_url() ?>kontrak/pdf?id=' + getParameterByName('id'), '_blank');
        }
    </script>

</body>
<!-- akhir::Body -->

</html>