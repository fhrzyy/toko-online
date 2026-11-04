<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Berhasil - (Nama Toko) Stationery Store</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>


<!-- SECTION -->
<div class="section d-flex align-items-center justify-content-center" style="min-height: 80vh;">
  <div class="container text-center">
    <!-- Section Title -->
    <h2 class="title text-success"> Pesanan Berhasil!</h2>
    <p class="lead text-muted">Terima kasih telah berbelanja di toko kami.</p>

    <!-- Notifikasi -->
    <div class="alert alert-success mt-4" role="alert">
      <h4 class="mb-3">📩 Silakan Tunggu Notifikasi dari Admin (Nama Toko)!</h4>
      <p class="mb-0">Kami akan segera menghubungi Anda melalui WhatsApp untuk konfirmasi pesanan.</p>
    </div>

    <!-- Ikon WhatsApp -->
    <div class="mt-4">
      <i class="fab fa-whatsapp fa-4x text-success"></i>
      <p class="mt-3 text-muted">Jika ada pertanyaan, hubungi admin melalui WhatsApp.</p>
    </div>

    <!-- Tombol Kembali ke Beranda -->
    <div class="mt-4">
      <a href="<?= base_url() ?>" class="btn btn-primary btn-lg">
        <i class="fas fa-home"></i> Kembali ke Beranda
      </a>
    </div>
  </div>
</div>


    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->

<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
