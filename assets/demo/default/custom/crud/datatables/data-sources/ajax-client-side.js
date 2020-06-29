var DatatablesDataSourceAjaxClient= {
    init:function() {
        $("#m_table_1").DataTable( {
            responsive:!0, ajax: {
                url:"http://localhost/mitra.sheerkah/usaha/getTabel", type:"POST", data: {
                    // pagination: {
                    //     perpage: 5
                    // }
                }
            }
            , columns:[ {
                data: "nama_usaha"
            }
            , {
                data: "alamat_usaha"
            }
            ]
        }
        )
    }
}

;
jQuery(document).ready(function() {
    DatatablesDataSourceAjaxClient.init()
}

);
