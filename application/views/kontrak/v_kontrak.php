<?php $this->load->view('component/script') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: "GET",
            url: "print?id=" + getParameterByName('id'),
            cache: false,
            success: function(json) {
                if (json) {
                    Popup(json);
                    async :false
                } else {
                    notifikasi("danger", "Gagal Print Kepanitraan Klinik");
                }
            }
        });
        console.log('test');
    });

    function Popup(data) {
        var mywindow = window.open('' + '_blank', "toolbar=0,location=0,menubar=0");
        mywindow.document.write('<html><head><title>print invoice Athari logistik</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        setTimeout(function() {
            mywindow.print();
            // mywindow.close();
        }, 3000);


        return true;
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
</script>