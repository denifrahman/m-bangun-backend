<?php
$menu_1 = $this->session->flashdata('menu_1');
$menu_2 = $this->session->flashdata('menu_2');
$menu_3 = $this->session->flashdata('menu_3');
?>
<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
   <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
      <li class="m-menu__item  m-menu__item <?php
                                             if ($menu_1 == 'dashboard') {
                                                echo 'm-menu__item--active';
                                             }
                                             ?>" aria-haspopup="true" style="margin-top:20px;">
         <a href="<?= base_url('dashboard') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i>
            <span class="m-menu__link-title">
               <span class="m-menu__link-wrap">
                  <span class="m-menu__link-text">Dashboard</span>
               </span>
            </span>
         </a>
      </li>
      <?php if ($this->session->userdata('data_profil')->userroleid == 1) { ?>
         <li class="m-menu__item  m-menu__item--submenu m-menu__item--hover <?php
                                                                              if ($menu_1 == 'master') {
                                                                                 echo 'm-menu__item--open m-menu__item--expanded';
                                                                              }
                                                                              ?>" aria-haspopup="true" style="margin-top:0px;" m-menu-submenu-toggle="hover">
            <a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list-2"></i><span class="m-menu__link-text">Master</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
            <div class="m-menu__submenu ">
               <span class="m-menu__arrow"></span>
               <ul class="m-menu__subnav">
                  <li class="m-menu__item <?php
                                          if ($menu_2 == 'members') {
                                             echo 'm-menu__item--active';
                                          }
                                          ?>" aria-haspopup="true"><a href="<?= base_url('members') ?>" class="m-menu__link ">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                        <span class="m-menu__link-text">Members</span></a>
                  </li>

               </ul>
            </div>
         </li>
      <?php } ?>
      <li class="m-menu__item  m-menu__item <?php
                                             if ($menu_1 == 'request') {
                                                echo 'm-menu__item--active';
                                             }
                                             ?>" aria-haspopup="true" style="margin-top:0px;">
         <a href="<?= base_url('request') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i>
            <span class="m-menu__link-title">
               <span class="m-menu__link-wrap">
                  <span class="m-menu__link-text">Request</span>
               </span>
            </span>
         </a>
      </li>
      <li class="m-menu__item  m-menu__item <?php
                                             if ($menu_1 == 'bidding') {
                                                echo 'm-menu__item--active';
                                             }
                                             ?>" aria-haspopup="true" style="margin-top:0px;">
         <a href="<?= base_url('bidding') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i>
            <span class="m-menu__link-title">
               <span class="m-menu__link-wrap">
                  <span class="m-menu__link-text">Bidding</span>
               </span>
            </span>
         </a>
      </li>
      </li>
   </ul>
</div>