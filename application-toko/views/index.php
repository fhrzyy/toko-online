<style>
        @media (max-width: 768px) {
            .desktop-view {
                display: none !important; /* Tambahkan !important untuk memastikan CSS bekerja */
            }
        }

        body {
            overflow-x: hidden;
        }
			@media (max-width: 768px) {
  [data-aos] {
    transform: none !important;
  }
}


    </style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Tambahkan AOS di Head -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<!-- Tambahkan AOS di Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
    <!-- About Start -->

        <div class="container">
		<div class="row g-5">
    <!-- Gambar dengan animasi fade-in -->
    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
        <div class="position-relative h-100">
            <img class="img-fluid position-absolute" 
                 src="<?php echo base_url('assets/user')?>/img/1.png" 
                 alt="" 
                 style="width: 100%; height: 300px; object-fit: cover; top: 10px; left: 0; margin-bottom: 20px;">
        </div>
    </div>

    <!-- Teks dengan animasi fade-in -->
    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
        <h4>Website Resmi</h4>
        <h2 class="mb-4">(Nama Toko)</h2>
        <p class="mb-4">
            "Kualitas Terbaik, Harga Termurah. Semua Kebutuhan Anda Tersedia di Sini dengan Pelayanan Prima!"
        </p>
    </div>
</div>

    </div>
	<style>
			@media (max-width: 768px) {
    .products-slick {
        flex-wrap: wrap;
        justify-content: center;
    }
    .product {
        width: 100%;
        max-width: 160px;
        height: 30px; /* Atur tinggi sesuai kebutuhan */
    }
}



    body {
        font-family: Arial, sans-serif;
    }

    .kategori-container {
		position: sticky;
    top: 161px; /* Sesuaikan dengan tinggi navbar */
    z-index: 999;

        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #0052cc;
        padding: 15px;
        border-radius: 10px;
        margin: 20px auto;
        max-width: 90%;
    }
	/* Sembunyikan di mobile */
@media (max-width: 768px) { 
    .kategori-container {
        display: none !important;
    }
}	
    .kategori-wrapper {
        display: flex;
        flex-direction: column;
    }

    .kategori-title, .search-title {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 8px;
        text-align: center;
    }

    .kategori-title span:first-child,
    .search-title span:first-child {
        color: orange;
    }

    .kategori-title span:last-child,
    .search-title span:last-child {
        color: white;
    }

    .kategori-slider-wrapper {
        display: flex;
        align-items: center;
        position: relative;
    }

    .kategori-slider {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        scroll-behavior: smooth;
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding: 5px 0;
        flex: 1;
        white-space: nowrap;
        max-width: 600px;
    }

    .kategori-slider::-webkit-scrollbar {
        display: none;
    }

	.kategori-item {
    display: inline-block; /* Supaya ukuran menyesuaikan teks */
    background-color: white;
    color: #004aad;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    text-align: center;
    width: auto; /* Biar lebar menyesuaikan teks */
    min-width: fit-content; /* Supaya tidak ada batas minimal */
    max-width: 100%; /* Biar tidak melebihi parent */
    cursor: pointer;
    white-space: nowrap; /* Pastikan teks tetap satu baris */
	}

    .nav-btn {
        position: relative;
        background: none;
        border: none;
        font-size: 30px;
        font-weight: bold;
        color: white;
        cursor: pointer;
        margin: 0 10px;
    }

    .nav-btn:hover {
        color: orange;
    }

    .search-box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

	.search-input-wrapper {
    display: flex;
    align-items: center;
    background-color: white;
    padding: 10px 15px;
    border-radius: 25px; /* Membuatnya lebih bulat */
    width: 250px; /* Bisa disesuaikan */
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Efek bayangan */
}

.search-input-wrapper i {
    font-size: 16px;
    color: #666;
    margin-right: 8px;
}

.search-input-wrapper input {
    border: none;
    outline: none;
    width: 100%;
    font-size: 14px;
    background: transparent;
}

</style>

<!-- Menggunakan FontAwesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="kategori-container">
    <div class="kategori-wrapper">
        <div class="kategori-title">
            <span>Produk</span> <span>Kategori</span>
        </div>
        <div class="kategori-slider-wrapper">
            <button class="nav-btn left" onclick="scrollLeft()">&#10094;</button>
            <div class="kategori-slider" id="kategoriSlider">
				<a href="<?php echo base_url('kategori/index/alat-tulis')?>"><div class="kategori-item">Alat Tulis</div></a>
                <a href="<?php echo base_url('kategori/index/tinta')?>"><div class="kategori-item">Tinta</div></a>
				<a href="<?php echo base_url('kategori/index/komputer-otomatisasi-kantor')?>"><div class="kategori-item">Komputer & Otomatisasi Kantor</div></a>
				<a href="<?php echo base_url('kategori/index/berkas')?>"><div class="kategori-item">Berkas</div></a>
				<a href="<?php echo base_url('kategori/index/bangunan')?>"><div class="kategori-item">Bangunan</div></a>
            </div>
            <button class="nav-btn right" onclick="scrollRight()">&#10095;</button>
        </div>
    </div>
    <div class="search-box">
        <div class="search-title">
		<?php echo form_open('CariProduk/search', [
  					  'style' => 'display: flex; align-items: center; width: 100%; position: relative;'
						]); ?>
            <span>Cari</span>&nbsp;<span>Produk</span>
        </div>
        <div class="search-input-wrapper">      
            <input type="text" name="keyword" placeholder="Cari produk...">
			
			<button type="submit" class="search-button"
                style="position: absolute; right: 15px; background: none; border: none; cursor: pointer;">
                <i class="fa fa-search"></i>
            </button>
        </div>
		<?php echo form_close()?>
    </div>
</div>


<script>
    const kategoriSlider = document.getElementById("kategoriSlider");
    let scrollAmount = 200; // Jumlah scroll setiap langkah
    let autoScrollInterval;

    function scrollLeft() {
        kategoriSlider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        resetAutoScroll();
    }

    function scrollRight() {
        kategoriSlider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        resetAutoScroll();
    }

    function autoScroll() {
        if (kategoriSlider.scrollLeft + kategoriSlider.clientWidth >= kategoriSlider.scrollWidth) {
            kategoriSlider.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
            kategoriSlider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    }

    function resetAutoScroll() {
        clearInterval(autoScrollInterval);
        autoScrollInterval = setInterval(autoScroll, 2000); // Auto-slide setiap 3 detik
    }

    // Memulai auto-slide saat halaman dimuat
    resetAutoScroll();
</script>

</section>
					<!-- section title -->
					<div class="col-md-12" style="margin-top: 50px; text-align: center;">
    <div class="section-title">
        <h3 class="title">
            <span style="color: blue;">Produk</span> 
            <span style="color: red;">Baru</span>
        </h3>
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav" id="produkBaru">
									<li class="active"><a data-toggle="tab" href="#tab1">Alat Tulis</a></li>
									<li><a data-toggle="tab" href="#tab2">Tinta</a></li>
									<li><a data-toggle="tab" href="#tab3">Produk Komputer & Otomatisasi Kantor</a></li>
									<li><a data-toggle="tab" href="#tab4">Berkas</a></li>
									<li><a data-toggle="tab" href="#tab5">Bangunan</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">

								<!-- tab1 -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<?php foreach ($produk as $list) : ?>
										<!-- product -->
										<div class="product" style="height: 450px">
										<a href="<?php echo base_url('produk/index/') . $list->url_produk ?>">
                                            <div class="product-img">
                                            <img src="<?php echo base_url('assets/uploads/produk/') . $list->gambar ?>" alt="">
                                            <div class="product-label">
                                                <span class="new">BARU</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $list->kategori ?></p>
                                            <h3 class="product-name">
                                                <a href="<?php echo base_url('produk/index/') . $list->url_produk ?>">
                                                    <?php echo $list->nama ?>
                                                </a>
                                            </h3>
                                            <h4 class="product-price">Rp. <?php echo number_format($list->harga, 0, ",", ".") ?></h4>
                                            <!-- Tombol Tanyakan dengan WhatsApp -->
                                            <a href="https://wa.me/628XXXXXXXXXX?text=Halo,%20saya%20ingin%20menanyakan%20tentang%20produk%20<?php echo urlencode($list->nama); ?>" 
                                            class="btn btn-success" target="_blank" 
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; padding: 8px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none;">
                                            <i class="fa-brands fa-whatsapp"></i> Tanyakan
                                            </a>
                                        </div>
                                        </div>
										</a>
										<!-- /product -->
										<?php endforeach; ?>

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>	
									<br>
									<div class="products-slick" data-nav="#slick-nav-2">

										<?php foreach ($produk as $list) : ?>
										<!-- product -->
										<div class="product" style="height: 450px">
										<a href="<?php echo base_url('produk/index/') . $list->url_produk ?>">
                                            <div class="product-img">
                                            <img src="<?php echo base_url('assets/uploads/produk/') . $list->gambar ?>" alt="">
                                            <div class="product-label">
                                                <span class="new">baru</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $list->kategori ?></p>
                                            <h3 class="product-name">
                                                <a href="<?php echo base_url('produk/index/') . $list->url_produk ?>">
                                                    <?php echo $list->nama ?>
                                                </a>
                                            </h3>
                                            <h4 class="product-price">Rp. <?php echo number_format($list->harga, 0, ",", ".") ?></h4>

                                            <!-- Tombol Tanyakan dengan WhatsApp -->
                                            <a href="https://wa.me/628XXXXXXXXXX?text=Halo,%20saya%20ingin%20menanyakan%20tentang%20produk%20<?php echo urlencode($list->nama); ?>" 
                                            class="btn btn-success" target="_blank" 
                                            style="display: flex; align-items: center; justify-content: center; gap: 8px; padding: 8px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none;">
                                            <i class="fa-brands fa-whatsapp"></i> Tanyakan
                                            </a>
                                        </div>
										</a>
                                        </div>
										<!-- /product -->
										<?php endforeach; ?>

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab1 -->

							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<style>
	@media (max-width: 768px) {
    #hot-deal .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .feature-box {
        text-align: center; /* Agar teks dan ikon rata tengah */
        padding: 15px;
        margin-bottom: 15px; /* Tambahkan jarak antar elemen */
    }

    .col-md-6 {
        width: 120%; /* Agar elemen memenuhi lebar layar di perangkat kecil */
        max-width: 120%; /* Batas lebar agar tidak terlalu melebar */
    }

    #hot-deal h2 {
        font-size: 20px; /* Ukuran judul lebih kecil hanya untuk bagian ini */
    }

    #hot-deal p {
        font-size: 14px; /* Ukuran teks lebih kecil hanya untuk bagian ini */
    }

	#hot-deal i {
        font-size: 40px;
        margin-bottom: 10px;
    }
}

</style>
<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase"><strong>Pilihan Tepat <span style="color: #0052cc;">(Nama Toko)</span></strong></h2>
                <p>Karena kami menawarkan kombinasi unik dari keuntungan yang akan memenuhi kebutuhan belanja grosir Anda</p>
            </div>
        </div>
        <!-- row -->
		<div class="row">
    <div class="col-md-6">
        <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <i class="fa fa-medal"></i>
            <h3>Produk Berkualitas</h3>
            <p>Kami menyediakan produk dengan standar kualitas terbaik, memastikan kepuasan pelanggan dengan performa yang handal dan daya tahan yang tinggi.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <i class="fa fa-money-bill-wave"></i>
            <h3>Harga Termurah</h3>
            <p>Kami menawarkan harga yang sangat kompetitif di pasaran, memastikan pelanggan mendapatkan nilai terbaik untuk setiap pembelian mereka tanpa harus mengorbankan kualitas.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <i class="fa fa-box"></i>
            <h3>Tersedia Semua Barang</h3>
            <p>Gudang kami selalu dipenuhi dengan berbagai macam kebutuhan, memastikan pelanggan memiliki akses ke produk yang mereka butuhkan tanpa harus mencari ke tempat lain.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="feature-box" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
            <i class="fa fa-headset"></i>
            <h3>Pelayanan Prima</h3>
            <p>Kami berkomitmen untuk memberikan pelayanan terbaik kepada setiap pelanggan kami. Tim kami siap membantu dan melayani setiap kebutuhan Anda dengan ramah dan profesional.</p>
        </div>
    </div>
</div>

        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!-- /HOT DEAL SECTION -->

<!-- Tambahkan CSS agar mirip dengan desain di gambar -->
<style>
    .feature-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 kolom */
    gap: 30px; /* Jarak antar kotak lebih besar */
    margin: 40px 0; /* Jarak atas & bawah */
}

.feature-box {
    background: #f8f9fa;
    padding: 15px; /* Padding lebih kecil */
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 14px; /* Ukuran teks lebih kecil */
    min-height: 110px; /* Tinggi kotak lebih kecil */
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek saat hover */
	margin-bottom: 30px; /* Menambahkan jarak antar elemen */
}

/* 
.feature-box {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    font-size: 14px;
    min-height: 180px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 30px; /* Menambahkan jarak antar elemen 
} */


/* Efek bayangan saat hover */
.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.2);
}

/* Responsif untuk layar kecil */
@media (max-width: 768px) {
    .feature-container {
        grid-template-columns: 1fr; /* Jadi 1 kolom di layar kecil */
    }
}

    .feature-box i {
        font-size: 30px;
        color: #0052cc;
    }

    .feature-box h3 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }

    .feature-box p {
        margin: 5px 0 0;
        font-size: 14px;
    }
</style>

<!-- Tambahkan Font Awesome jika belum ada -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- Tambahkan Font Awesome jika belum ada -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<!-- SECTION -->
<!-- Section Alamat dan Gudang -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<section style="background: #0046ad; padding: 50px 0; color: white; text-align: center; width: 100%; min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative; box-sizing: border-box;">
<h2 style="font-size: 32px; font-weight: bold; color: white;">
Alamat <span style="color: #FFA500;">Grosir</span>
</h2>

<div style="max-width: 800px; padding: 20px; border-radius: 10px; margin-bottom: 20px;" data-aos="fade-up" data-aos-duration="1000">
    <p style="font-size: 18px;"><i class="fas fa-map-marker-alt"></i> <strong>Toko (Nama Toko)</strong>, Jl. Cempaka No. 88, Patokan, Sukadamai,  Kec. Rahayu, Kab. Lembah Indah, Jawa Timur 65432</p>
    <a href="https://maps.app.goo.gl/5v4WaGXk3VcDw9Ex7" target="_blank" style="text-decoration: none;">
        <button style="background: red; color: white; padding: 12px 25px; border: none; border-radius: 5px; font-weight: bold; font-size: 16px; cursor: pointer;">
            Cek Google Maps
        </button>
    </a>
</div>

<div class="desktop-view" style="display: flex; align-items: center; justify-content: center; width: 80%; margin-top: 40px;">
    <img src="<?php echo base_url('assets/user')?>/img/foto-gudang.png" alt="Gudang"
        style="width: 400px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"
        data-aos="fade-right" data-aos-duration="1000">
    <div style="margin-left: -50px; background: white; padding: 30px; border-radius: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); max-width: 500px; text-align: left;"
        data-aos="fade-left" data-aos-duration="1000">
        <h3 style="font-size: 28px;"><span style="color: red;">Gudang</span> <span style="color: #0046ad;">(Nama Toko)</span></h3>
        <p style="font-size: 18px; line-height: 1.5; color: black;">Kami memiliki penyimpanan barang yang sangat besar dan kapasitas sangat luas, jadi pastinya barang yang kami sediakan banyak dan bermacam-macam.</p>
    </div>
</div>

</section>

					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

					<div class="clearfix visible-sm visible-xs"></div>

		<script>
		$(document).ready(function(){
		    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		        localStorage.setItem('activeTab', $(e.target).attr('href'));
		    });
		    var activeTab = localStorage.getItem('activeTab');
		    if(activeTab){
		        $('#produkBaru a[href="' + activeTab + '"]').tab('show');
		    }
		});
		</script>
