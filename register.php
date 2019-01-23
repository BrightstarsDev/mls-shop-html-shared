<?php require_once("header.php");?>

        <div class="wv_breadcrumb">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="active">Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<style>
 
</style>  
<section class="checkout-page">
	<div class="container">
		<div class="row pad-s15 "> 
			<div class='col-sm-12'>
				<div class='bg-abu'>
					Register
				</div>
				<div class='content-checkout'>
					<b>Daftarkan Diri Anda Sekarang!</b>
					<br>
					<br>
					<a href='' class='login-facebook'><i class='fa fa-facebook'></i> Login with Facebook</a>
					<a href='' class='login-google'><i class='fa fa-google'></i> Sign in with Google+</a>
					<div class='cl'></div>
					<br>
					Kami tidak akan posting atas nama Anda atau membagikan informasi apapun tanpa persetujuan Anda.
					<br>
					<br>
					<b>Atau</b>
					<br>
					<br>
					<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class='form-konfirmasi'>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Nama Akun<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Alamat Email<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='email' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Password<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='password' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">No. HP<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Jenis Kelamin<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<label><input type='radio' name='jk'> Wanita</label>
									<label><input type='radio' name='jk'> Pria</label>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Nama Depan<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Tanggal Lahir<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label><input type='checkbox'> Saya ingin tetap login</label><br>
									<label><input type='checkbox'> Kirimkan penawaran ekslusif MoeslemLifestyle & info fashion terbaru</label><br>
								</div>
								<div class="col-sm-12"> 
									<button type='submit' class='btn btn-sm btn-primary'>Daftar</button>
								</div>
							</div>
						</div> 
					</form>
					
				</div> 
			</div>
		</div>
	</div>
</section>
<?php require_once("footer.php");?>