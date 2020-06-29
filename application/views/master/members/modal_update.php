<!-- Modal -->
<div class="modal fade" id="modal_update" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="formMaster" method="">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title_modal_tambah_user">Update Data</h5>
                    <!-- <div class="col-offset-3">
                        <span class="m-switch m-switch--icon m-switch--info">
                            <label>
                                <input type="checkbox" name="produkaktif" id="produkaktif">
                                <input type="hidden" name="is_aktif" id="is_aktif" value="0">
                                <input type="hidden" name="produkid" id="produkid" value="0">
                                <span></span>
                            </label>
                        </span>
                    </div> -->
                </div>
                <div class="modal-body">
                    <form id="formUpdate">
                        <div class="row">
                            <div class="col-12">
                                <label for="example-text-input" class="control-label">Status</label>
                                <div class="input-group m-input-group id_100">
                                    <select required class="form-control" id="statusBid" style="width:100%" name="id_jenis_jadwal" require>
                                        <option value="0" disabled>Silahkan Pilih</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Card-->
                <div class="modal-footer">
                    <input type="hidden" name="bidid" id="bidid" value="0">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="updateStatus()">Simpan</button>
                </div>
            </div>
        </div>
</div>
<script>
    function updateStatus() {
        $.ajax({
            type: "POST",
            url: "<?= API_POST ?>Bid/updateStatus",
            data: JSON.stringify({
                "bidid": $("#bidid").val(),
                "bidstatusid": $("#statusBid").val()
            }),
            success: function(result) {
                if (result.status) {
                    getListBiddingReject();
                    getListBidding();
                    toastr.success("Status berhasil di perbarui");
                    $('#modal_update').modal('hide');
                } else {
                    toastr.error("Status berhasil di perbarui");
                }
            }
        });
    }

    function setStatusBid(id) {
        console.log(id);
        var data = [{
                "nama": 'New',
                'value': 8
            },
            {
                "nama": 'Negosiasi',
                'value': 16
            },
            {
                "nama": 'Progress',
                'value': 12
            },
            {
                "nama": 'Finish',
                'value': 13
            },
            {
                "nama": 'Kontrak',
                'value': 10
            },
            {
                "nama": 'Tolak/reject',
                'value': 9
            },
        ]
        $("#statusBid").append('<option disabled selected value="0">Silahkan pilih Status</option>');
        swal.close();
        var selected = "";
        $("#statusBid").html('');
        for (var i = 0; i < data.length; i++) {
            if (id == data[i].value) {
                selected = "selected";
            } else {
                selected = "";
            }
            $("#statusBid").append("<option value='" + data[i].value + "' " + selected + " data-nama='" + data[i].nama + "'>" + data[i].nama + "</option>")
        }
    }
</script>