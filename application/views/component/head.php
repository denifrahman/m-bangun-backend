<!--awal::Web font -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>
<!--akhir::Web font -->
<style>
span[data-href]{
    cursor:pointer;
}
</style>
<!--awal::Global Theme Styles -->
<link href="<?=base_url()?>assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url()?>assets/demo/default/base/default/bundle.css" rel="stylesheet" type="text/css" />
<!--akhir::Global Theme Styles -->
<link href="<?=base_url()?>assets/custom/css/custom_v1.css" rel="stylesheet" type="text/css" />

<!--awal::Page Vakhirors Styles -->
<link href="<?=base_url()?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<!--akhir::Page Vakhirors Styles -->

<!-- Judul Website -->
<title>m-Bangun</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta content='id' name='language'/>
<meta content='id' name='geo.country'/>
<meta content='Indonesia' name='geo.placename'/>