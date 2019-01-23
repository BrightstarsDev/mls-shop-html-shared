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
                                <li class="active">Kontak Kami</li>
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
					Kontak Kami
				</div>
				<div class='content-checkout'> 
					Ada pertanyaan yang tidak bisa dijawab di halaman FAQ? Silakan hubungi kami di layanan 'Chat With Us' pada halaman ini. Atau Anda juga bisa meninggalkan pesan melalui form berikut dan akan kami respons dalam kurun waktu 24 jam.
					<br>
					<br>

					<b>*Wajib Diisi</b>
					<form action="" method="post" data-parsley-validate enctype="multipart/form-data" class='form-konfirmasi'>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Nama<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Email<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='email' class='form-control' required>
								</div>
							</div>
						</div>  
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">No. Order<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<input type='text' class='form-control' required>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Permintaan<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<select class='form-control' required>
										<option value=''>--</option>
										<option value='a'>Permintaan 1</option>
										<option value='b'>Permintaan 2</option>
										<option value='c'>Permintaan 3</option>
									</select>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label class="control-label">Detail<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-7"> 
									<textarea class='form-control' required></textarea>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label">Lampiran: (Unggah file yang sesuai dengan pertanyaan kamu, contoh: Foto produk cacat)<span class="text-danger">*</span></label>
								</div>
								<div class="col-sm-12"> 
									<input type='file' class='form-control' required>
								</div>
								<div class="col-sm-12"> 
									Ukuran file harus di bawah 2MB dan dalam format: .jpg, .png, .gif, .pdf , .docx
								</div>
							</div>
						</div> 
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12"> 
									<button type='submit' class='btn btn-sm btn-primary'>Submit</button>
								</div>
							</div>
						</div> 
					</form>
					
				</div> 
				<br>
				<div class='bg-abu'>
					Customer Service Hotline
				</div>
				<div class='content-checkout'> 
					<table width='100%'>
						<tr>
							<td width='100'>Contact Numbers</td>
							<td width='10' align='center'>:</td>
							<td>021 828292</td>
						</tr>
						<tr>
							<td>Operation Hours</td>
							<td align='center'>:</td>
							<td>Senin - Minggu 09:00-18:00 WIB</td>
						</tr>
					</table>
				</div>
				
				
			</div>
		</div>
	</div>
</section>
<?php require_once("footer.php");?>