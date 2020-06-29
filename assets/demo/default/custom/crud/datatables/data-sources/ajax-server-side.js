var DatatablesDataSourceAjaxServer= {
    init:function() {
        $("#m_table_1").DataTable( {
            responsive:!0, searchDelay:500, processing:!0, serverSide:!0, ajax:"http://localhost/mitra.sheerkah/usaha/getTabel", columns:[ {
                data: "id"
            }
            , {
                data: "nama_usaha"
            }
            ]
        }
        )
    }
}

;
jQuery(document).ready(function() {
    DatatablesDataSourceAjaxServer.init()
}

);
