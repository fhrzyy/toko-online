<?php 
$id = $this->session->userdata('id');
$user = $this->db->query("SELECT * FROM user WHERE id='$id'")->result();

foreach($user as $us) {} ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<body>
	<!-- HEADER -->
	<header>
					<!-- TOP HEADER -->
	<div class="top-header" style="background-color: #0052cc; color: white; padding: 15px 0; font-size: 10px; text-align: center; position: fixed; top: 0; width: 100%; z-index: 1000; box-shadow: 0px 2px 5px rgba(0,0,0,0.2);">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: auto;">
        <div class="header-left" style="align-self: center; padding-inline-start: 5px;">
            <span style="position: relative; top: -7px;" id="current-date-time"></span>
				</div>
				<div class="header-right" style="flex: 1; text-align: right;">
				<span style="position: relative; top: -7px;">
				<i class="fa-solid fa-location-dot"></i>&nbsp; Toko (Nama Toko), Jl. Cempaka No. 88, Patokan, Sukadamai,  Kec. Rahayu, Kab. Lembah Indah, Jawa Timur 65432
			</span>
			</div>
			<script>
				$(document).ready(function () {
    $(".search-input").on("focus", function () {
        // Sembunyikan menu dan keranjang agar tidak mengganggu tampilan
        $(".menu-toggle, .dropdown").css({
            "visibility": "hidden",
            "opacity": "0",
            "transition": "opacity 0.3s ease"
        });

        // Pastikan input pencarian melebar sepenuhnya di mode mobile
        $(this).css({
            "width": "50vw", // Gunakan viewport width agar bisa melebar maksimal
            "max-width": "90vw", // Pastikan tidak terbatasi max-width sebelumnya
            "position": "absolute", // Pastikan tidak terpengaruh layout sekitar
            "left": "50%", // Pusatkan input
            "transform": "translateX(-50%)", // Pusatkan dengan transformasi
            "z-index": "1000", // Pastikan tampil di atas elemen lain
            "transition": "width 0.3s ease"
        });
    });

    $(".search-input").on("blur", function () {
        // Tampilkan kembali menu dan keranjang
        $(".menu-toggle, .dropdown").css({
            "visibility": "visible",
            "opacity": "1"
        });

        // Kembalikan ukuran input pencarian ke ukuran semula
        $(this).css({
            "width": "", // Hapus properti agar kembali ke default CSS
            "max-width": "550px",
            "position": "",
            "left": "",
            "transform": "",
            "z-index": ""
        });
    });
});

			</script>
<style>
	@media (max-width: 768px) {
    .cart-dropdown {
        position: absolute;
        width: 300%;
        left: 0;
        right: 0;
        background: white;
        z-index: 1000;
    }
	.hide-on-mobile {
        display: none;
    }
	.search-input {
    transition: all 0.3s ease-in-out;
}	
}
</style>
<script>
	$(document).ready(function () {
    function load_cart() {
        $.ajax({
            url: "<?= base_url('cart/load_cart'); ?>",
            method: "GET",
            success: function (data) {
                $("#detail_cart").html(data);
            }
        });
    }

    load_cart(); // Panggil saat halaman dimuat

    $("#button_cart").on("click", "a", function (e) {
        if ($(this).attr("href") === "#") {
            e.preventDefault();
            alert("Keranjang masih kosong!");
        }
    });
});

</script>
				<script>
			function updateDateTime() {
				const now = new Date();
				const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', timeZone: 'Asia/Jakarta' };
				const formattedDate = now.toLocaleDateString('id-ID', options).replace(/(\d{4})/, '$1,');
				document.getElementById('current-date-time').innerText = formattedDate + " WIB";
			}
			setInterval(updateDateTime, 1000);
			updateDateTime();
		</script>
						</div>
					<nav id="navigation-2">
					<!-- container -->
			<div class="container">
				<div class="nav-wrapper">
					<!-- NAV -->
					<ul class="main-nav2 nav2 navbar-nav2" style="width: 100%; display: flex; justify-content: center; margin: 10px 0;">
					<li class="nav-item logo-container">
						<img src="<?php echo base_url('assets/user')?>/img/logotoko.png" alt=""  style="max-width: 90px; height: auto; margin-bottom: -5px;">
						
    					</li>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
						<li class="search-bar" style="width: 100%; max-width: 550px; position: relative;">
						<?php echo form_open('CariProduk/search', [
  					  'style' => 'display: flex; align-items: center; width: 100%; position: relative;'
						]); ?>
    <input type="text" name="keyword" placeholder="Cari Produk..." class="search-input"
        style="flex: 1; padding: 10px 45px 10px 15px; border: 2px solid #0052cc; border-radius: 50px; font-size: 14px; text-align: left; height: 40px; width: 100%; outline: none; color: black;">
    
    <button type="submit" class="search-button"
        style="position: absolute; right: 15px; background: none; border: none; cursor: pointer;">
        <i class="fa fa-search" style="font-size: 16px; color: #666;"></i>
    </button>
		<?php echo form_close()	?>
						</li>
						<span class="hide-on-mobile">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>


					<!-- ACCOUNT -->
				
							<div class="header-ctn">

								<!-- Cart -->
								<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="color: black;">
										<i class="fa fa-shopping-cart"></i>
										<span>Keranjang</span>
										<div class="qty" id="count_cart"></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list" id="detail_cart"></div>
										<div class="cart-btns" id="button_cart"></div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
								<a href="#" style="color: black;">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
					
						<!-- /ACCOUNT -->	
						<button type="button" 
						class="custom-btn bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition"
						onclick="window.location.href='https://wa.me/62895352747809?text=Halo Admin(Nama Toko),%20saya%20tertarik%20dengan%20layanan%20Anda'">
						<span class="elementor-button-text">Hubungi Kami</span>
					</button>

					</ul>
					<!-- /NAV -->
				</div>
			</div>
			<!-- /container -->
		</nav>

<style>
	.elementor-button-text {
    display: inline-block;
    font-size: 12px; /* Ukuran teks lebih besar */
    font-weight: bold; /* Teks lebih tebal */
}

.custom-btn {
    background-color: #014aff ; /* Warna biru */
    color: white; /* Warna teks */
	padding: 8px 12px !important; /* Pastikan atas-bawah kecil (2px), kiri-kanan (12px) */
    border: none; /* Hapus border default */
    border-radius: 3px; /* Membuat sudut membulat */
    cursor: pointer; /* Mengubah kursor saat hover */
    transition: background-color 0.3s ease-in-out;
	margin-left: 10px; /* Jarak ke kanan */
}

.custom-btn:hover {
    background-color: #0056b3; /* Warna biru lebih gelap saat di-hover */
}

.main-nav2 {
    display: flex;
    align-items: center;
    justify-content: center; /* Menjaga search tetap di tengah */
    width: 100%;
}
.search-bar {
    flex-grow: 1; /* Agar search tetap di tempatnya */
    display: flex;
    justify-content: center;
    position: relative;
}

    .search-input {
        width: 100%;
        max-width: 550px;
        padding: 10px 40px 10px 15px;
        border: 2px solid #0052cc;
        border-radius: 50px;
        font-size: 14px;
        text-align: left;
        height: 40px;
        width: 100%;
        outline: none;
        color: black;
        caret-color: black;
    }
    .search-input::placeholder {
        color: black;
    }
    .search-button {
        position: absolute;
        right: 15px;
        background: none;
        border: none;
        cursor: pointer;
    }
    .search-button i {
        font-size: 16px;
        color: #666;
    }
	
	#responsive-nav {
    text-align: center;
	padding-top: 10px; /* Kurangi sesuai kebutuhan */
    padding-bottom: -20px; /* Bisa disesuaikan juga */
	}
	#responsive-nav ul {
        text-align: center;
    }
    #responsive-nav ul li {
        display: inline-block;
        margin: 0 10px;
    }
    #responsive-nav ul li a {
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding: 8px;
    }

/* Styling dropdown */
/* Styling dropdown */
.dropdown {
    position: relative;
}

/* Dropdown */
.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    color: black;
    width: 200px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.dropdown-menu li a {
    display: block;
    white-space: normal; /* Memungkinkan teks turun ke baris berikutnya */
    word-wrap: break-word; /* Memastikan kata panjang tidak keluar dari kotak */
    width: 180px; /* Sesuaikan dengan lebar dropdown */
    padding: 10px; /* Tambahkan padding agar terlihat rapi */
}


    /* Efek hover dengan background abu-abu muda */
.dropdown-menu li a:hover {
        background-color: #f1f1f1;
}

.dropdown-menu li:last-child {
    border-bottom: none;
}
.dropdown-menu a {
    color: black; /* Warna teks hitam */
    padding: 10px;
    display: block;
    text-decoration: none;
}

.dropdown-menu a:hover {
    background-color: #f1f1f1;
}

/* Tampilkan dropdown saat hover */
.dropdown:hover .dropdown-menu {
    display: block;
}

.header-links li.active a {
    color: orange !important; /* Warna teks saat aktif */
    font-weight: bold; /* Membuat teks lebih tebal */
}

.dropdown-menu li.active a {
    color: orange !important; /* Warna oren untuk sub-menu yang aktif */
    font-weight: bold;
}
</style>
<div class="container">
    <div id="responsive-nav" style="display: flex; justify-content: center;">
        <ul class="header-links" style="display: flex; list-style: none; padding: 0; margin: 0; gap: 20px;">
            <?php 
                $current_page = $this->uri->segment(1); // Ambil segmen pertama dari URL
                $current_subpage = $this->uri->segment(3); // Ambil segmen ketiga dari URL
            ?>

            <li class="<?= ($current_page == 'homepage' || $current_page == '') ? 'active' : '' ?>">
                <a href="<?php echo base_url('homepage') ?>" style="color: white; font-size: 14px;">Beranda</a>
            </li>

            <li class="<?= ($current_page == 'shop') ? 'active' : '' ?>">
                <a href="<?php echo base_url('shop') ?>" style="color: white; font-size: 14px;">Toko</a>
            </li>

            <li class="dropdown">
                <a href="#" style="color: white; font-size: 14px;">Kategori Produk &nbsp;<i class="fas fa-caret-down" style="color: white;"></i></a>
                <ul class="dropdown-menu">
                    <li class="<?= ($current_subpage == 'alat-tulis') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('kategori/index/alat-tulis') ?>" style="color: #333;">Alat Tulis</a>
                    </li>
                    <li class="<?= ($current_subpage == 'tinta') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('kategori/index/tinta') ?>" style="color: #333;">Tinta</a>
                    </li>
                    <li class="<?= ($current_subpage == 'komputer-otomatisasi-kantor') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('kategori/index/komputer-otomatisasi-kantor') ?>" style="color: #333;">Komputer & Otomatisasi Kantor</a>
                    </li>
                    <li class="<?= ($current_subpage == 'berkas') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('kategori/index/berkas') ?>" style="color: #333;">Berkas</a>
                    </li>
                    <li class="<?= ($current_subpage == 'bangunan') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('kategori/index/bangunan') ?>" style="color: #333;">Bangunan</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" style="color: white; font-size: 14px;">Perusahaan &nbsp;<i class="fas fa-caret-down" style="color: white;"></i></a>
                <ul class="dropdown-menu">
                    <li class="<?= ($current_page == 'sejarah') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('sejarah') ?>" style="color: #333;">Sejarah</a>
                    </li>
                    <li class="<?= ($current_page == 'tentangkami') ? 'active' : '' ?>">
                        <a href="<?php echo base_url('tentangkami') ?>" style="color: #333;">Tentang Kami</a>
                    </li>
                </ul>
            </li>

            <li class="<?= ($current_page == 'kontak') ? 'active' : '' ?>">
                <a href="<?php echo base_url('kontak') ?>" style="color: white; font-size: 14px;">Kontak</a>
            </li>
        </ul>
    </div>
</div>
				</div>
			</div>
			<!-- /TOP HEADER -->
			<div id="mobile-nav">
    <div class="menu-header">
        <span class="menu-text">Menu</span>
        <img src="<?php echo base_url('assets/user')?>/img/logotoko.png" alt="Logo" class="menu-logo">
        <a href="#" id="close-menu"><i class="fa fa-times"></i></a>
    </div>



    <ul class="mobile-menu">
        <li class="<?= ($current_page == 'homepage' || $current_page == '') ? 'active' : '' ?>">
            <a href="<?php echo base_url('homepage') ?>">Beranda</a>
        </li>

        <li class="<?= ($current_page == 'shop') ? 'active' : '' ?>">
            <a href="<?php echo base_url('shop') ?>">Toko</a>
        </li>

        <li class="dropdown">
            <a href="#" class="toggle-submenu">Kategori Produk &nbsp;<i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li class="<?= ($current_subpage == 'alat-tulis') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('kategori/index/alat-tulis') ?>">Alat Tulis</a>
                </li>
                <li class="<?= ($current_subpage == 'tinta') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('kategori/index/tinta') ?>">Tinta</a>
                </li>
                <li class="<?= ($current_subpage == 'komputer-otomatisasi-kantor') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('kategori/index/komputer-otomatisasi-kantor') ?>">Komputer & Otomatisasi Kantor</a>
                </li>
                <li class="<?= ($current_subpage == 'berkas') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('kategori/index/berkas') ?>">Berkas</a>
                </li>
                <li class="<?= ($current_subpage == 'bangunan') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('kategori/index/bangunan') ?>">Bangunan</a>
                </li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="toggle-submenu">Perusahaan &nbsp;<i class="fas fa-caret-down"></i></a>
            <ul class="submenu">
                <li class="<?= ($current_page == 'sejarah') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('sejarah') ?>">Sejarah</a>
                </li>
                <li class="<?= ($current_page == 'tentangkami') ? 'active' : '' ?>">
                    <a href="<?php echo base_url('tentangkami') ?>">Tentang Kami</a>
                </li>
            </ul>
        </li>

        <li class="<?= ($current_page == 'kontak') ? 'active' : '' ?>">
            <a href="<?php echo base_url('kontak') ?>">Kontak</a>
        </li>
    </ul>
</div>
<style>@media (min-width: 769px) {
    #mobile-nav {
        display: none; /* Sembunyikan menu mobile di desktop */
    }
}

@media (max-width: 768px) {
    #mobile-nav {
        position: fixed;
        left: 0;
        top: 0;
        background: #E8F0FE;
        height: 100vh;
        width: 100%;
        overflow-y: auto;
        z-index: 1000;
        padding: 20px;
        transform: translateX(-100%);
        transition: transform 0.3s ease-in-out;
    }

    #mobile-nav.active {
        transform: translateX(0%);
    }

    /* Header menu */
	.menu-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 10px;
        border-bottom: 2px solid #ccc;
        position: relative;
    }

	.menu-logo {
        height: 60px;
        margin-left: 10px; /* Geser logo ke kiri */
    }

	.menu-text {
        font-size: 16px;
        font-weight: bold;
        color: blue; /* Warna biru */
        position: absolute;
        left: 50%;
        transform: translateX(-50%); /* Supaya teks ada di tengah */
    }
	#close-menu {
        font-size: 24px;
        color: red;
        cursor: pointer;
        position: absolute;
        right: 10px;
    }

    /* Style menu utama */
	.mobile-menu {
        text-align: center; /* Pusatkan teks */
    }


    .mobile-menu li {
        padding: 10px 0;
    }

	.mobile-menu li a {
        font-weight: bold;
        font-size: 15px;
        color: #333;
        display: block;
        padding: 12px 0;
        text-align: center;
    }
	  /* Warna oranye saat aktif */
	  .mobile-menu li.active a,
    .mobile-menu li a:hover {
        color: orange !important;
    }

    /* Untuk submenu */
    .submenu li.active a,
    .submenu li a:hover {
        color: orange !important;
    }

    .mobile-menu .dropdown > a {
        font-weight: bold;
    }

    /* Submenu */
    .submenu {
        display: none;
        padding-left: 20px;
    }

    .submenu li {
        padding: 5px 0;
    }

    .submenu a {
        font-size: 14px;
        color: #555;
    }
}
@media (max-width: 768px) {
    .header-links {
        display: none !important; /* Sembunyikan menu desktop di mobile */
    }
}



@media (max-width: 768px) {
	.header-container {
		display: flex;
		align-items: center;
		width: 100%;
		position: relative; /* Tambahkan ini agar absolute bekerja */
	}

	/* Keranjang ada di kiri */
	.cart-dropdown {
		order: 1;
		margin-left: auto;
	}

	/* Search tetap di tengah */
	.search-bar {
		order: 0;
		flex-grow: 1;
		text-align: center;
		max-width: 60%;
	}

	/* Menu-toggle ada di kanan */
	.menu-toggle {
		position: absolute;
		left: 10px;
	
	}

	/* Sembunyikan tombol "Hubungi Kami" */
	.custom-btn {
		display: none !important;
	}
}

@media only screen and (max-width: 991px) {
  .header-ctn .menu-toggle {
    display: inline-block;
  }
/* Style untuk top-header agar menjadi background */
.top-header {
	background-color: #15161D; /* Warna sesuai desain */
	padding: 10px 15px;
	display: flex;
	justify-content: center;
	align-items: center;
}

/* Menghapus logo */
.nav-item.logo-container {
	display: none;
}

/* Search bar agar responsif */
.search-bar {
	width: 100%;
	max-width: 500px; /* Batasi lebar maksimum */
	display: flex;
	align-items: center;
	background: #fff;
	border-radius: 25px;
	padding: 5px 10px;
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
/* Input search agar fleksibel */
.search-bar input {
	flex: 1;
	border: none;
	outline: none;
	padding: 8px 12px;
	font-size: 16px;
	border-radius: 20px;
}

/* Tombol search */
.search-bar button {
	background: #ff6600;
	border: none;
	padding: 8px 12px;
	color: white;
	border-radius: 20px;
	cursor: pointer;
}

/* Responsif agar search-bar mengecil */
@media only screen and (max-width: 768px) {
	.search-bar {
			max-width: 300px;
			padding: 5px;
	}

	.search-bar input {
			font-size: 14px;
			padding: 6px 8px;
	}

	.search-bar button {
			padding: 6px 8px;
			font-size: 14px;
	}
}
/* Menghilangkan header-left dan header-right */
.header-left,
.header-right {
		display: none !important;
}}
</style> 

<script>
	window.addEventListener('resize', function() {
    if (window.innerWidth > 768) {
        document.getElementById('responsive-nav').classList.remove('active');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const mobileNav = document.getElementById("mobile-nav");
    const closeMenu = document.getElementById("close-menu");
    const dropdowns = document.querySelectorAll(".toggle-submenu");

    // Toggle menu mobile
    document.querySelector(".menu-toggle").addEventListener("click", function () {
        mobileNav.classList.add("active");
    });

    closeMenu.addEventListener("click", function () {
        mobileNav.classList.remove("active");
    });

    // Toggle submenu
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("click", function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === "block" ? "none" : "block";
        });
    });
});
</script>
			<!-- MAIN HEADER -->

			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<!-- <div class="col-md-3">
							<div class="header-logo">
								<a href="<?php echo base_url('') ?>" class="logo">
								<img src="<?php echo base_url('assets/user')?>/img/logotoko.png" alt="" style="max-width: 100px; height: auto; margin-bottom: 5px;">
								</a>
							</div>
						</div> -->
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-3">
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<!-- <div class="col-md-6 clearfix">
							<div class="header-ctn"> -->

								<!-- Cart -->
								<!-- <div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Keranjang</span>
										<div class="qty" id="count_cart"></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list" id="detail_cart"></div>
										<div class="cart-btns" id="button_cart"></div>
									</div>
								</div> -->
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<!-- <div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div> -->
								<!-- /Menu Toogle -->
							<!-- </div>
						</div> -->
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<!-- <ul class="main-nav nav navbar-nav">
						<li class="<?php if($this->uri->segment(1) == 'homepage' || $this->uri->segment(1) == '') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('homepage')?>">Home</a></li>
						<li class="<?php if($this->uri->segment(3) == 'alat-tulis') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('kategori/index/alat-tulis') ?>">Alat Tulis</a></li>
						<li class="<?php if($this->uri->segment(3) == 'tinta') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('kategori/index/tinta') ?>">Tinta</a></li>
						<li class="<?php if($this->uri->segment(3) == 'komputer-otomatisasi-kantor') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('kategori/index/komputer-otomatisasi-kantor') ?>">Komputer & Otomatisasi Kantor</a></li>
						<li class="<?php if($this->uri->segment(3) == 'berkas') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('kategori/index/berkas') ?>">Berkas</a></li>
						<li class="<?php if($this->uri->segment(3) == 'bangunan') { echo 'active'; } else {echo ''; } ?>"><a href="<?php echo base_url('kategori/index/bangunan') ?>">Bangunan</a></li>
					</ul> -->
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- Modal Success -->
		<div class="modal fade" id="ModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-body text-center" style="padding: 40px">
						<a class="text-success"><i class="fa fa-5x fa-check-circle-o" aria-hidden="true"></i></a>
						<h5 style="padding-top: 20px">Ditambahkan kedalam keranjang!</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Success -->

		<!-- Modal addWishlist -->
		<div class="modal fade" id="addWishlist" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-body text-center" style="padding: 40px">
						<a class="text-success"><i class="fa fa-5x fa-check-circle-o" aria-hidden="true"></i></a>
						<h5 style="padding-top: 20px">Ditambahkan kedalam wishlist!</h5>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal addWishlist -->

		<script>
		$(document).ready(function(){
				$('#count_cart').load("<?php echo site_url('cart/count_cart');?>");
        		$('#button_cart').load("<?php echo site_url('cart/show_button_cart');?>");
				$('.add-to-cart-btn').click(function(){
					var id = $(this).data("id");
					var nama = $(this).data("nama");
					var harga = $(this).data("harga");
					var gambar = $(this).data("gambar");
					var url = $(this).data("url");
					var quantity = $('#' + id).val();
						$.ajax({
								url : "<?php echo site_url('cart/add_to_cart');?>",
								method : "POST",
								data : {id: id, nama: nama, harga: harga, quantity: quantity, gambar: gambar, url: url},
								success: function(data){
										$('#detail_cart').html(data);
										$('#count_cart').load("<?php echo site_url('cart/count_cart');?>");
                    					$('#button_cart').load("<?php echo site_url('cart/show_button_cart');?>");
										$('#ModalSuccess').modal('show');
										setTimeout(function() {
											$('#ModalSuccess').modal('hide')
										}, 3000);
								}
						});
				});

				$('#read_all_notif').click(function(){
                    var read = $(this).data("read");
						$.ajax({
								url : "<?php echo site_url('notifikasi/read_all_notif');?>",
                                method : "POST",
								data : {read: read},
								success: function(data){
									$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
									$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
								}
						});
				});

                $('#delete_all_notif').click(function(){
						$.ajax({
								url : "<?php echo site_url('notifikasi/delete_all_notif');?>",
								success: function(data){
									$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
									$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
								}
						});
				});

				// Load shopping cart
				$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
				$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
				$('#detail_cart').load("<?php echo site_url('cart/load_cart');?>");

		});
		</script>

		<script type="text/javascript">
			var status_expired_order = window.setInterval(update_status_expired_order, 2000);
			var status_expired_shipment = window.setInterval(update_status_expired_shipment, 2000);
			var status_expired_arrived = window.setInterval(update_status_arrived_order, 2000);

			//cek pesanan yang sudah expired setiap 2 detik
			function update_status_expired_order() {
					$.ajax({
							url: "<?php echo site_url('update_status/update_status_expired_order');?>",
							dataType: 'text',
								success: function(data){
								$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
								$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
                      }
					})
			}

			//cek pesanan yang sudah melbihi batas pengiriman setiap 2 detik
			function update_status_expired_shipment() {
					$.ajax({
							url: "<?php echo site_url('update_status/update_status_expired_shipment');?>",
							dataType: 'text',
								success: function(data){
								$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
								$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
                      }
					})
			}

			//cek pesanan selesai
			function update_status_arrived_order() {
                  $.ajax({
                      url: "<?php echo site_url('update_status/update_status_arrived_order');?>",
                      dataType: 'text',
                      		success: function(data){
							$('#detail_notif').load("<?php echo site_url('notifikasi/load_notif');?>");
							$('#icon_notif').load("<?php echo site_url('notifikasi/notif_button');?>");
                      }
                  })
              }
		</script>
