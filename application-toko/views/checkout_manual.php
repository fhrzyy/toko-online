<form action="<?= base_url('snapmanual/finish') ?>" method="post" enctype="multipart/form-data">
    <label>Jasa Pengiriman:</label>
    <select name="id_ekspedisi" required>
        <option value="JNE">JNE</option>
        <option value="POS">POS Indonesia</option>
        <option value="TIKI">TIKI</option>
    </select>

    <label>Catatan untuk Penjual:</label>
    <textarea name="catatan"></textarea>

    <label>Pilih Metode Pembayaran:</label>
    <select name="payment_method" id="payment_method" required>
        <option value="Transfer Manual">Transfer Manual</option>
        <option value="COD">Cash on Delivery (COD)</option>
    </select>

    <div id="transfer_section" style="display: none;">
        <p>Silakan transfer ke rekening: <strong>BRI 123-456-789</strong> a.n. Toko Kita</p>
        <label>Unggah Bukti Transfer:</label>
        <input type="file" name="bukti_transfer" accept="image/*">
    </div>

    <button type="submit">Pesan Sekarang</button>
</form>

<script>
    document.getElementById("payment_method").addEventListener("change", function() {
        document.getElementById("transfer_section").style.display = (this.value == "Transfer Manual") ? "block" : "none";
    });
</script>
