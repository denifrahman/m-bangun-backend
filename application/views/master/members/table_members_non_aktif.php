<table class="table m-table m-table--head-bg-brand" id="table_members_non_aktif">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>NIB</th>
            <th>Tanggal Daftar</th>
            <th>Jenis Akun</th>
            <th></th>
            <th>Opsi</th>
        </tr>
    </thead>
</table>
<script>
    function aktif(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Aktifkan akun ini",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Aktif"
        }).then(function(e) {
            if (e.value) {
                $.ajax({
                    method: 'get',
                    dataType: 'json',
                    url: '<?= API_GET ?>users/aktifUser/' + id,
                    success: function(data) {
                        console.log(data);
                        if (data.status === true) {
                            reload_table();
                            e.value && swal("Terhapus!", "Data di aktifkan.", "success");
                        } else {
                            e.value && swal("Gagal Terhapus!", "Data gagal di aktifkan.", "error");
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

    function getTableMemberTidakAktif() {
        $("#table_members_non_aktif").DataTable().destroy();
        table = $("#table_members_non_aktif").DataTable({
            "scrollCollapse": !0,
            "scrollX": true,
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
                    "status": '0'
                }
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": -1, //first column / numbering column
                "orderable": !1, //set not orderable
            }, ],

        });
    }
</script>