<table class="table m-table m-table--head-bg-brand" id="table_members_aktivasi">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Jenis Akun</th>
            <th></th>
            <th>Opsi</th>
        </tr>
    </thead>
</table>
<script>
    function getTableMemberAktivasiAkun() {
        $("#table_members_aktivasi").DataTable().destroy();
        table = $("#table_members_aktivasi").DataTable({
            "scrollCollapse": !0,
            // "scrollX": true,
            // "scrollY": "400px",
            "scrollCollapse": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?= API_GET ?>users/getMemberAktif",
                "type": "POST",
                "data": {
                    "status": '1',
                    "aktivasi": '0'
                }
            },
            "columnDefs": [{
                "targets": -1, //first column / numbering column
                "orderable": !1, //set not orderable
            }, ],

        });
    }
    function premium(id) {
            swal({
                title: "Apakah anda yakin?",
                text: "Aktifkan akun premium user ini",
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Aktifkan"
            }).then(function(e) {
                if (e.value) {
                    $.ajax({
                        method: 'get',
                        dataType: 'json',
                        url: '<?= API_GET ?>users/aktifPremiumUser/' + id,
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