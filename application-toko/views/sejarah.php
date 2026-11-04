<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - (Nama Toko) Stationery Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
<style>
 body {
            background-color: #eceeef;
        }
		#breadcrumb {
		background-color: #eceeef; /* Warna latar breadcrumb */
		padding: 15px 0;
	}


.timeline {
    position: relative;
    padding: 20px 0;
    --height: 0%; /* Custom property untuk tinggi garis */
}

.timeline::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50px;
    width: 4px;
    height: var(--height);
    background: #007bff;
    transition: height 0.1s linear; /* Transisi lebih cepat */
}


.timeline-item {
    position: relative;
    margin-bottom: 50px;
    padding-left: 80px;
}

.timeline-item h4 {
    color: #007bff;
}

.timeline-badge {
    position: absolute;
    left: 20px; 
    top: -45px;
    width: 60px;
    height: 40px;
    background: white;
    color: #007bff;
    text-align: center;
    line-height: 40px;
    font-weight: bold;
    border-radius: 5px;
    font-size: 16px;
    border: 2px solid #ccc;
}

.moment-img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}
.timeline {
    position: relative; /* Tambahkan ini */
    padding: 20px 0;
}

.timeline-end {
    position: absolute;
    left: 30px; /* Sesuaikan posisi kiri */
    bottom: 0px; /* Pastikan tetap di akhir timeline */
    width: 40px;
    height: 40px;
    background: #007bff; /* Warna biru */
    color: white;
    text-align: center;
    line-height: 40px;
    font-weight: bold;
    border-radius: 50%; /* Bulat */
    display: flex;
    align-items: center;
    justify-content: center;
}

.timeline-end i {
    font-size: 18px;
}

.history-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

.history-box h2 {
            color: #007bff;
        }

	@media (max-width: 768px) {
    .moment-img {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}


    </style>
	<script>document.addEventListener("scroll", function () {
    let timeline = document.querySelector(".timeline");
    let scrollTop = window.scrollY;
    let docHeight = document.documentElement.scrollHeight - window.innerHeight;
    
    let scrollPercent = (scrollTop / docHeight) * 100;
    let adjustedHeight = Math.min(100, scrollPercent * 1.5); // Mempercepat naiknya garis

    timeline.style.setProperty("--height", adjustedHeight + "%");
});

</script>
<body>

<!-- SECTION -->
  <!-- container -->
  <div class="container">
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="<?php echo base_url('homepage') ?>" style="color: red;">Beranda</a></li>
                    <li class="active"  style="color: blue;">Sejarah</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<div class="history-box">

<h2 class="text-center"><span style="color:red;">Sejarah</span>  <span style="color:blue;">Toko</span></h2>
 <!-- Timeline -->
  <br><br>
 <div class="timeline">
 <div class="timeline-item" data-aos="fade-right" data-aos-duration="1000">
            <div class="timeline-badge">2009
			</div>
			<div class="timeline-end">
        <i class="fas fa-flag"></i> <!-- Ikon bendera -->
    </div>

            <h4>Jan 2009</h4>
            <div class="card p-3">
                <h5><b>Sejarah "Nama Toko"</b></h5>
                <p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p>
				<p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p>
				<p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p>
				<p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p>
				<p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p>
				<p data-aos="fade-up" data-aos-delay="700">Toko (Nama Toko) grosir ATK dan palen merupakan salah satu toko yang menjual berbagai kebutuhan kantor seperti alat tulis dan perlengkapan kantor lainnya. Sejarah berdirinya toko Abadi grosir ATK dan palen bermula dari kebutuhan akan tempat yang menyediakan produk-produk kantor dengan harga grosir.</p> 
			</div>
        </div>
    </div>
</div>
<br>
	 <!-- Momen Berharga -->
	 <div class="history-box">
	 <h3 class="text-center mt-5"><span style="color:red;">Momen</span> <span style="color:blue;">Berharga</span></h3>
    <div class="row mt-3">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 1">
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 2">
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 3">
        </div>
    </div>
	<br>
	<div class="row mt-3">
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 1">
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 2">
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" class="moment-img" alt="Momen 3">
        </div>
    </div>
</div>
</div>
<br>
<!-- /BREADCRUMB -->
      </div>
      <!-- /Order tab -->

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
