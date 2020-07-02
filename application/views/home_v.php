<!DOCTYPE html>
<html lang="en">
<!-- awal::Head -->

<head>
  <?php $this->load->view('component/head')?>
  <title>MITRA</title>
</head>
<!-- akhir::Head -->
<!-- awal::Body -->

<body
  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
  <!-- awal:: Page -->
  <div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- AWAL: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
      <?php $this->load->view('component/header')?>
    </header>
    <!-- AKHIR: Header -->
    <!-- awal::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
      <!-- AWAL: Left Aside -->
      <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i
          class="la la-close"></i></button>
      <div id="m_aside_left" class="m-grid__item m-aside-left  m-aside-left--skin-dark ">
        <!-- AWAL: Aside Menu -->
        <?php $this->load->view('component/sidebar')?>
        <!-- AKHIR: Aside Menu -->
      </div>
      <!-- AKHIR: Left Aside -->
      <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- AWAL: Subheader -->
        <div class="m-subheader ">
          <div class="d-flex align-items-center">
            <div class="mr-auto">
              <h3 class="m-subheader__title ">m-Bangun</h3><br>
            </div>
          </div>
        </div>
        <!-- AKHIR: Subheader -->

        

          </div>
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
    <?php $this->load->view('component/footer')?>
  </footer>
  <!-- akhir::Footer -->
  </div>
  <!-- akhir:: Page -->
  <!-- awal::Scroll Top -->
  <div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
  </div>
  <!-- akhir::Scroll Top -->
  <?php $this->load->view('component/script')?>
  <!-- <script src="<?=base_url()?>assets/demo/default/custom/crud/forms/widgets/bootstrap-daterangepicker.js" type="text/javascript"></script> -->
  <script src="<?=base_url()?>assets/demo/default/custom/crud/forms/widgets/select2.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/custom/today.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <script src="https://www.amcharts.com/lib/4/core.js"></script>
  <script src="https://www.amcharts.com/lib/4/charts.js"></script>
  <script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
  <script>
    const id = "<?=$this->session->userdata('data_profil')->id?>"
    const baseUrl = "<?=base_url()?>";
    $(document).ready(function () {



      setChart();
      getSaldo();
      getTotalGuru();
      getTotalMurid();
      getCatatan();
      setChartPertemuan();
    });
    function reloadSaldo() {
      setTimeout(function () {
        getSaldo();
      }, 50000);
    }
    function setChart() {
      am4core.useTheme(am4themes_animated);
      // Themes end

      // Create chart instance
      var chart = am4core.create("chartdiv", am4charts.XYChart);
      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/m_pelanggan/getAllCountMuridByIdMember/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            console.log(result.data);
            chart.data = result.data
          }
        }
      });

      var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.renderer.grid.template.location = 0;
      categoryAxis.dataFields.category = "category";
      categoryAxis.renderer.minGridDistance = 15;
      categoryAxis.renderer.grid.template.location = 0.5;
      categoryAxis.renderer.grid.template.strokeDasharray = "1,3";
      categoryAxis.renderer.labels.template.rotation = -90;
      categoryAxis.renderer.labels.template.horizontalCenter = "left";
      categoryAxis.renderer.labels.template.location = 0.5;

      categoryAxis.renderer.labels.template.adapter.add("dx", function (dx, target) {
        return -target.maxRight / 2;
      })

      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      valueAxis.tooltip.disabled = true;
      valueAxis.renderer.ticks.template.disabled = true;
      valueAxis.renderer.axisFills.template.disabled = true;

      var series = chart.series.push(new am4charts.ColumnSeries());
      series.dataFields.categoryX = "category";
      series.dataFields.valueY = "value";
      series.tooltipText = "{valueY.value}";
      series.sequencedInterpolation = true;
      series.fillOpacity = 0;
      series.strokeOpacity = 1;
      series.strokeDashArray = "1,3";
      series.columns.template.width = 0.01;
      series.tooltip.pointerOrientation = "horizontal";

      var bullet = series.bullets.create(am4charts.CircleBullet);

      chart.cursor = new am4charts.XYCursor();

      chart.scrollbarX = new am4core.Scrollbar();
      chart.scrollbarY = new am4core.Scrollbar();

    }
    function setChartPertemuan() {
      am4core.useTheme(am4themes_animated);
      // Themes end

      var chart = am4core.create("chart_pertemuan", am4charts.XYChart);

      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/t_mengajar_detail/getAllCountPertemuanByIdMember/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            console.log(result.data);
            chart.data = result.data
          }
        }
      });

      // Create axes
      var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
      categoryAxis.dataFields.category = "year";
      categoryAxis.renderer.grid.template.location = 0;


      var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
      valueAxis.renderer.inside = true;
      valueAxis.renderer.labels.template.disabled = true;
      valueAxis.min = 0;

      // Create series
      function createSeries(field, name) {

        // Set up series
        var series = chart.series.push(new am4charts.ColumnSeries());
        series.name = name;
        series.dataFields.valueY = field;
        series.dataFields.categoryX = "year";
        series.sequencedInterpolation = true;

        // Make it stacked
        series.stacked = true;

        // Configure columns
        series.columns.template.width = am4core.percent(60);
        series.columns.template.tooltipText = "[bold]{name}[/]\n[font-size:14px]{categoryX}: {valueY}";

        // Add label
        var labelBullet = series.bullets.push(new am4charts.LabelBullet());
        labelBullet.label.text = "{valueY}";
        labelBullet.locationY = 0.5;

        return series;
      }

      createSeries("income", "Jumlah Pertemuan");


      // Legend
      chart.legend = new am4charts.Legend();
    }
    function getSaldo() {
      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/m_member/getById/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            $("#saldo").text(format_number('Saldo Rp ' + result.data.saldo));
            $("#omset").text(format_number('Rp ' + result.data.omset));
            setTimeout(function () {
              reloadSaldo();
            }, 50000);
          }
        }
      });
    }
    function getTotalGuru() {
      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/m_user/getTotalGuruByIdMember/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            console.log(result.data);
            $("#total_guru").text(format(result.data.total_guru));

          }
        }
      });
    }
    function getTotalMurid() {
      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/m_pelanggan/getTotalMuridByIdMember/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            console.log(result.data);
            $("#total_murid").text(format(result.data.total_murid));

          }
        }
      });
    }
    function getCatatan() {
      $.ajax({
        type: "GET",
        url: "<?=API_GET?>/m_catatan/getCatatanById/" + id,
        cache: false,
        dataType: "json",
        success: function (result) {
          if (result.meta.success == true) {
            console.log(result.data);
            $("#catatan").text(result.data.catatan);

          }
        }
      });
    }


    function format(n) {
      return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

  </script>

</body>
<!-- akhir::Body -->

</html>