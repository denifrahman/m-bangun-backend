<!-- Modal -->
<div class="modal fade" id="modal_detail_request" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="submit" method="POST">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_modal_tambah_user">Preview Data</h5>
                    <input type="hidden" name="produkid" id="produkid" value="0">
                    <input type="hidden" name="produkfile" id="produkfile">
                    <!-- <div class="col-offset-3">
                        <span class="m-switch m-switch--icon m-switch--info">
                            <label>
                                <input type="checkbox" id="produkaktif">
                                <input type="hidden" name="produkaktif" id="produkaktif" value="0">
                                <span></span>
                            </label>
                        </span>
                    </div> -->
                </div>
                <div class="modal-body">
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
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                <input name="produkbudget_view" id="produkbudget_view" type="text" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" disabled required>
                                                <input name="produkbudget" id="produkbudget" type="hidden" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Budget Publish
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                <input name="produkharga_view" id="produkharga_view" type="text" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" disabled required>
                                                <input name="produkharga" id="produkharga" type="hidden" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                            </div>
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
                                                    <select required class="form-control" id="select_1" style="width:100%" name="produkstatusid" require>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="example-text-input" class="control-label">Persentase</label>
                                                <div class="input-group m-input-group">
                                                    <input name="produkpersentase" id="produkpersentase" type="number" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                    <div class="input-group-prepend"><span class="input-group-text">%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body-separator">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Penyedia Jasa</label>
                                                <div class="input-group m-input-group">
                                                    <select required class="form-control" id="select_2" style="width:100%" name="produkkategoriid" require>
                                                        <option value="0" disabled selected>Pilih Kategori</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Sub Penyedia Jasa</label>
                                                <div class="input-group m-input-group">
                                                    <select required class="form-control" name="produkkategorisubid" id="select_3" style="width:100%" require>
                                                        <option value="0" disabled selected>Pilih Sub</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body-separator">
                                        </div>
                                        <div class="row" id="file_hidden">
                                            <div class="col-12">
                                                <label for="example-text-input" class="control-label">Pilihan File</label>
                                                <div class="input-group m-input-group">
                                                    <input type="file" id="nama_file" name="nama_file" accept="application/pdf" multiple required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="file_hapus">
                                            <div class="col-12">
                                                <label for="example-text-input" class="control-label" id="produkfile_nama"></label>
                                                <div class="input-group m-input-group">
                                                    <label onclick="hapusFile()">Hapus</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-success" id="btn_upload" type="submit">Simpan</button>
                </div>
            </div>
        </div>
</div>
<script>
    function setStatus(id) {
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

    function detailRequest(id) {
        $("#nama_file").val('');
        $('#produkharga_view').val('');
        $('#produkharga').val('');
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
                    $("#modal_detail_request").modal({
                        show: true,
                        backdrop: 'static',
                        keyboard: false
                    });
                    console.log(result.data.produkfile == null);
                    if (result.data.produkfile == null || result.data.produkfile == '') {
                        $("#file_hidden").show();
                        $("#nama_file").show().prop('required', true)
                        $("#file_hapus").hide();
                    } else {
                        $("#produkfile_nama").show();
                        $("#produkfile_nama").text(result.data.produkfile);
                        $("#file_hidden").hide();
                        $("#nama_file").hide().prop('required', false)
                        $("#file_hapus").show();
                    }
                    $("#produknama").text(result.data.produknama);
                    $("#produkfile").val('file_rab_' + result.data.produkid + '.pdf');
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
                    $("#produkbudget_view").val(format_number(result.data.produkbudget));
                    $("#produkbudget").val(result.data.produkbudget);
                    $("#produkwaktupengerjaan").val(result.data.produkwaktupengerjaan);
                    $("#produkpersentase").val(result.data.produkpersentase);
                    $("#produkharga").val(result.data.produkharga);
                    $("#produkharga_view").val(format_number(result.data.produkharga));
                    if (result.data.produkaktif == 1) {
                        $("#produkaktif").prop('checked', true);
                    } else {
                        $("#produkaktif").prop('checked', false);
                    }
                }
            }
        });
    }

    function hapusFile() {
        var namaFile = $("#produkfile").val();
        var produkid = $("#produkid").val();
        $.ajax({
            type: "GET",
            url: "<?= API_GET ?>/Produk/deleteFileByNama/" + namaFile + '/' + produkid,
            cache: false,
            dataType: "json",
            success: function(result) {
                if (result.status) {
                    $("#file_hidden").show();
                    $("#file_hapus").hide();
                    $("#nama_file").show().prop('required', true)
                    $("#produkfile_nama").hide();
                }
            }
        });
    }
</script>