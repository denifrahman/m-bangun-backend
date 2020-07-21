<!-- Modal -->
<div class="modal fade" id="modal_add" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="submit" method="POST">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_modal_tambah_user">Preview Data</h5>
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
                                                Nama Produk
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <input name="produknama" id="produknama" type="text" class="form-control m-input" style="text-align:left; font-weight:normal; font-size: 15px" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                User
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <input name="usernamalengkap_view" id="usernamalengkap" value="<?= $this->session->userdata('data_profil')->usernamalengkap ?>" type="text" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" disabled required>
                                                <input name="userid" id="userid" type="hidden" value="<?= $this->session->userdata('data_profil')->userid ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="produkkategoriid" type="hidden" value="<?= $this->session->userdata('data_profil')->produkkategoriid ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="produkkategorisubid" type="hidden" value="<?= $this->session->userdata('data_profil')->produkkategorisubid ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="id_kecamatan" type="hidden" value="<?= $this->session->userdata('data_profil')->id_kecamatan ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="id_kabkota" type="hidden" value="<?= $this->session->userdata('data_profil')->id_kabkota ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="id_propinsi" type="hidden" value="<?= $this->session->userdata('data_profil')->id_propinsi ?>" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="produkid" id="produkid" type="hidden" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Harga
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                <input name="produkharga_view" id="produkharga_view" type="text" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                <input name="produkharga" id="produkharga" type="hidden" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Produk Satuan
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <input name="produksatuan" id="produksatuan" type="text" class="form-control m-input" style="text-align:left; font-weight:normal; font-size: 15px" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row" style='border-bottom:1px solid #8080801f;margin-bottom:10px'>
                                        <div class="col-12 row" style="margin-bottom: 10px;">
                                            <strong>
                                                Deskripsi
                                            </strong>
                                        </div>
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            <div class="input-group m-input-group">
                                                <textarea name="produkdeskripsi" id="produkdeskripsi" type="text" class="form-control m-input" style="text-align:left; font-weight:normal; font-size: 15px" required></textarea>
                                            </div>
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
                                                        <img id="produkthumbnail_v" src="http://m-bangun.com/api/assets/icon/nofoto.jpg" style="width: 100px;height: 100px;">
                                                    </div>
                                                    <div class="input-group m-input-group">
                                                        <input type="file" id="produkthumbnail" name="berkas[]" accept="image/png, image/jpeg" multiple required />
                                                        <input type="hidden" id="produkthumbnail_edit" name="produkthumbnail_edit" />
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto1_v" src="http://m-bangun.com/api/assets/icon/nofoto.jpg" style="width: 100px;height: 100px;">
                                                    </div>
                                                    <div class="input-group m-input-group">
                                                        <input type="file" id="produkfoto1" name="berkas[]" accept="image/png, image/jpeg" multiple required />
                                                        <input type="hidden" id="produkfoto1_edit" name="produkfoto1_edit" />
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto2_v" src="http://m-bangun.com/api/assets/icon/nofoto.jpg" style="width: 100px;height: 100px;">
                                                    </div>
                                                    <div class="input-group m-input-group">
                                                        <input type="file" id="produkfoto2" name="berkas[]" accept="image/png, image/jpeg" multiple required />
                                                        <input type="hidden" id="produkfoto2_edit" name="produkfoto2_edit" />
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto3_v" src="http://m-bangun.com/api/assets/icon/nofoto.jpg" style="width: 100px;height: 100px;">
                                                    </div>
                                                    <div class="input-group m-input-group">
                                                        <input type="file" id="produkfoto3" name="berkas[]" accept="image/png, image/jpeg" multiple required />
                                                        <input type="hidden" id="produkfoto3_edit" name="produkfoto3_edit" />
                                                    </div>
                                                </div>
                                                <div class="m-card-profile__pic col-2.4">
                                                    <div class="m-card-profile__pic-wrapper">
                                                        <img id="produkfoto4_v" src="http://m-bangun.com/api/assets/icon/nofoto.jpg" style="width: 100px;height: 100px;">
                                                    </div>
                                                    <div class="input-group m-input-group">
                                                        <input type="file" id="produkfoto4" name="berkas[]" accept="image/png, image/jpeg" multiple required />
                                                        <input type="hidden" id="produkfoto4_edit" name="produkfoto4_edit" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__body-separator">
                                    </div>
                                    <form id="formUpdate">
                                        <div class=" row">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="m-form__section">Ketersidian:</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="m-switch m-switch--icon m-switch--success">
                                                    <label>
                                                        <input id="status_view" type="checkbox" checked>
                                                        <input type="hidden" name="produkaktif" id="produkaktif" value="1">
                                                        <span></span>
                                                    </label>
                                                </span>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <label for="example-text-input" class="control-label">Persentase</label>
                                                <div class="input-group m-input-group">
                                                    <input name="produkpersentase" id="produkpersentase" type="number" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                                    <div class="input-group-prepend"><span class="input-group-text">%</span></div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="m-portlet__body-separator">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Penyedia Jasa</label>
                                                <div class="input-group m-input-group">
                                                    <select required class="form-control" id="select_2" style="width:100%" name="produkkategoriid" required>
                                                        <option value="0" disabled selected>Pilih Kategori</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="example-text-input" class="control-label">Sub Penyedia Jasa</label>
                                                <div class="input-group m-input-group">
                                                    <select required class="form-control" name="produkkategorisubid" id="select_3" style="width:100%" required>
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
                                                    <input type="file" id="nama_file" name="nama_file" accept="application/jpeg/jpg/png" multiple />
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
                                        </div> -->
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
    // 
    function setStatusProdukAktif(id) {
        var data = [{
                "nama": 'Aktif',
                'value': 1
            },
            {
                "nama": 'Tidak Aktif',
                'value': 0
            },
        ]
        $("#produkaktif").append('<option disabled selected value="0">Silahkan pilih Status</option>');
        swal.close();
        var selected = "";
        $("#produkaktif").html('');
        for (var i = 0; i < data.length; i++) {
            if (id == data[i].value) {
                selected = "selected";
            } else {
                selected = "";
            }
            $("#produkaktif").append("<option value='" + data[i].value + "' " + selected + " data-nama='" + data[i].nama + "'>" + data[i].nama + "</option>")
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
        }, {
            "nama": 'Interior',
            'value': 7
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

    function getProdukById(id) {
        $("#produkid").val('undefined');
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
                    $("#modal_add").modal({
                        show: true,
                        backdrop: 'static',
                        keyboard: false
                    });
                    console.log(result.data.produkfile == null);

                    $("#produknama").val(result.data.produknama);
                    $("#produkthumbnail_edit").val(result.data.produkthumbnail);
                    $("#produkfoto1_edit").val(result.data.produkfoto1);
                    $("#produkfoto2_edit").val(result.data.produkfoto2);
                    $("#produkfoto3_edit").val(result.data.produkfoto3);
                    $("#produkfoto4_edit").val(result.data.produkfoto4);
                    $("#produkthumbnail").show().prop('required', false)
                    $("#produkfoto1").show().prop('required', false)
                    $("#produkfoto2").show().prop('required', false)
                    $("#produkfoto3").show().prop('required', false)
                    $("#produkfoto4").show().prop('required', false)
                    $("#produkthumbnail_v").attr("src", result.data.produkthumbnail);
                    $("#produkfoto1_v").attr("src", result.data.produkfoto1);
                    $("#produkfoto2_v").attr("src", result.data.produkfoto2);
                    $("#produkfoto3_v").attr("src", result.data.produkfoto3);
                    $("#produkfoto4_v").attr("src", result.data.produkfoto4);
                    $("#produkdeskripsi").val(result.data.produkdeskripsi);
                    $("#usernamalengkap").text(result.data.usernamalengkap);
                    setStatusProdukAktif(result.data.produkstatusid);
                    $("#produkid").val(result.data.produkid);
                    $("#produkharga").val(result.data.produkharga);
                    $("#produksatuan").val(result.data.produksatuan);
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
                    $("#nama_file").show().prop('required', false)
                    $("#produkfile_nama").hide();
                }
            }
        });
    }
</script>