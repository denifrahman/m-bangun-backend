<table class="table m-table m-table--head-bg-light dataTables_wrapper dt-bootstrap4 no-footer" id="table_list_bidding">
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

<?php $this->load->view('request/modal_detail_request') ?>

<script>
    function getListBidding() {
        setTimeout(function() {
            $("#table_list_bidding").DataTable().destroy();
            table = $("#table_list_bidding").DataTable({
                "scrollCollapse": !0,
                "scrollX": true,
                "scrollCollapse": true,
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?= API_GET ?>Bid/getBid",
                    "type": "POST",
                    "data": {
                        "status": 'New'
                    }
                },
                "drawCallback": function() {
                    $(this.api().table().header()).hide();
                },
                //Set column definition initialisation properties.
                rowGroup: {
                    dataSrc: 1
                },
                "columnDefs": [{
                        targets: 1,
                        visible: false
                    },
                    {
                        targets: 0,
                        visible: false
                    },
                    {
                        targets: 1,
                        visible: false
                    }
                ],
            });
        }, 150);

    }
</script>