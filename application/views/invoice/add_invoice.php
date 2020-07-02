<!-- Modal -->
<div class="modal fade" id="modal_add_invoice" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="formMaster" method="">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_modal_tambah_user">Invoice Baru</h5>
                </div>
                <div class="modal-body">
                    <form id="formUpdate">
                        <div class="row">
                            <div class="col-6">
                                <label for="example-text-input" class="control-label">Status</label>
                                <div class="input-group m-input-group id_100">
                                    <select required class="form-control" id="statusInvoice" style="width:100%" require>
                                        <option value="0" disabled>Silahkan Pilih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="example-text-input" class="control-label">Kepada</label>
                                <div class="input-group m-input-group id_100">
                                    <select required class="form-control" id="userid" style="width:100%" name="id_jenis_jadwal" require>
                                        <option value="0" disabled>Silahkan Pilih</option>
                                        <option value="<?= $data_user_bid->userid ?>">Pekerja</option>
                                        <option id="userid_owner">Owner</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row" style="margin-top: 15px;">
                            <div class="col-12">
                                <label for="example-text-input" class="control-label">Biaya</label>
                                <div class="input-group m-input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                    <input name="biaya_view" id="biaya_view" type="text" class="form-control m-input" style="text-align:right; font-weight:bold; font-size: 15px" required>
                                    <input id="biaya" type="hidden" class="form-control m-input number" style="text-align:right;">
                                    <input id="produkid" type="hidden" class="form-control m-input number" style="text-align:right;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row" style="margin-top: 15px;">
                            <div class="col-md-12">
                                <label for="example-text-input" class="control-label">Termin</label>
                                <div class="input-group m-input-group id_100">
                                    <input id="invoiceTermin" class="form-control" name="w3review" style="width: 100%;" required></input>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <div class="col-md-12">
                                <label for="example-text-input" class="control-label">Deskripsi</label>
                                <div class="input-group m-input-group id_100">
                                    <textarea class="form-control" id="invoiceDeskripsi" name="w3review" style="width: 100%;" rows="4" required></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Card-->
                <div class="modal-footer">
                    <input type="hidden" name="bidid" id="bidid" value="0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="simpanInvoice()">Simpan</button>
                </div>
            </div>
        </div>
</div>
<script>
    function simpanInvoice() {

        if (!$("#formMaster").valid()) {
            toastr.error("Lengkapi data");
        } else {
            $.ajax({
                type: "POST",
                url: "<?= API_POST ?>Invoice/createInvoice",
                data: JSON.stringify({
                    "userid": $("#userid").val(),
                    "invoice_deskripsi": $("#invoiceDeskripsi").val(),
                    "invoice_termin": $("#invoiceTermin").val(),
                    "invoice_status": $("#statusInvoice").val(),
                    "invoice_nominal": $("#biaya").val(),
                    "produkid": $("#produkid").val(),
                }),
                success: function(result) {
                    if (result.status) {
                        toastr.success("Invoice berhasil di tambahkan");
                        $('#modal_add_invoice').modal('hide');
                        location.reload();
                    } else {
                        toastr.error("invoice gagal di tambahakan");
                    }
                }
            });
        }
    }

    function setStatusInvoice(id) {
        console.log(id);
        var data = [{
                "nama": 'Pending',
                'value': 'Pending'
            },
            {
                "nama": 'Lunas',
                'value': "Lunas"
            },
        ]
        $("#statusInvoice").append('<option disabled selected value="0">Silahkan pilih Status</option>');
        swal.close();
        var selected = "";
        $("#statusInvoice").html('');
        for (var i = 0; i < data.length; i++) {
            if (id == data[i].value) {
                selected = "selected";
            } else {
                selected = "";
            }
            $("#statusInvoice").append("<option value='" + data[i].value + "' " + selected + " data-nama='" + data[i].nama + "'>" + data[i].nama + "</option>")
        }
    }
</script>