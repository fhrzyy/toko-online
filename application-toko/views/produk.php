<style>
		body {
    background-color: #FBFBFC;
}
</style>

<?php foreach($produk as $data): ?>


		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
						<li><a href="<?php echo base_url('homepage') ?>" style="color: red;">Beranda</a></li>
							<li><a href="#">Kategori</a></li>
							<li><a href="<?php echo base_url('kategori/index/'). $data->url ?>"><?php echo $data->kategori ?></a></li>
							<li  class="active"  style="color: blue;"><?php echo $data->nama ?></li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div id="alertSuccess" class="alert alert-success" role="alert" style="display: none;">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
							Produk berhasil ditambahkan ke keranjang belanjamu!
					</div>
					<div id="alertError" class="alert alert-danger" role="alert" style="display: none;">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
							Produk Gagal ditambahkan ke keranjang!
					</div>
				</div>
			</div>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">


					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo base_url('assets/uploads/produk/'). $data->gambar ?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo base_url('assets/uploads/produk/'). $data->gambar ?>" alt="">
							</div>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $data->nama ?></h2>
							<div>
							
								<!-- <a class="review-link"><?php echo $data->total_ulasan ?> Ulasan</a> -->
								
							</div>
							<div>
								<h3 class="product-price">Rp. <?php echo number_format($data->harga,0,",",".") ?></h3>
								<?php if($data->stok >= '1') { ?>
								<span class="product-available">Tersedia</span>
								<?php } else { ?>
								<span class="product-unavailable">Habis</span>
								<?php } ?>
							</div>
							<p style="margin-bottom: 30px"><?php echo $data->deskripsi ?></p>

							<?php if($data->stok > 0) { ?>
							<div class="add-to-cart">
								<div class="qty-label">
								Qty &nbsp;
									<div class="input-number">
									<input type="number" name="qty" id="<?php echo $data->id ?>" value="1" min="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button type="button" id="add_to_cart" class="add-to-cart-btn" data-id="<?php echo $data->id ?>" data-nama="<?php echo $data->nama ?>" data-harga="<?php echo $data->harga ?>" data-gambar="<?php echo $data->gambar ?>" data-url="<?php echo $data->url_produk ?>"><i class="fa fa-shopping-cart"></i> Tambah ke keranjang</button>
							</div>
							<?php } else { ?>
								<div class="add-to-cart">
								</div>
							<?php } ?>

							<ul class="product-links">
								<li>Kategori:</li>
								<li><a href="<?php echo base_url('kategori/index/'). $data->url ?>"><?php echo $data->kategori ?></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav" id="produktab">
								<li class="active"><a data-toggle="tab" href="#tab1">Deskripsi</a></li>
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p><?php echo $data->deskripsi ?></p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab3  -->
								<?php if($data->total_ulasan == '' || $data->total_ulasan == NULL) { ?>
									<div id="tab3" class="tab-pane fade in">
										<div class="row">
											<div class="col-md-12 text-center">
												<h3 style="color: #303030">Belum ada Ulasan...</h3>
											</div>
										</div>
									</div>
								<?php } else { ?>
								<div id="tab3" class="tab-pane fade in" style="height: 200px; overflow-y: scroll; overflow-x: hidden">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span><?php echo $data->avg_rating ?></span>
											
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-8">
									
										</div>
										<!-- /Reviews -->

									</div>
								</div>
								<?php } ?>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	<?php endforeach; ?>

		<?php
		    $stok = $data->stok;
		?>
		<script type="text/javascript">
			var max = "<?= $stok ?>";
		</script>

		<script>
		$(document).ready(function(){
		    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
		        localStorage.setItem('activeTab', $(e.target).attr('href'));
		    });
		    var activeTab = localStorage.getItem('activeTab');
		    if(activeTab){
		        $('#produktab a[href="' + activeTab + '"]').tab('show');
		    }
		});
		</script>
