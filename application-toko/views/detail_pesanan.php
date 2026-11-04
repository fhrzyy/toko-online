<!-- SECTION -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php if (!empty($transaksi)) : ?>
          <?php foreach($transaksi as $data) : ?>
            <?php 
              $batas_pembayaran = date('Y-m-d H:i', strtotime($data->transaction_time . ' +1 day'));
							$dikirim_sebelum = isset($data->settlement_time) ? date('Y-m-d', strtotime($data->settlement_time . ' +3 day')) : '';
							$estimated_time = isset($pengiriman->tgl_dikirim) ? date('Y-m-d', strtotime($pengiriman->tgl_dikirim . ' +3 day')) : 'Estimasi tidak tersedia';							
            ?>
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-6">
                    <a href="#" onclick="goBack()"><i class="fa fa-chevron-left"></i> KEMBALI</a>
                  </div>
                  <div class="col-lg-6 text-right">
                    <a>NO. PESANAN: <?php echo $data->order_id ?> | <b><?php echo $data->status ?></b></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p>Tidak ada transaksi ditemukan.</p>
        <?php endif; ?>
        
				<?php if (!empty($pengiriman) && is_object($pengiriman)) : ?>
    		<p><?php echo $pengiriman->no_resi; ?></p>
					<p>Estimasi Sampai: <?php echo date('Y-m-d', strtotime($pengiriman->tgl_dikirim . ' +3 day')); ?></p>
			<?php else : ?>
					<p>Data pengiriman tidak ditemukan.</p>
			<?php endif; ?>

        <?php if (!empty($notif)) : ?>
          <?php foreach($notif as $n) : ?>
            <?php $waktu_dibatalkan = $n->created; ?>
          <?php endforeach; ?>
        <?php endif; ?>

        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 15px">
              <div class="col-lg-12">
                <?php if(isset($data->status)) : ?>
                  <a>
                    <?php 
                      switch ($data->status) {
                        case 'Belum Bayar': echo "Bayar sebelum <b>$batas_pembayaran</b>"; break;
                        case 'Dikemas': echo "Pesanan akan dikirim sebelum <b>$dikirim_sebelum</b>"; break;
                        case 'Dikirim': echo "Estimasi sampai <b>$estimated_time</b>"; break;
                        case 'Selesai': echo "Terimakasih atas pesanan anda!"; break;
                        case 'Dibatalkan':
                          if ($data->settlement_time) {
                            echo "Pesanan dibatalkan oleh sistem karena penjual tidak mengirimkan pesanan.";
                          } else {
                            echo "Pesanan dibatalkan oleh sistem karena pembayaran tidak bisa dikonfirmasi.";
                          }
                          break;
                      }
                    ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
            
            <div class="row" style="padding-top: 20px">
              <div class="col-lg-6">
                <p style="font-size: 18px">Alamat Pengiriman</p>
              </div>
              <div class="col-lg-6 text-right">
                <?php echo $data->jenis_ekspedisi . ' - ' . $data->nama_ekspedisi; ?>
                <?php if($data->status == 'Dikirim' || $data->status == 'Selesai') : ?>
                  <p><?php echo $pengiriman->no_resi ?></p>
                <?php endif; ?>
              </div>
            </div>
            
            <div class="row" style="padding-top: 20px; border-bottom: 1px solid lightgrey">
              <div class="col-lg-4" style="border-right: 1px solid lightgrey">
                <h5><?php echo $data->nama ?></h5>
                <p><?php echo $data->no_telp ?></p>
                <p><?php echo $data->alamat ?></p>
                <p><?php echo $data->kota ?>, <?php echo $data->kode_pos ?></p>
              </div>
            </div>
            
            <?php if (!empty($item_pesanan)) : ?>
              <?php foreach($item_pesanan as $list) : ?>
                <div class="row" style="padding-bottom: 20px; padding-top: 20px; background-color: #fafafa">
                  <div class="col-lg-1">
                    <img class="img-thumbnail" src="<?php echo base_url('assets/uploads/produk/') . $list->gambar ?>" style="width: 150px">
                  </div>
                  <div class="col-lg-11">
                    <a href="<?php echo base_url('produk/index/') . $list->url_produk ?>" style="font-size: 16px"><?php echo $list->nama ?></a>
                    <div class="row">
                      <div class="col-lg-6">
                        <p>x <?php echo $list->quantity ?></p>
                      </div>
                      <div class="col-lg-6 text-right">
                        <a>Rp. <?php echo number_format($list->sub_total,0,",",".") ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else : ?>
              <p>Tidak ada item pesanan ditemukan.</p>
            <?php endif; ?>

            <div class="row" style="border-top: 1px solid lightgrey; padding-top: 30px">
              <div class="col-lg-12 text-right">
                <p style="font-weight: 500">Subtotal: Rp. <?php echo number_format($data->grand_total,0,",", ".") ?></p>
                <p style="font-weight: 500">Ongkir: Rp. 0</p>
                <p style="font-weight: 500">Metode Pembayaran: Bank Transfer</p>
              </div>
              <div class="col-lg-6">
                <p style="font-weight: 600; font-size: 18px">Total Pesanan : Rp. <?php echo number_format($data->grand_total,0,",",".") ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function goBack() {
  window.history.back();
}
</script>
