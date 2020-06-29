<script type="text/javascript" >var baseURL = "<?=base_url();?>";</script>
<!--awal::Global Theme Bundle -->
<script src="<?=base_url()?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--akhir::Global Theme Bundle -->

<!--awal::Page Vakhirors -->
<script src="<?=base_url()?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--akhir::Page Vakhirors -->

<!--awal::Page Scripts -->
<script src="<?=base_url()?>assets/app/js/dashboard.js" type="text/javascript"></script>
<!--akhir::Page Scripts -->
<script src="<?=base_url()?>assets/mask-plugin/jquery.mask.min.js" type="text/javascript"></script>
<script src="<?=base_URL()?>assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/custom/today.js" type="text/javascript"></script>
<script src="https://mozilla.github.io/pdf.js/build/pdf.js" type="text/javascript"></script>

<!--awal::Page Scripts -->
<script>
$( document ).ready(function() {
  var aTags = document.querySelectorAll('span[data-href]');

  for(var i = 0; i < aTags.length; i++){
      var aTag = aTags[i];
      aTag.addEventListener('click', function(e){
          var ele = e.target;
          window.location.replace(ele.getAttribute('data-href'));
      });
  }
});

function format_number(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}
</script>
<!--akhir::Page Scripts -->

<?php if ($this->session->flashdata('perintah_benar')) {?>
  <script>
  toastr.success("<?=$this->session->flashdata('perintah_benar')?>");
</script>
<?php }
if ($this->session->flashdata('perintah_salah')) {?>
  <script>
  toastr.error("<?=$this->session->flashdata('perintah_salah')?>");
</script>
<?php }?>
