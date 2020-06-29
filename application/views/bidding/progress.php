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
                            <div class="m-portlet m-portlet--full-height  ">
                                <div class="m-portlet__body">
                                    <div class=" m--margin-top-10 m--hide">
                                    </div>
                                    <div class=" row" style='border-bottom:2px solid #ccc;margin-bottom:10px'>
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="m-form__section">Detail Data :</h3>
                                            </div>
                                        </div>
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
                                                Nama User
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
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="m-portlet m-portlet--full-height  ">
                                <div class="m-portlet__body">
                                    <div class=" row">
                                        <div class="row">
                                            <div class="col-12">
                                                <h3 class="m-form__section">Detail Foto :</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-card-profile">
                                            <div class="row">
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkthumbnail" src="" style="width: 100px;height: 100px;">
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto1" src="" style="width: 100px;height: 100px;">
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto2" src="" style="width: 100px;height: 100px;">
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto3" src="" style="width: 100px;height: 100px;">
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto4" src="" style="width: 100px;height: 100px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body-separator">
                                    </div>
                                    <form id="formUpdate">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Status</label>
                                                <div class="input-group m-input-group id_100">
                                                    <select disabled required class="form-control" id="select_1" style="width:100%" name="id_jenis_jadwal" require>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body-separator">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Kategori</label>
                                                <div class="input-group m-input-group">
                                                    <select required disabled class="form-control" id="select_2" style="width:100%" name="id_jenis_jadwal" require>
                                                        <option value="0" disabled selected>Pilih Kategori</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Kategori</label>
                                                <div class="input-group m-input-group">
                                                    <select disabled required class="form-control" id="select_3" style="width:100%" require>
                                                        <option value="0" disabled selected>Pilih Sub</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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
            detailRequest(getParameterByName('id'));
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

        function setStatus(id) {
            console.log('test');
            var data = [{
                    "nama": 'New',
                    'value': 1
                }, {
                    "nama": 'Review',
                    'value': 2
                },
                {
                    "nama": 'Publish',
                    'value': 3
                },
                {
                    "nama": 'Negosiasi',
                    'value': 4
                },
                {
                    "nama": 'Progress',
                    'value': 5
                },
                {
                    "nama": 'Finish',
                    'value': 6
                },
                {
                    "nama": 'Kontrak',
                    'value': 11
                },
                {
                    "nama": 'Tolak/reject',
                    'value': 15
                },
            ]
            $("#select_1").append('<option disabled selected value="0">Silahkan pilih Status</option>');
            swal.close();
            var selected = "";
            $("#select_1").html('');
            for (var i = 0; i < data.length; i++) {
                if (id == data[i].value) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#select_1").append("<option value='" + data[i].value + "' " + selected + " data-nama='" + data[i].nama + "'>" + data[i].nama + "</option>")
            }
        }

        function setSubKategori(id, idSelect) {
            $.ajax({
                type: "GET",
                url: "<?= API_GET ?>/SubKategori/getAllByIdKategori/" + id,
                cache: false,
                dataType: "json",
                success: function(result) {
                    if (result.status == true) {
                        const data = result.data;
                        console.log(data);
                        var selected = "";
                        $("#select_3").html('');
                        for (var i = 0; i < data.length; i++) {
                            if (idSelect == data[i].produkkategorisubid) {
                                selected = "selected";
                            } else {
                                selected = "";
                            }
                            $("#select_3").append("<option value='" + data[i].produkkategorisubid + "' " + selected + " data-nama='" + data[i].produkkategorisubnama + "'>" + data[i].produkkategorisubnama + "</option>")
                        }
                    }
                }
            });
        }

        function setKategori(id) {
            $("#select_2").html('');
            $("#select_2").append('<option disabled selected value="0">Silahkan pilih kategori</option>');
            var data = [{
                "nama": 'Kontraktor',
                'value': 1
            }, {
                "nama": 'Jasa',
                'value': 2
            }]
            for (var i = 0; i < data.length; i++) {
                if (id == data[i].value) {
                    selected = "selected";
                } else {
                    selected = "";
                }
                $("#select_2").append("<option value='" + data[i].value + "' " + selected + " data-nama='" + data[i].nama + "'>" + data[i].nama + "</option>")
            }
        }

        function updateStatus() {
            if (($("#select_2").val() == null || $("#select_2").val() == '') && $("#select_3").val() == null || $("#select_3").val() == '') {
                toastr.error("Silahkan pilih kategori");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?= API_POST ?>Produk/updateStatus",
                    data: JSON.stringify({
                        "produkid": $("#produkid").val(),
                        "produkstatusid": $("#select_1").val(),
                        "produkkategorisubid": $("#select_3").val(),
                        "produkkategoriid": $("#select_2").val()
                    }),
                    success: function(result) {
                        if (result.status) {
                            toastr.success("Status berhasil di perbarui");
                            $('#modal_detail_request').modal('hide');
                        } else {
                            toastr.error("Status berhasil di perbarui");
                        }
                    }
                });
            }
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
                    if (result.status) {
                        swal.close();
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
                        setStatus(result.data.produkstatusid);
                        setKategori(result.data.produkkategoriid);
                        setSubKategori(result.data.produkkategoriid, result.data.produkkategorisubid);
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