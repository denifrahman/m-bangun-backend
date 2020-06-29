<!DOCTYPE html>
<html lang="en">
<!-- awal::Head -->

<head>
  <?php $this->load->view('component/head') ?>
  <link href="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

  <title>MITRA</title>
</head>
<!-- akhir::Head -->
<!-- awal::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
  <!-- awal:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- AWAL: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
      <?php $this->load->view('component/header') ?>
    </header>
    <!-- AKHIR: Header -->
    <!-- awal::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
      <!-- AWAL: Left Aside -->
      <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
      <div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
        <!-- AWAL: Aside Menu -->
        <?php $this->load->view('component/sidebar') ?>
        <!-- AKHIR: Aside Menu -->
      </div>
      <!-- AKHIR: Left Aside -->
      <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
          <!--Begin::Section-->
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="m-portlet m-portlet--full-height  ">
                <div class="m-portlet__body">
                  <div class="m-card-profile">
                    <div class="m-card-profile__title m--hide">
                      Your Profile
                    </div>
                    <form id="submit">
                      <h5 class="m-subheader__title m--font-light"">Upload Lembar Jawaban</h5>
                                                        <div class=" m-widget27__pic">
                        <?php if ($data_siswa->foto_profile == null) { ?>
                          <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                              <img src="<?= base_url() ?>assets/images/user.jpg" class="m--img-rounded m--marginless" alt="" />
                            </div>
                            <div class="custom-file">
                              <input type="file" id="nama_file" name="nama_file" id="files" accept="image/x-png,image/gif,image/jpeg" multiple>
                              <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                            </div>
                            <input type="hidden" name="id_siswa" value="<?= $this->session->userdata('data_profil')->id ?>">
                            <div class="col-lg-12" style=" float: none;margin: 0 auto;">
                              <button class="btn m-btn--pill btn-secondary btn-sm m--font-success" id="btn_upload" type="submit">Upload</button>
                            </div>
                          </div>
                        <?php } else { ?>
                          <div class="m-card-profile__pic">
                            <div class="m-card-profile__pic-wrapper">
                              <img src="<?= base_url() ?>assets/img/profile/<?= $data_siswa->foto_profile ?>" alt="">
                            </div>
                            <div class="col-lg-12" style=" float: none;margin: 0 auto;">
                              <button type="button" class="btn m-btn--pill btn-secondary btn-sm m--font-danger" onclick="hapus('<?= $data_siswa->id ?>','<?= $data_siswa->foto_profile ?>')">Hapus</button>
                            </div>
                          </div>
                        <?php } ?>

                  </div>
                  </br>
                  <?php if ($data_siswa->foto_profile != null) { ?>
                  <?php } else { ?>

                  <?php } ?>
                  </form>
                  <div class="m-card-profile__details">
                    <span class="m-card-profile__name"><?= $data_siswa->nama; ?></span>
                    <a href="" class="m-card-profile__email m-link"><?= $data_siswa->username; ?></a>
                  </div>
                </div>

                <div class="m-portlet__body-separator"></div>

              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-8">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
              <div class="m-portlet__head">
                <div class="m-portlet__head-tools">
                  <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                    <li class="nav-item m-tabs__item">
                      <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_user_profile_tab_1" role="tab" aria-selected="true">
                        <i class="flaticon-share m--hide"></i>
                        Update Profile
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item m-portlet__nav-item--last">
                      <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                          <i class="la la-gear"></i>
                        </a>
                        <div class="m-dropdown__wrapper" style="z-index: 101;">
                          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 21.5px;"></span>
                          <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                              <div class="m-dropdown__content">
                                <ul class="m-nav">

                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="tab-content">
                <div class="tab-pane active show" id="m_user_profile_tab_1">
                  <form class="m-form m-form--fit m-form--label-align-right" id="formMaster">
                    <div class="m-portlet__body">
                      <div class="form-group m-form__group m--margin-top-10 m--hide">
                        <div class="alert m-alert m-alert--default" role="alert">
                          The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <div class="col-10 ml-auto">
                          <h3 class="m-form__section">1. Personal Details</h3>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Nama</label>
                        <div class="col-7">
                          <input class="form-control m-input" id="nama" name="nama" type="text" value="<?= $data_siswa->nama ?>">
                          <input type="hidden" name="id" value="<?= $this->session->userdata('data_profil')->id ?>">
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Username</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->username ?>" id="username" name="username" disabled>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Program</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->nama_program ?>" id="username" name="username" disabled>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Jurusan</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->nama_jurusan ?>" id="username" name="username" disabled>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Tahun Masuk</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->tahun_akademik ?>" id="username" name="username" disabled>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Nomor Pendaftaran</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->no_pendaftaran ?>" id="no_pendaftaran" name="no_pendaftaran" disabled>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Tempat Lahir</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->tempat_lahir ?>" id="tempat_lahir" name="tempat_lahir">
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="date" value="<?= date("Y-m-d", strtotime($data_siswa->tanggal_lahir)) ?>" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Whatsapp</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->whatsapp ?>" id="whatsapp" name="whatsapp">
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Phone No.</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->no_telp ?>" id="no_telp" name="no_telp">
                        </div>
                      </div>
                      <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                      <div class="form-group m-form__group row">
                        <div class="col-10 ml-auto">
                          <h3 class="m-form__section">2. Alamat</h3>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Alamat</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->alamat ?>" id="alamat" name="alamat">
                        </div>
                      </div>
                      <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                      <div class="form-group m-form__group row">
                        <div class="col-10 ml-auto">
                          <h3 class="m-form__section">3. Password</h3>
                        </div>
                      </div>
                      <div class="form-group m-form__group row">
                        <label for="example-text-input" class="col-2 col-form-label">Password</label>
                        <div class="col-7">
                          <input class="form-control m-input" type="text" value="<?= $data_siswa->password ?>" id="password" name="password">
                        </div>
                      </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions">
                        <div class="row">
                          <div class="col-2">
                          </div>
                          <div class="col-7">
                            <button type="reset" onclick="simpan_verifikasi()" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
                            <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--End::Section-->
      </div>
    </div>
  </div>
  <!-- akhir:: Body -->
  <!-- Button trigger modal -->
  <!-- Modal add -->

  <!-- end modal add -->

  <!-- awal::Footer -->
  <footer class="m-grid__item	m-footer ">
    <?php $this->load->view('component/footer') ?>
  </footer>
  <!-- akhir::Footer -->
  </div>
  <!-- akhir:: Page -->
  <!-- awal::Scroll Top -->
  <div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
  </div>
  <!-- akhir::Scroll Top -->
  <?php $this->load->view('component/script') ?>
  <script src="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
  <script>
    const id_siswa = "<?= $this->session->userdata('data_profil')->id ?>"
    const id_jurusan = "<?= $this->session->userdata('data_profil')->jurusan_id ?>"
    const base_url = "<?= base_url() ?>"
    $(document).ready(function() {
      getTable();
      $('#submit').submit(function(e) {
        swal({
          title: "",
          text: "Tunggu Sebentar...",
          imageUrl: baseURL + "assets/images/ajax-loader.gif",
          showConfirmButton: false,
          closeOnClickOutside: false,
          allowOutsideClick: false,
          imageWidth: 30,
          imageHeight: 30,
        });
        e.preventDefault();
        var id = $("#id").val();
        url = "<?= base_url() ?>/profil_siswa/upload",
          type = "POST"
        $.ajax({
          url: url,
          type: "post",
          data: new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          success: function(data) {
            //   var result = JSON.parse(data);
            //   console.log(result.meta.success);
            // if(result.meta.success == true){
            location.reload();
          }
        });

      })
    });

    function simpan_verifikasi(id) {
      var $valid = $('#formMaster').valid();
      if (!$valid) {
        return;
      } else {
        swal({
          title: "",
          text: "Tunggu Sebentar...",
          imageUrl: baseURL + "assets/images/ajax-loader.gif",
          showConfirmButton: false,
          closeOnClickOutside: false,
          allowOutsideClick: false,
          imageWidth: 30,
          imageHeight: 30,
        });
        var id = $("#id").val();
        var url = "";
        var type = "";
        if (id == 'undefined') {
          url = "<?= API_GET ?>/m_siswa/ubah_profile",
            type = "POST"
        } else {
          url = "<?= API_GET ?>/m_siswa/ubah_profile",
            type = "POST"
        }
        $.ajax({
          type: type,
          url: url,
          cache: false,
          data: {
            "data": $("#formMaster").serialize()
          },
          success: function(result) {
            console.log(result)
            if (result.meta.success == true) {
              location.reload();
            } else {
              $("id").val("undefined");
              swal({
                title: "Data Gagal Di Dapatkan",
                type: "error"
              });
            }
          }
        });
      }
    }

    function hapus(id, nama) {
      swal({
        title: "Apakah anda yakin?",
        text: "Penghapusan data tidak dapat dikembalikan!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Hapus"
      }).then(function(e) {
        if (e.value) {
          swal({
            title: "",
            text: "Tunggu Sebentar...",
            imageUrl: baseURL + "assets/images/ajax-loader.gif",
            showConfirmButton: false,
            closeOnClickOutside: false,
            allowOutsideClick: false,
            imageWidth: 30,
            imageHeight: 30,
          });
          $.ajax({
            method: 'GET',
            url: base_url + 'profil_siswa/delete_by_id/' + id + '/' + nama,
            success: function(json) {},
            success: function(e) {
              location.reload();
              toastr.success('Data berhasil di hapus');
            },
            error: function(e) {
              toastr.error('Data gagal terhapus!');
            }
          });
          console.log(e);
        }
      })
    }

    function getTable(id) {
      $("#table_view_nilai").DataTable().destroy();
      table = $("#table_view_nilai").DataTable({
        "scrollCollapse": !0,
        "scrollX": true,
        "autoWidth": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?= API_GET ?>/t_nilai_siswa/get_all/",
          "type": "POST",
          "data": {
            "id_siswa": id_siswa
          }
        },
        "createdRow": function(row, data, dataIndex) {
          console.log(data[2])
          if (data[2] >= 70) {
            $(row).css("background-color", '#d2f3ca');
          } else {
            $(row).css("background-color", '#efbfbf');
          }
        },
        // //Set column definition initialisation properties.
        "columnDefs": [{
          width: 200,
          targets: 3
        }],

      });
      $("#title_modal_tambah_user").text('Tagihan Siswa');
      swal.close();
    }
  </script>

</body>
<!-- akhir::Body -->

</html>