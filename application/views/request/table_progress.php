<table class="table m-table m-table--head-bg-brand" id="table_request_progress">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Request</th>
            <th>Alamat</th>
            <th>Waktu</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
    </thead>
</table>
<script>
    function getNewRequestTableProgres() {
        setTimeout(function() {
            $("#table_request_progress").DataTable().destroy();
            table = $("#table_request_progress").DataTable({
                "scrollCollapse": !0,
                "scrollX": true,
                // "scrollY": "400px",
                "scrollCollapse": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?= API_GET ?>Produk/getRequest",
                    "type": "POST",
                    "data": {
                        "status": 'Progress',
                        "aktif": '1'
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