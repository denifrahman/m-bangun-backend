<table class="table m-table m-table--head-bg-brand" id="table_list_bidding_reject">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Project</th>
            <th>Nama</th>
            <th>Bid Deskripsi</th>
            <th>Waktu Pengerjaan</th>
            <th>Opsi</th>
        </tr>
    </thead>
</table>
<script>
    function getListBiddingReject() {
        $("#table_list_bidding_reject").DataTable().destroy();
        table = $("#table_list_bidding_reject").DataTable({
            "scrollCollapse": !0,
            // "scrollX": true,
            // "scrollY": "400px",
            "scrollCollapse": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?= API_GET ?>Bid/getBid",
                "type": "POST",
                "data": {
                    "status": 'Ditolak'
                }
            },
            rowGroup: {
                dataSrc: 1
            },
            "columnDefs": [{
                    targets: 1,
                    visible: false
                },
                {
                    targets: 1,
                    visible: false
                }
            ],

        });
    }
</script>