		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<?php echo $this->session->flashdata('sukses') ?>
						<?php echo $this->session->flashdata('gagal') ?>
						<div class="panel panel-login">
							<div class="panel-heading">
								<div class="row">
										<a href="#" class="active" id="login-form-link">Masuk</a>
								</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">

										<form id="login-form" action="<?php echo base_url('auth/masuk') ?>" method="post" role="form" style="display: block;" autocomplete="off">
    <div class="form-group">
        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required autocomplete="off">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required autocomplete="off">
    </div>
    
    <!-- Checkbox untuk show/hide password -->
    <div class="form-group">
        <label>
            <input type="checkbox" id="toggle-password"> Tampilkan Password
        </label>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" tabindex="4" class="form-control btn btn-register">Masuk</button>
            </div>
        </div>
    </div>
</form>

<!-- Script untuk toggle password -->
<script>
    document.getElementById('toggle-password').addEventListener('change', function () {
        const passwordInput = document.getElementById('password');
        passwordInput.type = this.checked ? 'text' : 'password';
    });
</script>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	</div>
