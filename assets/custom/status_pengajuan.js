$( document ).ready(function() {
    $('#m_table_1').on('click', '.button_detail', function(){
             var id = $(this).attr('data-id');
               show_data(id);
     });

     var url_string = window.location.href ; //window.location.href
     var url = new URL(url_string);
     var id = url.searchParams.get("id");
     if(id){
         show_data(id);
        $('#m_modal_5').modal('toggle');
     }
 });

 function show_data(id){
   $('#span_pendapatan_usaha').removeClass().addClass('m-badge m-badge--secondary');
   $('#span_kekayaan_usaha').removeClass().addClass('m-badge m-badge--secondary');
   $('#span_lama_usaha').removeClass().addClass('m-badge m-badge--secondary');
   $('#span_pendapatan_pribadi').removeClass().addClass('m-badge m-badge--secondary');
   $('#span_total').removeClass().addClass('m-badge m-badge--secondary');

   $.ajax({
      type: "POST",
      url: baseURL + "status/get_data",
      data: { id: id },
      dataType: "json",
      beforeSend: function (e) {

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

      },
      success: function (response) {

         // console.log(response)

         //data mitra
         $('#username').val(response.data.username);
         $('#nama').val(response.data.nama);
         $('#email_mitra').val(response.data.email);
         $('#tanggal_lahir').val(response.data.tanggal_lahir);
         $('#no_telepon').val(response.data.no_telepon);
         $('#no_whatsapp').val(response.data.no_whatsapp);
         $('#alamat').val(response.data.alamat_mitra);
         $('#kota_mitra').val(response.data.nama_kota);
         $('#kecamatan_mitra').val(response.data.nama_kecamatan);
         $('#kelurahan_mitra').val(response.data.nama_kelurahan);
         $('#kode_pos').val(response.data.kode_pos_mitra);
         $('#no_ktp').val(response.data.no_ktp);
         $('#no_npwp').val(response.data.no_npwp);
         $('#no_kk').val(response.data.no_kk);

         //data usaha
         $('#nama_usaha').val(response.data.nama_usaha);
         $('#no_telepon_usaha').val(response.data.no_telepon_usaha);
         $('#alamat_usaha').val(response.data.alamat_usaha);
         $('#kota_usaha').val(response.data.kota_usaha);
         $('#kecamatan_usaha').val(response.data.kecamatan_usaha);
         $('#kelurahan_usaha').val(response.data.kelurahan_usaha);
         $('#bentuk_badan_usaha').val(response.data.nama_bentuk_usaha);
         $('#jenis_usaha').val(response.data.nama_jenis_usaha);
         $('#lama_usaha').val(response.data.lama_usaha);
         $('#lama_pengalaman').val(response.data.lama_pengalaman);

         //pendapatan usaha
         $('#rata_rata_omset_perbulan').val(response.data.rata_rata_omset_perbulan);
         $('#rata_rata_biaya_usaha_perbulan').val(response.data.rata_rata_biaya_usaha_perbulan);

         //bagi hasil
         $('#presentase_mitra').val(response.data.presentase_mitra);
         $('#presentase_investor').val(response.data.presentase_investor);

         //foto
         $("#foto_ktp").attr("src",response.foto.foto_ktp);
         $("#foto_npwp").attr("src",response.foto.foto_npwp);
         $("#foto_kk").attr("src",response.foto.foto_kk);

         $("#foto_tampak_depan").attr("src",response.foto.foto_tampak_depan);
         $("#foto_lingkungan_sekitar").attr("src",response.foto.foto_lingkungan_sekitar);
         $("#foto_aktifitas_usaha").attr("src",response.foto.foto_aktifitas_usaha);
         $("#foto_peralatan_usaha").attr("src",response.foto.foto_peralatan_usaha);
         $("#foto_produksi").attr("src",response.foto.foto_produksi);

         //pendapatan usaha
         $('#rata_rata_omset_perbulan').val(format(response.data.rata_rata_omset_perbulan));
         $('#rata_rata_biaya_usaha_perbulan').val(format(response.data.rata_rata_biaya_usaha_perbulan));
         $('#biaya_lain_lain').val(format(response.data.biaya_lain_lain));
         var pendapatan_usaha = (parseFloat(response.data.rata_rata_omset_perbulan) - (parseFloat(response.data.rata_rata_biaya_usaha_perbulan)+parseFloat(response.data.biaya_lain_lain)));
         $('#total_pendapatan_usaha').val(format(pendapatan_usaha));

         //pendapatan pribadi
         $('#pendapatan_lain').val(format(response.data.pendapatan_lain));
         $('#pendapatan_usaha').val(format(pendapatan_usaha));
         $('#hutang_konsumtif').val(format(response.data.hutang_konsumtif));
         $('#pendapatan_bersih').val(format((parseFloat(response.data.pendapatan_lain) + pendapatan_usaha ) - parseFloat(response.data.hutang_konsumtif)));

         //kekayaan usaha
         $('#aset_usaha').val(format(response.data.aset_usaha));
         $('#modal_cash').val(format(response.data.modal_cash));
         $('#hutang_usaha').val(format(response.data.hutang_usaha));
         $('#kekayaan_bersih').val(format((parseFloat(response.data.aset_usaha) + parseFloat(response.data.modal_cash) ) - parseFloat(response.data.hutang_usaha)));

         var score_pendapatan_usaha = 0;
         var score_pendapatan_pribadi = 0;
         var score_lama_usaha = 0;

         //perhitungan score pendapatan_usaha
         var param_pendapatan_usaha = (parseFloat(response.data.rata_rata_biaya_usaha_perbulan)+parseFloat(response.data.biaya_lain_lain));
         if(pendapatan_usaha > (param_pendapatan_usaha*(25/100))){
           $('#span_pendapatan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
           score_pendapatan_usaha = 20;
         }else if(pendapatan_usaha > (param_pendapatan_usaha*(15/100))){
           $('#span_pendapatan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
           score_pendapatan_usaha = 15;
         }else if(pendapatan_usaha < (param_pendapatan_usaha*(15/100))){
           $('#span_pendapatan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
           score_pendapatan_usaha = 5;
         }
         //perhitungan score pendapatan_pribadi
         var param_pendapatan_pribadi = (parseFloat(response.data.pendapatan_lain)+pendapatan_usaha);
         if(response.data.hutang_konsumtif <= (param_pendapatan_pribadi*(20/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
           score_pendapatan_pribadi = 15;
         }else if(pendapatan_usaha <= (param_pendapatan_pribadi*(30/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
           score_pendapatan_pribadi = 10;
         }else if(pendapatan_usaha > (param_pendapatan_pribadi*(30/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
           score_pendapatan_pribadi = 5;
         }
         //perhitungan score kekayaan_usaha

         if(!response.data.aset_usaha_mo){
            var aset_usaha_mo = 0;
         }else{
            var aset_usaha_mo = response.data.aset_usaha_mo;
         }

         if(!response.data.modal_cash_mo){
            var modal_cash_mo = 0;
         }else{
            var modal_cash_mo = response.data.modal_cash_mo;
         }

         if(!response.data.hutang_usaha_mo){
            var hutang_usaha_mo = 0;
         }else{
            var hutang_usaha_mo = response.data.hutang_usaha_mo;
         }

         var aset_usaha_real = (parseFloat(response.data.aset_usaha)+parseFloat(aset_usaha_mo));
         var modal_cash_real = (parseFloat(response.data.modal_cash)+parseFloat(modal_cash_mo));
         var hutang_usaha_real = (parseFloat(response.data.hutang_usaha)+parseFloat(hutang_usaha_mo));
         var score_aset_usaha_real = 0;
         var score_modal_cash_real  = 0;
         var score_hutang_usaha_real = 0;

         if(aset_usaha_real <= (aset_usaha_real-(aset_usaha_real*(20/100)))){
            score_aset_usaha_real = 10;
         }else if(aset_usaha_real >= (aset_usaha_real-(aset_usaha_real*(30/100)))){
            score_aset_usaha_real = 5;
         }else if(aset_usaha_real >= (aset_usaha_real-(aset_usaha_real*(40/100)))){
            score_aset_usaha_real = 0;
         }

         if(modal_cash_real >= (modal_cash_real-(modal_cash_real*(70/100)))){
            score_modal_cash_real = 15;
         }else if(modal_cash_real >= (modal_cash_real-(modal_cash_real*(50/100)))){
            score_modal_cash_real = 10;
         }else if(modal_cash_real < (modal_cash_real-(modal_cash_real*(50/100)))){
            score_modal_cash_real = 5;
         }

         if(hutang_usaha <= (hutang_usaha-(hutang_usaha*(120/100)))){
            score_hutang_usaha = 20;
         }else if(hutang_usaha <= (hutang_usaha-(hutang_usaha*(140/100)))){
            score_hutang_usaha = 15;
         }else if(hutang_usaha >= (hutang_usaha-(hutang_usaha*(141/100)))){
            score_hutang_usaha = 5;
         }

         var score_kekayaan_usaha = (score_aset_usaha_real+score_modal_cash_real+score_hutang_usaha_real);
         // console.log('kekayaan_usaha')
         // console.log(aset_usaha_real)

         if(score_kekayaan_usaha >= 31){
            $('#span_kekayaan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
         }else if(score_kekayaan_usaha >= 16 && score_kekayaan_usaha <= 30){
            $('#span_kekayaan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
         }else if(score_kekayaan_usaha >= 0 && score_kekayaan_usaha <= 15){
            $('#span_kekayaan_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
         }

         var param_kekayaan_usaha = (parseFloat(response.data.pendapatan_lain)+pendapatan_usaha);
         if(response.data.hutang_konsumtif <= (param_pendapatan_pribadi*(20/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
           score_pendapatan_pribadi = 15;
         }else if(pendapatan_usaha <= (param_pendapatan_pribadi*(30/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
           score_pendapatan_pribadi = 10;
         }else if(pendapatan_usaha > (param_pendapatan_pribadi*(30/100))){
           $('#span_pendapatan_pribadi').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
           score_pendapatan_pribadi = 5;
         }
         //perhitungan score lama_usaha
         var param_lama_usaha = (parseFloat(response.data.lama_usaha));
         if(param_lama_usaha >= 4){
           $('#span_lama_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
           score_lama_usaha = 15;
         }else if(param_lama_usaha >= 2 && param_lama_usaha <= 3){
           $('#span_lama_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
           score_lama_usaha = 10;
         }else if(param_lama_usaha >= 0 && param_lama_usaha <= 1){
           $('#span_lama_usaha').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
           score_lama_usaha = 5;
         }

         $('#score_pendapatan_usaha').text(score_pendapatan_usaha);
         $('#score_pendapatan_pribadi').text(score_pendapatan_pribadi);
         $('#score_kekayaan_usaha').text(score_kekayaan_usaha);
         $('#score_lama_usaha').text(score_lama_usaha);

         var score_total = (score_pendapatan_usaha+score_pendapatan_pribadi+score_kekayaan_usaha+score_lama_usaha);
         if(score_total >= 31){
           $('#span_total').removeClass('m-badge m-badge--secondary').addClass('m-badge hijau');
         }else if(score_total <= 30 && score_total >= 16){
           $('#span_total').removeClass('m-badge m-badge--secondary').addClass('m-badge kuning');
         }else if(score_total <= 15 && score_total >= 0){
           $('#span_total').removeClass('m-badge m-badge--secondary').addClass('m-badge merah');
         }

         $('#score_total').text(score_total);

         swal.close();

      },
      error: function(response) {
         swal.close();

         swal({
             title: "Gagal!",
             text: "Pengambilan data gagal dilakukan, silahkan coba kembali.",
             type: "error"
         });
      }
   });
 }

 
 function format(n) {
   var result = "";
   if(n){
     result = n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
   }else{
     result = "0";
   }
   return result;
  }