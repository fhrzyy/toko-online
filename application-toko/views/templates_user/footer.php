<?php $kategori = $this->db->query("SELECT * FROM kategori")->result(); ?>
<style>
	.sosmed-container {

    gap: 4px; /* Menambah jarak antar ikon */
    
}
.sosmed-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px; /* Ukuran kotak */
    height: 40px;
    background-color: white; /* Latar belakang putih */
    border-radius: 0px; /* Opsional: untuk sudut kotak */
    text-decoration: none;
}

.sosmed-icon svg {
    width: 24px;
    height: 24px;
}

.sosmed-item:nth-child(1) svg { fill: #C13584; } /* Instagram */
.sosmed-item:nth-child(2) svg { fill: #1877F2; } /* Facebook */
.sosmed-item:nth-child(3) svg { fill: #000000; } /* X (Twitter) */
</style>
<!-- FOOTER -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>(Nama Toko) merupakan toko yang menyediakan kebutuhan Alat Tulis Kantor dengan mengedepankan kualitas dalam produknya.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa-solid fa-location-dot"></i>Jl. Cempaka No. 88, Patokan, Sukadamai,  Kec. Rahayu, Kab. Lembah Indah, Jawa Timur 65432</a></li>
									<li><a href="#"><i class="fa-brands fa-whatsapp"></i>+123-45-67-89-00</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>OnlineShope@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Kategori</h3>
								<ul class="footer-links">
									<?php foreach($kategori as $list) { ?>
									<li><a href="<?php echo base_url('kategori/index/'). $list->url ?>"><?php echo $list->kategori ?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
									<li><a href="<?php echo base_url('keranjang') ?>">Lihat Keranjang</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Find Us</h3>
								<ul class="footer-links">
								<a href="#"><img src="<?php echo base_url('assets/user')?>/img/shope.png" alt="" style="max-width: 40px; height: auto; margin-bottom: 5px;"></a>
								<a href="#"><img src="<?php echo base_url('assets/user')?>/img/tokped.png" alt="" style="max-width: 40px; height: auto; margin-bottom: 5px;"></a>
								<a href="#"><img src="<?php echo base_url('assets/user')?>/img/lazada.png" alt="" style="max-width: 40px; height: auto; margin-bottom: 5px;"></a>
								</ul>
							</div>
							<div class="footer">
 							 <h3 class="footer-title">Sosial Media</h3>
							<ul class="footer-links sosmed-container">
							<!-- Instagram -->
							<li class="sosmed-item">
							<a href="#" target="_blank" class="sosmed-icon">
							<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Instagram</title>
							<defs>
								<linearGradient id="instaGradient" x1="0%" y1="100%" x2="100%" y2="0%">
								<stop offset="0%" style="stop-color:#FEDA75; stop-opacity:1" />
								<stop offset="50%" style="stop-color:#FA7E1E; stop-opacity:1" />
								<stop offset="100%" style="stop-color:#D62976; stop-opacity:1" />
								</linearGradient>
							</defs>
							<path fill="url(#instaGradient)" d="M7.5,2 C4.42,2 2,4.42 2,7.5 L2,16.5 C2,19.58 4.42,22 7.5,22 L16.5,22 C19.58,22 22,19.58 22,16.5 L22,7.5 C22,4.42 19.58,2 16.5,2 L7.5,2 Z M7.5,0 L16.5,0 C20.64,0 24,3.36 24,7.5 L24,16.5 C24,20.64 20.64,24 16.5,24 L7.5,24 C3.36,24 0,20.64 0,16.5 L0,7.5 C0,3.36 3.36,0 7.5,0 Z M12,6.5 C15.04,6.5 17.5,8.96 17.5,12 C17.5,15.04 15.04,17.5 12,17.5 C8.96,17.5 6.5,15.04 6.5,12 C6.5,8.96 8.96,6.5 12,6.5 Z M12,8.5 C10.07,8.5 8.5,10.07 8.5,12 C8.5,13.93 10.07,15.5 12,15.5 C13.93,15.5 15.5,13.93 15.5,12 C15.5,10.07 13.93,8.5 12,8.5 Z M18.5,5.5 C19.33,5.5 20,6.17 20,7 C20,7.83 19.33,8.5 18.5,8.5 C17.67,8.5 17,7.83 17,7 C17,6.17 17.67,5.5 18.5,5.5 Z"/>
							</svg>
							</a>
							</li>
							<!-- Facebook -->
							<li class="sosmed-item">
							<a href="#" target="_blank" class="sosmed-icon">
								<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>Facebook</title>
								<path d="M22.675 0h-21.35C.596 0 0 .595 0 1.326v21.348C0 23.404.596 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.098 2.797.142v3.24l-1.917.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.591l-.467 3.622h-3.124V24h6.116c.729 0 1.324-.596 1.324-1.326V1.326C24 .595 23.404 0 22.675 0"/>
								</svg>
							</a>
							</li>
							<!-- X (Twitter) -->
							<li class="sosmed-item">
							<a href="#" target="_blank" class="sosmed-icon">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
							<path d="M26.37,26l-8.795-12.822l0.015,0.012L25.52,4h-2.65l-6.46,7.48L11.28,4H4.33l8.211,11.971L12.54,15.97L3.88,26h2.65 l7.182-8.322L19.42,26H26.37z M10.23,6l12.34,18h-2.1L8.12,6H10.23z"></path>
								<title>X</title>
								</svg>
							</a>
							</li>
							</ul>
							</div>	
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<hr>
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy; Online Shope <script> document.write(new Date().getFullYear());</script> | Developed By : <i class="fa fa-#" aria-hidden="true"></i><a href="https://imam-wahyudi.netlify.app/" target="_blank" 
								class="white-link">YUDI VISUAL</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="<?php echo base_url('assets/user'); ?> /js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('assets/user'); ?> /js/slick.min.js"></script>
		<script src="<?php echo base_url('assets/user'); ?> /js/nouislider.min.js"></script>
		<script src="<?php echo base_url('assets/user'); ?> /js/jquery.zoom.min.js"></script>
		<script src="<?php echo base_url('assets/user'); ?> /js/main.js"></script>

	</body>
</html>
