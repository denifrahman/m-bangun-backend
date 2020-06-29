<!DOCTYPE html>
<html lang="en">
<!-- awal::Head -->

<head>
  <?php $this->load->view('component/head') ?>
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
        <!-- AWAL: Subheader -->
        <div class="m-subheader ">
          <div class="d-flex align-items-center">
            <div class="mr-auto">
              <h3 class="m-subheader__title ">Dashboard Siswa Lpp Quantum</h3><br>
            </div>
          </div>
        </div>
        <!-- AKHIR: Subheader -->
        <div class="m-content">
          <!--Begin::Section-->
          <div class="row">
            <div class="col-xl-5 col-lg-12">
              <!--Begin::Portlet-->
              
          <!--end::Portlet-->
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  </div>
  <!-- akhir:: Body -->

  <!-- awal::Footer -->
  <footer class="m-grid__item		m-footer ">
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
  <!-- <script src="<?= base_url() ?>assets/demo/default/custom/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script> -->
  <script src="<?= base_url() ?>assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
  <script src="<?= base_url() ?>assets/custom/today.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/charts.js"></script>
  <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
  <script>
    const id_siswa = "<?= $this->session->userdata('data_profil')->id ?>"
    const baseUrl = "<?= base_url() ?>";
    const id_jurusan = "<?= $this->session->userdata('data_profil')->jurusan_id ?>"
    $(document).ready(function() {

      getJadwalPelajaran();
      getJadwalUjikom();
    });

    function getJadwalPelajaran(id) {
      $.ajax({
        type: "GET",
        url: "<?= API_GET ?>/t_jadwal/get_by_id_jurusan/" + id_jurusan + '/2',
        cache: false,
        dataType: "json",
        success: function(result) {
          if (result.meta.success == true) {
            swal.close();
            $("#text_jadwal_pelajaran").html(result.data.text_jadwal);
            $("#title_jadwal_pelajaran").text(result.data.nama_jenis_jadwal);

          }
        }
      });
    }

    function getJadwalUjikom(id) {
      $.ajax({
        type: "GET",
        url: "<?= API_GET ?>/t_jadwal/get_by_id_jurusan/" + id_jurusan + '/3',
        cache: false,
        dataType: "json",
        success: function(result) {
          if (result.meta.success == true) {
            swal.close();
            $("#text_jadwal_ujikom").html(result.data.text_jadwal);
            $("#title_jadwal_ujikom").text(result.data.nama_jenis_jadwal);

          }
        }
      });
    }

    function getTable(id) {
      setTimeout(function() {

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
          rowGroup: {
            startRender: function(rows, group) {
              var avg = rows
                .data()
                .pluck(4)
                .reduce(function(a, b) {
                  return a + b.replace(/[^\d]/g, '') * 1;
                }, 0) / rows.count();

              return 'Average  ' + group + ' : ' +
                $.fn.dataTable.render.number(',', '.', 0, ' ').display(avg);
            },
            dataSrc: 1
          },
          "columnDefs": [{
            targets: 1,
            visible: false
          }, ],
          "createdRow": function(row, data, dataIndex) {
            console.log(data[2])
            if (data[2] >= 70) {
              $(row).css("background-color", '#42adf46e');
            } else {
              $(row).css("background-color", '#42adf436');
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


      }, 1000);

    }
    // function getCatatan() {
    //   $.ajax({
    //     type: "GET",
    //     url: "<?= API_GET ?>/m_catatan/getCatatanById/" + id_siswa,
    //     cache: false,
    //     dataType: "json",
    //     success: function (result) {
    //       if (result.meta.success == true) {
    //         console.log(result.data);
    //         $("#catatan").text(result.data.catatan);

    //       }
    //     }
    //   });
    // }


    function format(n) {
      return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
  </script>

</body>
<!-- akhir::Body -->

</html>