<?php header('Access-Control-Allow-Origin: *'); ?>
<div class="m-container m-container--fluid m-container--full-height">
   <div class="m-stack m-stack--ver m-stack--desktop">
      <!-- AWAL: Brand -->
      <div class="m-stack__item m-brand  m-brand--skin-dark ">
         <div class="m-stack m-stack--ver m-stack--general">
            <div class="m-stack__item m-stack__item--middle m-brand__logo">
               <a href="" class="m-brand__logo-wrapper row" title="Stand">
                  <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="images" width="30px">
                  <Strong style="color:black; font-size:13px;">m-Bangun</Strong>
               </a>
            </div>
            <div class="m-stack__item m-stack__item--middle m-brand__tools">
               <!-- AWAL: Left Aside Minimize Toggle -->
               <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                  <span></span>
               </a>
               <!-- AKHIR -->
               <!-- AWAL: Responsive Aside Left Menu Toggler -->
               <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                  <span></span>
               </a>
               <!-- AKHIR -->
               <!-- AWAL: Responsive Header Menu Toggler -->
               <!-- <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
               <span></span>
               </a> -->
               <!-- AKHIR -->
               <!-- AWAL: Topbar Toggler -->
               <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                  <i class="flaticon-more"></i>
               </a>
               <!-- AWAL: Topbar Toggler -->
            </div>
         </div>
      </div>
      <!-- AKHIR: Brand -->
      <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
         <!-- AWAL: Topbar -->
         <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
            <div class="m-stack__item m-topbar__nav-wrapper">
               <ul class="m-topbar__nav m-nav m-nav--inline">
                  <li class="m-nav__item topbar_notifications_events">
                     <h5 style="margin-top: 25px;">Halo, <b><?= $this->session->userdata('data_profil')->usernama ?></b>
                     </h5>
                  </li>
                  <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                     <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic">
                           <?php if ($this->session->userdata('data_profil')->userfoto != '') { ?>
                              <img src="<?= $this->session->userdata('data_profil')->userfoto ?>" class="m--img-rounded m--marginless" alt="" />
                           <?php } else { ?>
                              <img src="<?= base_url() ?>assets/images/user.jpg" class="m--img-rounded m--marginless" alt="" />
                           <?php } ?>
                        </span>
                     </a>
                     <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                           <div class="m-dropdown__header m--align-center" style="background: url(./assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                              <div class="m-card-user m-card-user--skin-dark">
                                 <div class="m-card-user__pic">
                                    <?php if ($this->session->userdata('data_profil')->userfoto != '') { ?>
                                       <img src="<?= base_url() ?>assets/img/profile/<?= $this->session->userdata('data_profil')->userfoto ?>" class="m--img-rounded m--marginless" alt="" />
                                    <?php } else { ?>
                                       <img src="<?= base_url() ?>assets/images/user.jpg" class="m--img-rounded m--marginless" alt="" />
                                    <?php } ?>
                                    <!--
                                       <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                                       -->
                                 </div>
                                 <div class="m-card-user__details">
                                    <span class="m-card-user__name m--font-weight-500"><?= $this->session->userdata('data_profil')->usernama ?></span>
                                    <a href="" class="m-card-user__email m--font-weight-300 m-link"><?= $this->session->userdata('data_profil')->useremail ?></a>
                                 </div>
                              </div>
                           </div>
                           <div class="m-dropdown__body">
                              <div class="m-dropdown__content">
                                 <ul class="m-nav m-nav--skin-light">
                                    <li class="m-nav__item">
                                       <?php if ($this->session->userdata('data_profil')->userroleid != 3 && $this->session->userdata('data_profil')->userroleid != 6) { ?>
                                          <a href="<?= base_url('profil_user/view/' . $this->session->userdata('data_profil')->userid) ?>" <?php } else { ?> <a href="<?= base_url('profil_siswa/view/' . $this->session->userdata('data_profil')->userid) ?>" <?php } ?> class="m-nav__link">
                                             <i class="m-nav__link-icon flaticon-profile-1"></i>
                                             <span class="m-nav__link-title">
                                                <span class="m-nav__link-wrap">
                                                   <span class="m-nav__link-text">Profil</span>
                                                </span>
                                             </span>
                                          </a>
                                    </li>
                                    <!-- <li class="m-nav__item">
                                       <a href="?page=header/profile&demo=default" class="m-nav__link">
                                       <i class="m-nav__link-icon flaticon-info"></i>
                                       <span class="m-nav__link-text">Bantuan</span>
                                       </a>
                                    </li> -->
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                       <a href="<?= base_url('logout') ?>" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Keluar</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <!-- AKHIR: Topbar -->
      </div>
   </div>
</div>
<script>
   $(document).ready(function() {
      toastr.options = {
         "closeButton": false,
         "debug": false,
         "newestOnTop": false,
         "progressBar": false,
         "positionClass": "toast-top-center",
         "preventDuplicates": false,
         "onclick": null,
         "showDuration": "300",
         "hideDuration": "1000",
         "timeOut": "5000",
         "extendedTimeOut": "1000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
      };
   });
</script>