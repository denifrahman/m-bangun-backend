<html lang="id" >
   <!-- awal::Head -->
   <head>
      <?php $this->load->view('component/head') ?>
      <title>LOGIN </title>
      <link href="<?= base_url() ?>assets/demo/default/base/blue/login.css" rel="stylesheet" type="text/css" />

   </head>
   <!-- akhir::Head -->
   <!-- awal::Body -->
   <div id="particles-js"></div>
   <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default m-body"  >
      <!-- awal:: Page -->
      <div class="m-grid m-grid--hor m-grid--root m-page">
         <div class="m-grid__item m-grid__item--fluid m-grid m-grid--desktop m-grid--ver-desktop m-grid--hor-tablet-and-mobile m-login m-login--6" id="m_login">
            <div class="m-grid__item   m-grid__item--order-tablet-and-mobile-2  m-grid m-grid--hor m-login__aside m-grid_img" style="background-image: url(./assets/images/bg.jpg); background-repeat:no-repeat; background-size:cover;">
            <!-- <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver m-grid_logo"> -->
                  <!-- <div class="m-grid__item m-grid__item--middle"> -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 pull-right conte" style="text-align:right;margin-top:90px;opacity:1.0;z-index:2;">
                     <!-- <a href="#">
                       <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="images" width="80%" height="70px">
                     </a> -->
                     <!-- <h1 style="font-weight:lighter;margin-top:40px;color:#fff;">Central<strong>PRIVAT</strong></h1> -->
                   </div>
                 </div>
                  <!-- </div> -->
               <!-- </div> -->
            </div>
            <div id="particles-js" class="m-grid__item m-grid__item--fluid  m-grid__item--order-tablet-and-mobile-1  m-login__wrapper" style="background: #575962;" >
               <!--awal::Body-->
               <div class="m-login__body">
                  <!--awal::Signin-->
                  <div class="m-login__signin">
                     <div class="m-login__title">
                        <h3 class="m--font-primary"><b>Lupa Password</b></h3>
                     </div>
                     <!--awal::Portlet-->
                     <div class="m-portlet">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <!--awal::Form-->
                           <form class="m-form" method="post" action="<?= base_url('lupa_password/lupa_password') ?>" id="form-login">
                              <div class="m-portlet__body">
                                 <div class="form-group m-form__group row">
                                    <div class="col-12">
                                       <label for="example-text-input" class="control-label"><b>Email</b></label>
                                       <input type="text" class="form-control m-input" name="username">
                                    </div>
                                 </div>
                                
                                 <div class="m-login__action" style="margin-top:0px;">
                                    <div class="col-12">
                                      <button type="submit" id="m_login_signin_submit" class="btn btn-primary m-btn m-btn--pill btn-block"><b>Kirim Password</b></button>
                                    </div>
                                 </div>
                                 <div class="m-login__action" style="margin-top:-10px;">
                                    <div class="col-12">
                                      <a href="<?=base_url('login')?>" style="color:grey; text-align: center">Login</a>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           <!--akhir::Form-->
                        </div>
                     </div>
                     <!--akhir::Portlet-->
                  </div>
                  <!--akhir::Signin-->
               </div>
               <!--akhir::Body-->
            </div>
         </div>
      </div>
      <!-- akhir:: Page -->
      <!--awal::Page Scripts -->
      <?php $this->load->view('component/script') ?>
      <script src="<?= base_url() ?>assets/demo/default/custom/components/base/blockui.js" type="text/javascript"></script>
      <script>
       $(document).ready(function(){
          $('#form-login').submit(function() {
              mApp.blockPage({
                  overlayColor: "#000000",
                  type: "loader",
                  state: "success",
                  message: "Tunggu Sebentar..."
              }), setTimeout(function() {
                  mApp.unblockPage()
              }, 10e3);

               return true;
          });
        });
      </script>
      <!--akhir::Page Scripts -->
<!-- scripts -->
<script src="<?= base_url() ?>assets/particles.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>

<!-- stats.js -->
<script src="<?= base_url() ?>assets/js/lib/stats.js"></script>

   </body>
   <!-- akhir::Body -->
</html>
