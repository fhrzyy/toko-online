<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - (Nama Toko) Stationery Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<style>
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
    </style>
</head>
<body>
<br>
<div class="container mt-4">
    <h3 class="text-center">Hasil Pencarian</h3>
    
    <?php if (isset($pesan)): ?>
        <div class="alert alert-warning text-center">
            <?= $pesan; ?>
        </div>
    <?php endif; ?>
    
    <div class="row">
        <?php if (!empty($produk)): ?>
            <?php foreach ($produk as $p): ?>
                <div class="col-md-3 mb-4 d-flex justify-content-center">
                    <div class="product-card">
                        <img src="<?= base_url('assets/uploads/produk/' . $p->gambar); ?>" class="product-image" alt="<?= $p->nama; ?>">
                        <div class="product-info">
                            <p class="product-category"><?= isset($p->kategori) ? $p->kategori : 'Tidak Ada Kategori'; ?></p>
                            <h3 class="product-name">
                                <a href="<?= base_url('produk/index/') . $p->url_produk; ?>">
                                    <?= $p->nama; ?>
                                </a>
                            </h3>
                            <h4 class="product-price">Rp <?= number_format($p->harga, 0, ',', '.'); ?></h4>
                        </div>
                        <a href="https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya%20tentang%20produk%20<?= urlencode($p->nama); ?>" 
                           class="btn btn-success" target="_blank">
                            <i class="fab fa-whatsapp"></i> Tanyakan
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Produk tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</div>

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
