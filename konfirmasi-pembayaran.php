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
                                <li class="active">Konfirmasi Pembayaran</li>
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
			<div class='col-sm-3'>
				<div class='sidebar-profile'>
					<div class='sp-header'>
						AKUN SAYA
					</div>
					<div class='sp-menu'>
						<a href=''>Akun Saya</a>
						<a href=''>Lacak Pesanan</a>
						<a href=''>Penukaran & Pengembalian</a>
						<a href='' class='active'>Konfirmasi Transfer</a>
					</div>
				</div>
				
			</div>
			<div class='col-sm-9'>
				<div class='bg-abu'>
					Konfirmasi Pembayaran
				</div>
				<div class='content-checkout'>
					Terima kasih telah berbelanja di Moslem Lifestyle!<br>
					Bila Anda telah melakukan pembayaran secara BANK TRANSFER,<br>
					konfirmasikan pembayaran Anda disini agar dapat kami proses segera.
					<br>
					<br>
					<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class='form-konfirmasi'> 
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3">
									<label class="control-label">No. Order<span class="text-danger">*</span></label>
								</div>
								<div class="col-xs-1">:</div>
								<div class="col-xs-6"> 
									<input type='text' class='form-control' placeholder='Ex: 23000xxx' required>
								</div>
							</div>
						</div>  
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3">
									<label class="control-label">Bank Tujuan <span class="text-danger">*</span></label>
								</div>
								<div class="col-xs-1">:</div>
								<div class="col-xs-6"> 
									<select class='form-control'>
										<option value==''>-- Pilih --</option>
										<option>BCA</option>
										<option>Mandiri</option>
										<option>BRI</option>
										<option>BNI</option>
									</select>
								</div>
							</div>
						</div>  
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3">
									<label class="control-label">Nominal Transfer<span class="text-danger">*</span></label>
								</div>
								<div class="col-xs-1">:</div>
								<div class="col-xs-6"> 
									<input type='text' class='form-control' placeholder='--Rp--' required>
								</div>
							</div>
						</div>  
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3">
									<label class="control-label">Tanggal Transfer<span class="text-danger">*</span></label>
								</div>
								<div class="col-xs-1">:</div>
								<div class="col-xs-6"> 
									<input type='text' class='form-control datepicker'  placeholder='Tahun - Bulan - Tanggal (Cth : 2018-10-10)' required>
								</div>
							</div>
						</div>   
						<div class="form-group">
							<div class="row">
								<div class="col-xs-3">
									
								</div>
								<div class="col-xs-1"></div>
								<div class="col-xs-6"> 
									<button type='submit' class='btn btn-md btn-primary'>Konfirmasi</button>
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