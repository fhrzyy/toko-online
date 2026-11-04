<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="<?php echo base_url('homepage') ?>" style="color: red;">Beranda</a></li>
                    <li class="active"  style="color: blue;">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">


				<!-- row -->
				<div class="row">
				<?php
			$nomor_wa = "+62895352747809"; // Ganti dengan nomor WhatsApp tujuan
			$nama_pengguna = $this->session->userdata('nama');
			$alamat = $this->session->userdata('alamat') . ", Kota " . $this->session->userdata('kota') . ", " . $this->session->userdata('kode_pos');
			$catatan = $this->input->post('catatan');
			$jasa_kirim = $this->input->post('id_ekspedisi');
			$pesanan = "Halo, saya ingin melakukan pemesanan dengan rincian berikut:\n";
			$pesanan .= "Nama: $nama_pengguna\n";
			$pesanan .= "Alamat: $alamat\n";
			$pesanan .= "Jasa Kirim: $jasa_kirim\n";
			foreach ($this->cart->contents() as $item) {
			    $pesanan .= "- " . $item['qty'] . "x " . $item['name'] . " (Rp. " . number_format($item['price'], 0, ",", ".") . ")\n";
			}
			$total = number_format($this->cart->total(), 0, ",", ".");
			$pesanan .= "\nTotal: Rp. $total\nCatatan: $catatan";
			$link_wa = "https://wa.me/$nomor_wa?text=" . urlencode($pesanan);
			?>

					<?php echo $this->session->flashdata('sukses') ?>
					<?php echo $this->session->flashdata('gagal') ?>

					<form id="checkout-form" method="post" action="<?= site_url('checkout/placeOrder') ?>"autocomplete="off">
                <input type="hidden" name="result_type" id="result-type" value="">
                <input type="hidden" name="result_data" id="result-data" value="">
                
                <div class="col-md-7">
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">Pengiriman</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="nama" placeholder="Nama Lengkap" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="alamat" placeholder="Alamat Rumah Pengiriman" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="kota" placeholder="Kota" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input class="input" type="number" name="kode_pos" placeholder="Kode Pos" required autocomplete="off">
                        </div>
                    </div>
                    <div class="section-title">
                        <h3 class="title">Catatan</h3>
                    </div>
                    <div class="order-notes">
                        <textarea class="input" id="catatan" name="catatan" placeholder="Catatan Pesanan"></textarea>
                    </div>
                </div>
                
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Pesanan Anda</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUK</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <?php foreach ($this->cart->contents() as $items) : ?>
                            <div class="order-products">
                                <div class="order-col">
                                    <div><b><?php echo $items['qty']; ?>x</b> <?php echo $items['name']; ?></div>
                                    <div>Rp. <?php echo number_format($items['price'], 0, ",", "."); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        
                        <div style="padding-top: 20px; padding-bottom: 20px">
                            <h5>Pilih Metode Pembayaran (Opsional)</h5>
                            <select class="form-control" id="metode_pembayaran" name="payment_method">
                                <option value="" selected>Pilih Pembayaran</option>
								<option value="bca">COD(Bayar di tempat)</option>
                                <option value="bca">BCA Virtual Account</option>
                                <option value="bni">BNI Virtual Account</option>
                                <option value="bri">BRI Virtual Account</option>
                                <option value="mandiri">Mandiri Virtual Account</option>
                                <option value="gopay">GoPay</option>
                                <option value="shopeepay">ShopeePay</option>
                                <option value="ovo">OVO</option>
                                <option value="dana">DANA</option>
                                <option value="credit_card">Kartu Kredit/Debit</option>
                            </select>
                        </div>
                        
                        <div style="padding-top: 20px; padding-bottom: 20px">
                            <h5>Pilih Jasa Kirim (Opsional)</h5>
                            <select class="form-control" id="jasa_kirim" name="id_ekspedisi">
                                <option value="" selected>Pilih Pengiriman</option>
                                <?php foreach ($ekspedisi as $list) { ?>
                                    <option value="<?php echo $list->nama_ekspedisi ?> - <?php echo $list->jenis_ekspedisi ?>">
                                        <?php echo $list->nama_ekspedisi ?> - <?php echo $list->jenis_ekspedisi ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="order-col">
                            <div>Ongkos Pengiriman</div>
                            <div><strong>GRATIS</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">Rp. <?php echo number_format($this->cart->total(), 0, ",", "."); ?></strong></div>
                        </div>
                    </div>
                    <button id="wa-button" class="primary-btn order-submit" style="width: 100%">Buat Pesanan via WhatsApp</button>
                </div>
            </form>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Terima Kasih Sudah Belanja di <strong>(Nama Toko) !</strong></p>
						
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
		<script>
document.getElementById("wa-button").addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah form submit

    var nomor_wa = "62895352747809"; // Nomor WhatsApp tujuan (tanpa +)
    var nama = document.querySelector("input[name='nama']").value.trim();
    var alamat = document.querySelector("input[name='alamat']").value.trim();
    var kota = document.querySelector("input[name='kota']").value.trim();
    var kode_pos = document.querySelector("input[name='kode_pos']").value.trim();
    var jasa_kirim = document.getElementById("jasa_kirim").value.trim() || "- (Tidak memilih)";
    var metode_pembayaran = document.getElementById("metode_pembayaran").value.trim() || "- (Tidak memilih)";
    var catatan = document.getElementById("catatan").value.trim() || "-";

    // ✅ Validasi: Input Wajib Diisi (kecuali jasa kirim, metode pembayaran, dan catatan)
    if (!nama || !alamat || !kota || !kode_pos) {
        alert("Harap isi semua data wajib sebelum melanjutkan!");
        return;
    }

    // ✅ Validasi: Kode Pos harus 5 digit angka
    var regexKodePos = /^\d{5}$/;
    if (!regexKodePos.test(kode_pos)) {
        alert("Kode pos harus terdiri dari 5 digit angka!");
        return;
    }

    // Format Alamat
    var alamat_lengkap = `${alamat}, Kota ${kota}, ${kode_pos}`;

    // 🛒 Format Pesanan ke WhatsApp
    var pesanan = `Halo Admin (Nama Toko), saya ingin melakukan pemesanan dengan rincian berikut:%0A`;
    pesanan += `Nama: ${nama}%0A`;
    pesanan += `Alamat: ${alamat_lengkap}%0A`;
    pesanan += `Jasa Kirim: ${jasa_kirim}%0A`;
    pesanan += `Metode Pembayaran: ${metode_pembayaran}%0A%0A`;
    pesanan += `Produk yang dipesan:%0A`;

    // ✅ Looping Produk (Agar bisa mengambil produk yang ada di keranjang)
    <?php foreach ($this->cart->contents() as $item) { ?>
        pesanan += `- <?php echo $item['qty']; ?>x <?php echo addslashes($item['name']); ?> (Rp. <?php echo number_format($item['price'], 0, ",", "."); ?>)%0A`;
    <?php } ?>

    var total = "Rp. <?php echo number_format($this->cart->total(), 0, ",", "."); ?>";
    pesanan += `%0A**Total: ${total}**%0A`;

    // ✅ Tambahkan Catatan di bagian bawah
    pesanan += `%0A📌 Catatan: ${catatan}%0A`;

    // 🔗 Buka WhatsApp
    var link_wa = `https://wa.me/${nomor_wa}?text=${pesanan}`;
    window.open(link_wa, "_blank");

    // ⏳ Tunggu 3 detik sebelum pindah ke halaman selesai.php
    setTimeout(function() {
        window.location.href = "<?= site_url('selesai') ?>";
    }, 3000); // 3 detik delay sebelum redirect
});
</script>
<script>
document.getElementById("wa-button").addEventListener("click", function(event) {
    event.preventDefault(); // Mencegah form submit

    var nomor_wa = "62895352747809"; // Nomor WhatsApp tujuan (tanpa +)
    var nama = document.querySelector("input[name='nama']").value.trim();
    var alamat = document.querySelector("input[name='alamat']").value.trim();
    var kota = document.querySelector("input[name='kota']").value.trim();
    var kode_pos = document.querySelector("input[name='kode_pos']").value.trim();
    var jasa_kirim = document.getElementById("jasa_kirim").value.trim() || "- (Tidak memilih)";
    var metode_pembayaran = document.getElementById("metode_pembayaran").value.trim() || "- (Tidak memilih)";
    var catatan = document.getElementById("catatan").value.trim() || "- (Tidak memilih)";

    // ✅ Validasi Input
    if (!nama || !alamat || !kota || !kode_pos) {
        alert("Harap isi semua data wajib sebelum melanjutkan!");
        return;
    }

    // ✅ Validasi Kode Pos (5 Digit)
    var regexKodePos = /^\d{5}$/;
    if (!regexKodePos.test(kode_pos)) {
        alert("Kode pos harus terdiri dari 5 digit angka!");
        return;
    }

    // Format Alamat
    var alamat_lengkap = `${alamat}, Kota ${kota}, ${kode_pos}`;

    // 🛒 Format Pesanan ke WhatsApp
    var pesanan = `Halo, saya ingin melakukan pemesanan dengan rincian berikut:%0A`;
    pesanan += `Nama: ${nama}%0A`;
    pesanan += `Alamat: ${alamat_lengkap}%0A`;
    pesanan += `Jasa Kirim: ${jasa_kirim}%0A`;
    pesanan += `Metode Pembayaran: ${metode_pembayaran}%0A%0A`;

    // ✅ Looping Produk
    <?php foreach ($this->cart->contents() as $item) { ?>
        pesanan += `- <?php echo $item['qty']; ?>x <?php echo addslashes($item['name']); ?> (Rp. <?php echo number_format($item['price'], 0, ",", "."); ?>)%0A`;
    <?php } ?>

    var total = "Rp. <?php echo number_format($this->cart->total(), 0, ",", "."); ?>";
    pesanan += `%0A**Total: ${total}**%0A`;

    // ✅ Tambahkan Catatan
    pesanan += `Catatan: ${catatan}%0A`;

    // 🔗 Buka WhatsApp
    var link_wa = `https://wa.me/${nomor_wa}?text=${pesanan}`;
    window.open(link_wa, "_blank");

    // ⏳ Hapus Keranjang setelah pesan terkirim
    setTimeout(function() {
        $.ajax({
            url: "<?php echo base_url(); ?>keranjang/empty_cart",
            method: "POST",
            success: function(response) {
                console.log("Keranjang dikosongkan:", response);
                $('#view_cart').html(""); // Kosongkan tampilan keranjang
                $('#count_cart').load("<?php echo site_url('cart/count_cart');?>");
                $('#button_cart').load("<?php echo site_url('cart/show_button_cart');?>");

                // 🔄 Refresh halaman agar benar-benar kosong
                setTimeout(function() {
                    window.location.reload();
                }, 1000);
            },
            error: function(xhr, status, error) {
                console.error("Error menghapus keranjang:", error);
            }
        });

        // 🔀 Redirect ke halaman selesai setelah 4 detik
        setTimeout(function() {
            window.location.href = "<?= site_url('selesai') ?>";
        }, 4000);
    }, 3000); // 3 detik delay sebelum penghapusan
});
</script>
<script>
document.getElementById('checkout-form').addEventListener('submit', function() {
    // Bersihkan field setelah submit
    setTimeout(() => {
        this.reset(); // Mengosongkan semua input
    }, 100); // Delay sedikit biar proses pengiriman tidak terganggu
});
</script>








		
