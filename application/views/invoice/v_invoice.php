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
                        <div class="col-md-4">
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
                        <div class="col-sm-8">
                            <div class="m-portlet m-portlet">
                                <div class="m-portlet__body">
                                    <div class="row col-12">
                                        <div class="col-10">
                                            <h3 class="m-form__section">Invoice :</h3>
                                        </div>
                                        <div class="col-2">
                                            <a href="#" onclick="addInvoice()" class="btn btn-success font-weight-bold btn-pill">Invoice Baru</a>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body-separator" style="margin-bottom: 10px;">
                                    </div>
                                    <div style="width: 100%; height: 410px; overflow: scroll; background: #f2f3f8; padding-top:15px;">
                                        <div class="col-12">
                                            <div class="m-portlet">
                                                <div class="m-portlet__body m-portlet__body--no-padding">
                                                    <?php foreach ($invoice as $item) { ?>
                                                        <div class="m-invoice-1">
                                                            <div class="m-invoice__wrapper">
                                                                <div class="m-invoice__head" style="background: black;">
                                                                    <div class="m-invoice__container m-invoice__container--centered">
                                                                        <div class="m-invoice__logo">
                                                                            <a href="#">
                                                                                <div class="row" style="color: white;">
                                                                                    <h1>Tagihan</h1>
                                                                                    <?php if($item->userid == $data_user_bid->userid){?>
                                                                                        <p>#biddman</p>
                                                                                        <?php } else {?>    
                                                                                            <p>#owner</p>
                                                                                        <?php }?>
                                                                                </div>
                                                                            </a>
                                                                            <a href="#">
                                                                                <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="images" width="60px" height="60px">
                                                                            </a>
                                                                        </div>
                                                                        <span class="m-invoice__desc">
                                                                            <?php if ($item->invoice_status == 'Pending') { ?>
                                                                                <span style="color:red; font-weight:bold"><?= $item->invoice_status ?></span>
                                                                            <?php } else { ?>
                                                                                <span style="color:green; font-weight:bold"><?= $item->invoice_status ?></span>
                                                                            <?php } ?>
                                                                            <span><?= $item->invoice_deskripsi ?></span>
                                                                        </span>
                                                                        <div class="m-invoice__items">
                                                                            <div class="m-invoice__item">
                                                                                <span class="m-invoice__subtitle">Tanggal</span>
                                                                                <span class="m-invoice__price" id="jumlah" ><?= date('d-m-Y', strtotime($item->invoicecreate)) ?></span>
                                                                            </div>
                                                                            <div class="m-invoice__item">
                                                                                <span class="m-invoice__subtitle">TOTAL TAGIHAN</span>
                                                                                <span class="m-invoice__price" id="jumlah" style="font-size: 18px; font-weight: bold; color:#c76262;">Rp <?= number_format($item->invoice_nominal) ?></span>
                                                                            </div>
                                                                            <div class="m-invoice__item">
                                                                                <span class="m-invoice__subtitle"><?= $item->invoice_tgl_bayar == null ? '------------------' : date('d-m-Y', strtotime($item->invoice_tgl_bayar)) ?></span>
                                                                                <span class="m-switch m-switch--icon m-switch--success">
                                                                                    <label>
                                                                                        <input type="checkbox" <?= $item->invoice_status == 'Lunas' ? 'checked' : '' ?> id="status_view" value="<?= $item->invoice_status ?>">
                                                                                        <input type="hidden" name="status" id="status" value="<?= $item->invoiceid ?>">
                                                                                        <span></span>
                                                                                    </label>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="border-bottom:3px dashed #00f;">
                                                        </div>
                                                    <?php } ?>
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
    <?php $this->load->view('invoice/add_invoice') ?>
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
            $("#status_view").change(function() {
                console.log($("#status").val());
                var statusInvoice = '';
                if ($("#status_view").val() == 'Pending') {
                    statusInvoice = 'Lunas';
                    $("#status_view").val('Lunas');
                } else {
                    statusInvoice = 'Pending';
                    $("#status_view").val('Pending');
                }
                var today = new Date();
                $.ajax({
                    type: "POST",
                    url: "<?= API_POST ?>Invoice/updateInvoice",
                    data: JSON.stringify({
                        "invoiceid": $("#status").val(),
                        "invoice_status": statusInvoice,
                        "invoice_tgl_bayar": today,
                    }),
                    success: function(result) {
                        if (result.status) {
                            toastr.success("Status berhasil di perbarui");
                            $('#modal_add_invoice').modal('hide');
                        } else {
                            toastr.error("Status berhasil di perbarui");
                        }
                    }
                });
            });
            $('#biaya_view').mask('000.000.000.000.000.000', {
                reverse: true
            });
            $("#biaya_view").on("keyup", function(event) {
                var biaya = $(this).cleanVal();
                $('#biaya').val(biaya);
            });
            detailRequest(getParameterByName('id'));
            setStatusInvoice();
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

        function addInvoice() {
            $("#modal_add_invoice").modal({
                show: true,
                backdrop: 'static',
                keyboard: false
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
    </script>

</body>
<!-- akhir::Body -->

</html>