<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Icon -->
	<link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="aset/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="aset/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="aset/dist/css/skins/_all-skins.min.css">
        <!-- Scripts -->
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
     <header class="main-header">
        @include('header')  
       </header>
     
		@yield('content')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="aset/dist/js/app.min.js"></script>
    <script src="aset/laravel-bootstrap-modal-form.js"></script>
   
   <script>
  
  $('#ModalEditTour').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nama_tour = button.data('nama_tour') 
      var keterangan = button.data('keterangan')
      var harga = button.data('harga')
      var waktutour = button.data('waktutour') 
      var gambar = button.data('gambar')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #nama_tour').val(nama_tour);
      modal.find('.modal-body #keterangan').val(keterangan);
      modal.find('.modal-body #waktutour').val(waktutour);
      modal.find('.modal-body #harga').val(harga);
      modal.find('.modal-body #gambar').val(gambar);
      modal.find('.modal-body #gambar2').attr('src', '{{asset('uploads/tour')}}/' + gambar);
      modal.find('.modal-body #id').val(id);
})

  $('#ModalEditHotel').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nama = button.data('nama') 
      var keterangan = button.data('keterangan')
      var harga = button.data('harga')
      var ket_harga = button.data('ket_harga') 
      var gambar = button.data('gambar')
      var bintang = button.data('bintang')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #nama').val(nama);
      modal.find('.modal-body #keterangan').val(keterangan);
      modal.find('.modal-body #ket_harga').val(ket_harga);
      modal.find('.modal-body #harga').val(harga);
      modal.find('.modal-body #bintang').val(bintang);
      modal.find('.modal-body #gambar').val(gambar);
      modal.find('.modal-body #gambar2').attr('src', '{{asset('uploads/hotel')}}/' + gambar);
      modal.find('.modal-body #id').val(id);
})

  $('#ModalEditTestimoni').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nama = button.data('nama') 
      var foto = button.data('foto')
      var background = button.data('background')
      var testimoni = button.data('testimoni')
      var kota = button.data('kota')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #nama').val(nama);
      modal.find('.modal-body #foto').val(foto);
      modal.find('.modal-body #foto2').attr('src', '{{asset('uploads/testimoni/foto')}}/' + foto);
      modal.find('.modal-body #testimoni').val(testimoni);
      modal.find('.modal-body #kota').val(kota);
      modal.find('.modal-body #background').val(background);
      modal.find('.modal-body #background2').attr('src', '{{asset('uploads/testimoni/background')}}/' + background);
      modal.find('.modal-body #id').val(id);
})

   $('#ModalEditPromo').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var judul = button.data('judul') 
      var diskon = button.data('diskon')
      var keterangan = button.data('keterangan')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #judul').val(judul);
      modal.find('.modal-body #diskon').val(diskon);
      modal.find('.modal-body #keterangan').val(keterangan);
      modal.find('.modal-body #id').val(id);
})

    $('#ModalEditContact').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var lokasi = button.data('lokasi') 
      var no_telp = button.data('no_telp')
      var email = button.data('email')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #lokasi').val(lokasi);
      modal.find('.modal-body #no_telp').val(no_telp);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #id').val(id);
})

    $('#ModalEditTopdeals').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nama_tour_deals = button.data('nama_tour_deals')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #nama_tour_deals').val(nama_tour_deals);
      modal.find('.modal-body #id').val(id);
})

  $('#ModalEditExplore').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var title = button.data('title') 
      var gambar = button.data('gambar')
      var keterangan = button.data('keterangan')
      var link = button.data('link')
      var subtitle = button.data('subtitle')  
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #title').val(title);
      modal.find('.modal-body #gambar').val(gambar);
      modal.find('.modal-body #gambar2').attr('src', '{{asset('uploads/explore/gambar')}}/' + gambar);
      modal.find('.modal-body #keterangan').val(keterangan);
      modal.find('.modal-body #link').val(link);
      modal.find('.modal-body #subtitle').val(subtitle);
      modal.find('.modal-body #id').val(id);
})

  $('#ModalEditBackground').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var background_awal = button.data('background_awal')
      var background_tengah = button.data('background_tengah')
      var background_akhir = button.data('background_akhir') 
      var background_latar = button.data('background_latar')
      var background_explore = button.data('background_explore')
      var background_orang = button.data('background_orang')     
      var id = button.data('id') 
      var modal = $(this)

      modal.find('.modal-body #background_awal2').attr('src', '{{asset('uploads/background/backgroundawal')}}/' + background_awal);
      modal.find('.modal-body #background_akhir2').attr('src', '{{asset('uploads/background/backgroundakhir')}}/' + background_akhir);
      modal.find('.modal-body #background_tengah2').attr('src', '{{asset('uploads/background/backgroundtengah')}}/' + background_tengah);
      modal.find('.modal-body #background_latar2').attr('src', '{{asset('uploads/background/backgroundlatar')}}/' + background_latar);
      modal.find('.modal-body #background_explore2').attr('src', '{{asset('uploads/background/backgroundexplore')}}/' + background_explore);
      modal.find('.modal-body #background_orang2').attr('src', '{{asset('uploads/background/backgroundorang')}}/' + background_orang);
      modal.find('.modal-body #id').val(id);
})

    $('#ModalEditTentang').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var title = button.data('title') 
      var gambar = button.data('gambar')
      var keterangan = button.data('keterangan')
      var subtitle = button.data('subtitle')  
      var id = button.data('id') 
      var modal = $(this)

      modal.find('.modal-body #title').val(title);
      modal.find('.modal-body #gambar').val(gambar);
      modal.find('.modal-body #gambar2').attr('src', '{{asset('uploads/tentang')}}/' + gambar);
      modal.find('.modal-body #keterangan').val(keterangan);
      modal.find('.modal-body #subtitle').val(subtitle);
      modal.find('.modal-body #id').val(id);
})


  $('#ModalDelete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var id = button.data('id') 
      var modal = $(this)
      modal.find('.modal-body #id').val(id);
})
</script>
  </body>
</html>
