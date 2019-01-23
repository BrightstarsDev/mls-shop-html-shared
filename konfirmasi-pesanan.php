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
                                <li class="active">Konfirmasi Pesanan</li>
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
			<div class='col-md-12'>
				<b>Hi, Dani</b><br>
				PESANAN DITERIMA! Anda akan menerima email sebagai bukti konfirmasi pesanan Anda. Paket akan dikirimkan segera Setelah Anda
				melakukan konfirmasi pembayaran
				
				<br>
				<br>
				<div class='bg-abu'>
					1. Informasi Order
				</div>
				<div class='content-checkout'>
					<table width='100%'>
						<tr>
							<td width='150'><b>Nomor Order</b></td>
							<td width='10' align='center'>:</td>
							<td>228828</td>
						</tr>
						<tr>
							<td><b>Jumlah Pembayaran</b></td>
							<td width='10' align='center'>:</td>
							<td>
								<input type='hidden'  id='target' value='3ddddd7234'>
								Rp. 367.2<span style='color:#FF0000;'>34</span> <span style='color:#FF0000; cursor:pointer;' id="kopi" data-target='target'>(salin)</span>
							</td>
						</tr>
						<tr>
							<td><b>Metode Pembayaran</b></td>
							<td width='10' align='center'>:</td>
							<td>Bank Transfer Konfirmasi Manual</td>
						</tr>
					</table>
					<br>
					<div class='alert alert-danger'>
						<i class='fa fa-info'></i> &nbsp; PENTING : Transfer sebelum 1x24 jam sesuai dengan kode unik dan lakukan konfirmasi pembayaran.
					</div>
				</div>
				<br>
				<div class='bg-abu'>
					2. Metode Pembayaran
				</div>
				<div class='content-checkout'>
					<table width='100%' class='table'>
						<tr>
							<th width='33%'>BCA</th>
							<th>No. Rekening 4747 399339 10 (salin)</th>
							<th width='100'><img src='assets/img/bca.png' class='img-responsive'></th>
						</tr>
						<tr>
							<th >Mandiri</th>
							<th>No. Rekening 4747 399339 10 (salin)</th>
							<th><img src='assets/img/mandiri.png' class='img-responsive'></th>
						</tr>
						<tr>
							<th >BRI</th>
							<th>No. Rekening 4747 399339 10 (salin)</th>
							<th><img src='assets/img/bri.png' class='img-responsive'></th>
						</tr>
						<tr>
							<th >BNI</th>
							<th>No. Rekening 4747 399339 10 (salin)</th>
							<th><img src='assets/img/bni.png' class='img-responsive'></th>
						</tr>
					</table> 
					<em style='font-size:12px;'>*) Anda dapat melakukan pembayaran melalui bank lainnya yang akan dikenakan biaya tambahan sesuai tambahan sesuai dengan kebijakan masing-masing bank</em>
				</div>
				<br>
				<div class='bg-abu'>
					3. Konfirmasi Pembayaran
				</div>
				<div class='content-checkout'>
					Setelah transfer, konfirmasi pembayaran Anda di sini :
					<br>
					<br>
					<button type='button' class='btn btn-md btn-primary'>Saya Telah Melakukan Pembayaran</button>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php require_once("footer.php");?>