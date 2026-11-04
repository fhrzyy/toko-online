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
        .contact-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1100px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contact-info {
            width: 35%;
        }
        .contact-info h3 {
            border-bottom: 3px solid gold;
            display: inline-block;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
        .contact-info p {
            margin: 10px 0;
        }
        .map-container {
            width: 60%;
        }
        .map-container iframe {
            width: 100%;
            height: 350px;
            border-radius: 5px;
        }
		.btn-primary {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            background: #0056b3;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-primary:hover {
            background: #004099;
        }
    </style>
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
                    <li class="active"  style="color: blue;">Kontak</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
		
    </div>
    <!-- /container -->
</div>


<h2 class="text-center"><span style="color:red;">Kontak</span></h2>
<div class="contact-section">
			<div class="contact-info" data-aos="zoom-in" data-aos-duration="1000">	
                <h3>Get in Touch</h3>
                <p><i class="fas fa-phone"></i> <strong>Phone Number</strong><br>+123 4567 890</p>
                <p><i class="fas fa-envelope"></i> <strong>Email</strong><br>OnlineShope@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> <strong>Address</strong><br>Jl. Cempaka No. 88, Patokan, Sukadamai,  Kec. Rahayu, Kab. Lembah Indah, Jawa Timur 65432</p>
                <p><i class="fas fa-clock"></i> <strong>Business Hours</strong><br>SENIN s/d SABTU</p>
            </div>
			<div class="map-container" data-aos="zoom-in" data-aos-duration="1000">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126647.39181075359!2d112.55641054335936!3d-7.2714215999999885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f938b3f711a1%3A0x5597a4fdbb1b7505!2sOnline%20Shop!5e0!3m2!1sid!2sid!4v1752152104306!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe> 
            </div>
        </div>
    </div>
	   <a href="#" class="btn-primary">Hubungi Kami</a>
		</div> 
		<br>
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
