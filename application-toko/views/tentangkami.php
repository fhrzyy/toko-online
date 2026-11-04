<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah - (Nama Toko) Stationery Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
</head>
<body>
<style>
        body {
            background-color: #eceeef;
        }
		#breadcrumb {
		background-color: #eceeef; /* Warna latar breadcrumb */
		padding: 15px 0;
	}

        .breadcrumb-tree {
            list-style: none;
            padding: 10px 0;
            display: flex;
        }
        .breadcrumb-tree li {
            margin-right: 5px;
        }
        .breadcrumb-tree a {
            text-decoration: none;
            color: red;
            font-weight: bold;
        }
        .breadcrumb-tree .active {
            color: blue;
        }
        .quote {
            text-align: center;
            font-style: italic;
            color: #555;
            margin: 20px 0;
        }
		.about-image {
            width: 100%;
            max-width: 700px; /* Ukuran lebih besar */
            height: auto;
            border-radius: 5px; /* Sudut tidak terlalu melengkung */
            display: block;
            margin: 0 auto;
            margin-bottom: 20px; /* Beri jarak bawah */
        }

		 /* Mission, Vision, Values */
		 .about-section {
            display: flex;
            justify-content: space-between;
            text-align: left;
            max-width: 1000px;
            margin: 0 auto;
            gap: 20px;
        }

        .about-box {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-box h3 {
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 3px solid gold;
            display: inline-block;
            padding-bottom: 5px;
        }

		.team-section {
            padding: 40px 20px;
        }

        .team-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .team-member {
            background: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 230px;
        }

        .team-member img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .team-member h3 {
            margin: 10px 0 5px;
            font-size: 20px;
            color: #333;
        }

        .team-member p {
            margin: 0;
            font-size: 14px;
            color: gray;
        }

        /* Responsif untuk Mobile */
        @media (max-width: 768px) {
            .team-container {
                flex-direction: column;
                align-items: center;
            }

            .team-member {
                width: 80%;
            }
			.about-section {
        display: flex;
        flex-direction: column; /* Susun ke bawah */
        align-items: center; /* Pusatkan */
    }

    .about-box {
        width: 90%; /* Lebar lebih kecil agar rapi */
    }
		}
    </style>
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
                    <li class="active"  style="color: blue;">Tentang Kami</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
		
    </div>
    <!-- /container -->
</div>


<h2 class="text-center"><span style="color:red;">Tentang</span>  <span style="color:blue;">Kami</span></h2>
 <!-- Timeline -->
  <!-- Kutipan -->
  <p class="quote" data-aos="fade-in" data-aos-duration="1000">"Setiap yang diusahakan dengan sungguh-sungguh, dan selalu berdoa <br>
        maka tidak akan ada kata penyesalan serta keberhasilan akan diraih"</p>
        
        <!-- Gambar -->
		<div class="image-container" data-aos="zoom-in" data-aos-duration="1000">
            <img src="<?php echo base_url('assets/user')?>/img/foto-bersama.png" alt="Tentang Kami" class="about-image">
        </div>
		<br>
		 <!-- Mission, Vision, Values -->
		 <div class="about-section">
    <div class="about-box" data-aos="fade-up" data-aos-delay="200">
        <h3>Mission</h3>
        <p>Untuk menjadi pilihan utama bagi pelanggan dalam memenuhi kebutuhan perlengkapan ATK dan palen dengan menyediakan barang berkualitas, harga yang terjangkau, dan pelayanan yang memuaskan.</p>
    </div>
    <div class="about-box" data-aos="fade-up" data-aos-delay="400">
        <h3>Vision</h3>
        <p>Menyediakan berbagai macam produk perlengkapan kantor, rumah tangga, kebutuhan bayi & anak, serta perlengkapan kosmetik dengan kualitas terbaik dan harga kompetitif.</p>
        <ul>
            <li>Memberikan pelayanan yang ramah, profesional, dan tepat waktu.</li>
            <li>Berkontribusi pada pertumbuhan ekonomi lokal dengan menciptakan lapangan kerja.</li>
        </ul>
    </div>
    <div class="about-box" data-aos="fade-up" data-aos-delay="600">
        <h3>Values</h3>
        <p>Dengan visi dan misi yang jelas, toko (Nama Toko) ATK dan palen memiliki tujuan kuat dalam memberikan pelayanan terbaik bagi pelanggan dan menjadi mitra terpercaya.</p>
    </div>
</div>
		</div> 
		<br>
		<section class="team-section">
       <center> <h2>Tim Utama Kami</h2>
        <div class="team-container">
		<div class="team-member" data-aos="flip-up" data-aos-delay="200">
            <img src="<?php echo base_url('assets/user')?>/img/user.png" alt="Faisal">
            <h3>(nama)</h3>
            <p>(jabatan)</p>
        </div>
        <div class="team-member" data-aos="flip-up" data-aos-delay="400">
            <img src="<?php echo base_url('assets/user')?>/img/user.png" alt="Zainal">
            <h3>(nama)</h3>
            <p>(jabatan)</p>
        </div>
        <div class="team-member" data-aos="flip-up" data-aos-delay="600">
            <img src="<?php echo base_url('assets/user')?>/img/user.png" alt="Lilik">
            <h3>(nama)</h3>
            <p>(jabatan)</p>
        </div>
        <div class="team-member" data-aos="flip-up" data-aos-delay="800">
            <img src="<?php echo base_url('assets/user')?>/img/user.png" alt="Dila">
            <h3>(nama)</h3>
            <p>(jabatan)</p>
        </div>
        </div>
    </section>
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
