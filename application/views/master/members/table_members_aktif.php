<table class="table m-table m-table--head-bg-brand" id="table_members_new">
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
    function getTableMemberAktif() {
        $("#table_members_new").DataTable().destroy();
        table = $("#table_members_new").DataTable({
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
                    "status": '1'
                }
            },
            "columnDefs": [{
                "targets": -1, //first column / numbering column
                "orderable": !1, //set not orderable
            }, ],

        });
    }
</script>