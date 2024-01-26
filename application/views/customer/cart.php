<style>
	.table-shopping-cart .column-4 {
	width: 145px;
	text-align: center;
}

.table-shopping-cart .column-6 {
	width: 120px;
	font-size: 16px;
}
</style>

<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-jj1a-_ZpeiecwK5C"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<body class="animsition">
	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
					<img src="<?= base_url('assets/user/'); ?>images/icons/logo.png" alt="IMG-LOGO">

					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="<?= site_url('User'); ?>">Home</a>
							</li>

							<li>
								<a href="<?= site_url('User/all_product'); ?>">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="<?= site_url('User/new_arrival'); ?>">New Arrival</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
			<img src="<?= base_url('assets/user/'); ?>images/icons/logo.png" alt="IMG-LOGO">
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="<?= site_url('User'); ?>">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="<?= site_url('User/all_product'); ?>">Shop</a>
				</li>

				<li>
					<a href="<?= site_url('User/new_arrival'); ?>" class="label1 rs1" data-label1="hot">New Arrival</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>
			<div class="header-cart flex-col-l p-l-65 p-r-25">
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<?php
				foreach ($this->cart->contents() as $items) : ?>
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="<?= base_url('assets/user/'); ?>images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php echo $items['name'] ?>
							</a>

							<span class="header-cart-item-info">
							Rp<?php echo number_format($items['price'], 0, ',', '.')?> x <?php echo $items['qty'] ?>
							</span>
						</div>
					</li>
					<?php endforeach; ?>
				<div class="header-cart-total w-full p-tb-40">
					Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
				</div>
			</div>
			
				<div class="w-full">
					<div class="header-cart-buttons flex-w w-full">
						<a href="<?= site_url('Transaksi'); ?>" class="flex-c-m stext-101 cl0 size-119 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form id="payment-form" class="bg0 p-t-75 p-b-85" method='post' action="<?php echo site_url('Transaksi/checkShippingCost')?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
									<th class="column-6"><a onclick="return confirm('Hapus barang dari keranjang belanja?')" href="<?php echo base_url('Transaksi/delete_cart') ?> ">
											<div class="fa fa-trash"></div>
										</a></th>

								</tr>
								<?php
								foreach ($this->cart->contents() as $items) : ?>
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<!-- <?php echo base_url('assets/foto_produk/'.$item['image']);?> -->
										<img src="<?php echo base_url($items['gambar']); ?>" alt="IMG">
										</div>
									</td>
									<td class="column-2" id="name"><?php echo $items['name'] ?></td>
									<td class="column-3">Rp<?php echo number_format($items['price'], 0, ',', '.')?></td>
									<td class="column-4" id="qty">
										<?php echo $items['qty'] ?>
									</td>
									<td class="column-5">Rp <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>
								<?php endforeach; ?>
								</tr>
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?>
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>				
								<div class="p-t-15">
									<!-- <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="kotaAsal">
											<option>From city</option>
											<?php if ($kota && isset($kota->rajaongkir->results[0])): ?>
											<?php $kt = $kota->rajaongkir->results[0]; ?>
												<option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
											<?php endif ?>
										</select>
										<div class="dropDownSelect2"></div>
									</div> -->

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="kotaTujuan">
											<option>Select a City</option>
											<?php if ($kota):?>
												<?php foreach ($kota->rajaongkir->results as $kt) :?>
													<option value="<?php echo $kt->city_id ?>"><?php echo $kt->city_name ?></option>
												<?php endforeach?>
											<?php endif ?>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" name="provinsiTujuan">
											<option>Select a province</option>
											<?php if ($provinsi):?>
												<?php foreach ($provinsi->rajaongkir->results as $pr) :?>
													<option value="<?php echo $pr->province_id ?>"><?php echo $pr->province ?></option>
												<?php endforeach?>
											<?php endif ?>
										</select>
										<div class="dropDownSelect2"></div>
									</div>

									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
									</div>
									
									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
										<input type="submit" value="Update Totals" name="submit">
										</div>
									</div>	
								</div>
							</div>

							<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Shipping Cost:
								</span>
							</div>

							<?php if (isset($hasil)): ?>
								<div class="size-209 p-t-1">
									<span class="mtext-110 cl2">
										<?php if ($hasil && isset($hasil->rajaongkir->results[0]->costs[0]->cost[0]->value)): ?>
											<?php $shippingCost = $hasil->rajaongkir->results[0]->costs[0]->cost[0]->value; ?>
											<?php echo $hasil->rajaongkir->results[0]->costs[0]->service; ?>: Rp <?php echo number_format($shippingCost, 0, ',', '.'); ?> <br>
											<?php echo $hasil->rajaongkir->results[0]->name ?><br><br>
										<?php else: ?>
											Shipping cost information not available.
										<?php endif ?>
									</span>
								</div>

								<div class="size-208">
									<span class="mtext-101 cl2">
										Totals:
									</span>
								</div>

								<div class="size-209 p-t-1">
									<span id="total-amount-display" class="mtext-110 cl2">
											Rp <?php echo number_format($this->cart->total() + $shippingCost, 0, ',', '.'); ?>
										</span>
									</div>
								</div>
							<?php endif ?>

							<div class="flex-w">
								<a href="<?=site_url()?>/snap/finish" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" id="pay-button">
									Proceed to Checkout
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	<script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
	  var totalAmountDisplay = $('#total-amount-display').text();
	  var totalAmount = parseFloat(totalAmountDisplay.replace(/[^\d]/g, ''));
	  var formattedTotalAmount = 'Rp ' + totalAmount.toLocaleString('en-US');// If you need to format it as a currency string again
	//   var items = [];

	//   // Loop through each row in the table
	//   $('.table_row').each(function () {
    //         var name = $(this).find('.column-2').text();
    //         var qty = $(this).find('.column-4').text();

    //         // Push the item details into the items array
    //         items.push({
    //             'name': name,
    //             'qty': qty
    //         });
    //     });

    $.ajax({
		type: 'POST',
      url: '<?=site_url()?>/snap/token',
	  data: {totalAmount:totalAmount},
      cache: false,

      success: function(data) {
        //location = data;

        console.log('token = '+data);
        
        var resultType = document.getElementById('result-type');
        var resultData = document.getElementById('result-data');

        function changeResult(type,data){
          $("#result-type").val(type);
          $("#result-data").val(JSON.stringify(data));
          //resultType.innerHTML = type;
          //resultData.innerHTML = JSON.stringify(data);
        }

        snap.pay(data, {
          
          onSuccess: function(result){
            changeResult('success', result);
            console.log(result.status_message);
            console.log(result);
            $("#payment-form").submit();
          },
          onPending: function(result){
            changeResult('pending', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          },
          onError: function(result){
            changeResult('error', result);
            console.log(result.status_message);
            $("#payment-form").submit();
          }
        });
      }
    });
});

  </script>
