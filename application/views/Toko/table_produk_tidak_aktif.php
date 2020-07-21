<table class="table m-table m-table--head-bg-brand" id="table_produk_tidak_aktif">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Opsi</th>
        </tr>
    </thead>
</table>
<script>
    function getTableTidakAktif() {
        setTimeout(function() {
            $("#table_produk_tidak_aktif").DataTable().destroy();
            table = $("#table_produk_tidak_aktif").DataTable({
                // "scrollCollapse": !0,
                // "scrollX": true,
                // "scrollY": "400px",
                "scrollCollapse": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?= API_GET ?>Produk/get_all_by_userid",
                    "type": "POST",
                    "data": {
                        "aktif": '0',
                        "userid":'<?= $this->session->userdata('data_profil')->userid ?>'
                    }
                },
                //Set column definition initialisation properties.
                "columnDefs": [{
                    "targets": -1, //first column / numbering column
                    "orderable": !1, //set not orderable
                }, ],

            });
        }, 150);

    }
</script>