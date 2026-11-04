<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - (Nama Toko) Stationery Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- Tambahkan AOS di Head -->

	<!-- Tambahkan AOS di Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

	<style>
		
		#breadcrumb {
		
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
		
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
            height: 400px; /* Memanjangkan ke atas/bawah */
            width: 250px; /* Membuat lebih ramping */
            justify-content: space-between;
            align-items: center;
            margin: 15px auto; /* Menambah jarak atas dan bawah */
        }
        .product-card:hover {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .product-image {
            max-width: 100%;
            height: 200px; /* Perbesar gambar */
            object-fit: contain; /* Gambar tampil penuh */
            margin-bottom: 10px;
        }
        .product-info {
            flex-grow: 1;
            text-align: center;
        }
        .product-name {
            font-weight: bold;
            font-size: 14px;
            margin-top: 5px;
        }
        .product-price {
            color: blue;
            font-size: 16px;
            margin: 8px 0;
        }
		.btn-tanya {
            background-color: #25D366; /* Warna hijau WhatsApp */
            color: white;
            border-radius: 5px;
            padding: 6px 12px;
            text-decoration: none;
            display: inline-block;
            width: 100%;
            font-size: 14px;
            font-weight: bold;
        }
        .btn-tanya:hover {
            background-color: #1EBE5D; /* Warna hijau lebih gelap saat hover */
        }

		.produk-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 kolom di desktop */
    gap: 15px; /* Jarak antar produk */
}

/* Medium Screen (Tablet) */
@media (max-width: 1024px) {
    .produk-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 produk per baris */
    }
}

/* Small Screen (HP) */
@media (max-width: 768px) {
    .produk-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 produk per baris */
    }
}

/* Extra Small Screen (HP Kecil) */
@media (max-width: 480px) {
    .produk-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 produk per baris jika layar lebih kecil */
    }
}

/* Style Card */
.product-card {
    background: white;
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 5px;
}
.product-card img {
    max-width: 100%;
    height: auto;
}
body {
    background-color: #FBFBFC;
}


    </style>
</head>
<body>
<br>
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
<div class="container mt-4">
<h3 class="text-center" style="color: blue; font-weight: bold;">
    <span style="color: blue;">Produk</span> <span style="color: red;">Kami</span>
</h3>

	<p class="text-center">Menampilkan <?= count($produk) ?> dari total <?= $total_produk ?> produk</p>

	<div class="row">
    <?php foreach ($produk as $index => $p) : ?>
		<a href="<?= base_url('produk/index/') . $p->url_produk; ?>">
        <div class="col-md-3 mb-4 d-flex justify-content-center" 
             data-aos="<?= ($index % 2 == 0) ? 'fade-right' : 'fade-left'; ?>" 
             data-aos-delay="<?= $index * 50; ?>" 
             data-aos-duration="600">

            <div class="product-card" style="opacity: 0; transform: scale(0.95); transition: opacity 0.5s ease, transform 0.5s ease;">
                <img src="<?= base_url('assets/uploads/produk/' . $p->gambar); ?>" class="product-image" alt="<?= $p->nama; ?>">
                <div class="product-info">
                    <!-- Menampilkan kategori produk -->
                    <p class="product-category"><?= $p->kategori; ?></p>
                    
                    <!-- Nama produk dengan link ke halaman produk -->
                    <h3 class="product-name">
                        <a href="<?= base_url('produk/index/') . $p->url_produk; ?>">
                            <?= $p->nama; ?>
                        </a>
                    </h3>
                    
                    <!-- Harga produk -->
                    <h4 class="product-price">Rp <?= number_format($p->harga, 0, ',', '.'); ?></h4>
                </div>
                
                <!-- Tombol Tanyakan via WhatsApp -->
                <a href="https://wa.me/62895352747809?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20<?= urlencode($p->nama); ?>" 
                   class="btn btn-success" target="_blank" 
                   style="display: flex; align-items: center; justify-content: center; gap: 8px; padding: 8px; background-color: #25D366; color: white; border-radius: 5px; text-decoration: none;">
                    <i class="fab fa-whatsapp"></i> Tanyakan
                </a>
            </div>
        </div>
		</a>
    <?php endforeach; ?>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const productCards = document.querySelectorAll(".product-card");
        productCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "scale(1)";
            }, index * 100);
        });
    });
</script>




	<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    <?= $pagination ?>
</div>
</div>
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
