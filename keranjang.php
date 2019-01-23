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
                                <li class="active">Keranjang Belanja</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<style>
 
</style>  
<section class="cart-page">
	<div class="container">
		<div class="row wv-pads15">
			<div class="table-responsive table-content">
				<table class="table table-bordered box-border2">
					<thead>
						<tr>
							<th class="product-thumbnail-th" colspan='6'><div align='left'>Keranjang Belanja</div></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan='4'>2 Barang</td>
							<td colspan='2' align='right'>Estimasi Biaya Pengiriman : Gratis</td>
						</tr>
						<tr>
							<td width='100' align='center'>
								<input type='checkbox' > 
							</td>
							<td width='100' class="cart-product-title">
								<a href="#"><img src="assets/img/product/cart1.jpg" alt="cart"></a>
							</td>
							<td valign='top'>
								<span class='abu'>4 Oktober 2018</span><br>
								<b>Mikihat Flakes Wool</b>
								<table width='100%'>
									<tr>
										<td width='60' >Warna</td><td width='10' align='center'>:</td><td>Biru</td>
									</tr>
									<tr>
										<td>Ukuran</td><td align='center'>:</td><td>All Size</td>
									</tr>
									<tr>
										<td>Jumlah</td><td align='center'>:</td><td>
											<input class="quantity_field" value="1" type="number" min="2" max="20" step="1" data-min="1"/>
										</td>
									</tr>
								</table>
							</td>
							<td class="price" width='200' >
									<span class="actual-price">Rp. 325.000</span><br>
									<span class="sell-price">Rp. 225.000</span>	<br>						
									<span class="sell-price">Save 30%</span>							
							</td> 
							<td  class="price" width='300'  >
								Jakarta 1-3 hari kerja, luar Jakarta 2-6 hari kerja. Pengiriman Express tersedia ATAU
								Pesan & dapakan BESOK dengan pengiriman Next Day! Selesaikan pembayaran sebelum jam 17:00 WIB<br>
								<span class="sell-price">Biaya Pengiriman : Rp 15.000</span>
							</td>
							<td class="delete-products" width='100' align='center'><a href="#"><i class="fa fa-times"></i></a></td>
						</tr>
						<tr>
							<td width='100' align='center'>
								<input type='checkbox' > 
							</td>
							<td width='100' class="cart-product-title">
								<a href="#"><img src="assets/img/product/cart2.jpg" alt="cart"></a>
							</td>
							<td valign='top'>
								<span class='abu'>4 Oktober 2018</span><br>
								<b>Mikihat Flakes Wool</b>
								<table width='100%'>
									<tr>
										<td width='60'>Warna</td><td width='10' align='center'>:</td><td>Biru</td>
									</tr>
									<tr>
										<td>Ukuran</td><td align='center'>:</td><td>All Size</td>
									</tr>
									<tr>
										<td>Jumlah</td><td align='center'>:</td><td>
											<input class="quantity_field" value="1" type="number" min="2" max="20" step="1" data-min="1"/>
										</td>
									</tr>
								</table>
							</td>
							<td class="price" width='200' >
									<span class="actual-price">Rp. 325.000</span><br>
									<span class="sell-price">Rp. 225.000</span>	<br>						
									<span class="sell-price">Save 30%</span>							
							</td> 
							<td  class="price" width='300'  >
								Jakarta 1-3 hari kerja, luar Jakarta 2-6 hari kerja. Pengiriman Express tersedia ATAU
								Pesan & dapakan BESOK dengan pengiriman Next Day! Selesaikan pembayaran sebelum jam 17:00 WIB<br>
								<span class="sell-price">Biaya Pengiriman : Rp 15.000</span>
							</td>
							<td class="delete-products" width='100' align='center'><a href="#"><i class="fa fa-times"></i></a></td>
						</tr>
 
						<tr>
							<td colspan='3'>MASUKKAN KODE VOUCHER ATAU GIFT CARD</td>
							<td colspan='3' align='right'>
								<div class="form-group">
									<div class="no-gutter">
										<div class="col-sm-8">
											<input type='text' class='form-control text-voucher' >
										</div>
										<div class="col-sm-4" align='left'> 
											<button type='button' class='btn btn-md btn-primary'>Pilih</button>
										</div>
									</div>
								</div>  							
							</td>
						</tr>
 						<tr>
							<td colspan='3'><label><input type='checkbox'> Pilih Semua</label></td>
							<td colspan='3' align='right'>
								<div class="form-group">
									<div class="no-gutter">
										<div class="col-sm-8">
											Sub Total Untuk (2 Produk) :
										</div>
										<div class="col-sm-4 price" align='right' style='margin-top:0px;'> 
											<span class="sell-price">Rp. 450.000</span>
										</div>
									</div>
								</div>  							
							</td>
						</tr>
 						<tr>
							<td colspan='4'> </td>
							<td colspan='2' align='right'>
								<div class="form-group">
									<div class="no-gutter">
										<div class="col-sm-6" align='right'>
											<button type='button' class='btn btn-md btn-default'>Lanjut Belanja</button>
										</div>
										<div class="col-sm-6" align='right'> 
											<button type='button' class='btn btn-md btn-primary'>Lanjut Checkout</button>
										</div>
									</div>
								</div>  							
							</td>
						</tr>

					</tbody>
				</table>
			</div> 
		</div>
	</div>
</section>
<?php require_once("footer.php");?>