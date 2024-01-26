<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-jj1a-_ZpeiecwK5C"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" href="#">
			<img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
			Aplikasi Pembayaran SPP
		</a>
	</nav>
	<div class="container mt-5" >
		<h2>Data Pembayaran</h2>
	<form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
	  
	  <label for="nama">Nama Siswa</label>
	  <div class="form-group">
		<input type="text" name="nama" class="form-control" id="nama">
	  </div>
	  
	  <label for="nama">Kelas</label>
	  <div class="form-group">
		<select name="kelas" class="form-control" id="kelas">
			<option value="1">1</option>
			<option value="5">5</option>
			<option value="7">7</option>
			<option value="10">10</option>
		</select>
	  </div>

	  <label for="nama">Jumlah Bayar</label>
	  <div class="form-group">
		<input type="text" name="jmlBayar" class="form-control" id="jmlBayar">
	  </div>

	  <button id="pay-button" class="btn btn-primary">Bayar</button>
	</form>
	<table class="table table-bordered table-striped">
<thead>
	<tr>
		<th>Order ID</th>
		<th>Gross Amount</th>
		<th>Payment type</th>
		<th>Bank</th>
		<th>Va Number</th>
		<th>Transaction Time</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<?php foreach($midtrans as $d) { ?>
	<tr>
		<td><?php echo $d->order_id; ?></td>
		<td><?php echo $d->gross_amount; ?></td>
		<td><?php echo $d->payment_type; ?></td>
		<td><?php echo $d->bank; ?></td>
		<td><?php echo $d->va_number; ?></td>
		<td><?php echo $d->transaction_time; ?></td>
		<td>
			<?php
			if($d->status_code == "200"){
			?>
			<span class="badge bg-success">Success</span>
			<?php
			} else {
				?>
				<span class="badge bg-warning">Pending</span>
				<?php
			}
			?>
		</td>
		<td>
			<a href="<?php echo $d->pdf_url; ?>"target="_blank" class="btb btn-success btn-sm">Download</a>
		</td>
		
	</tr>
	<?php } ?>
</tbody>
	</table>
	</div>

	<script type="text/javascript">
  
    $('#pay-button').click(function (event) {
      event.preventDefault();
      $(this).attr("disabled", "disabled");
    
	var nama = $('#nama').val();
	var kelas = $('#kelas').val();
	var jmlBayar = $('#jmlBayar').val();

    $.ajax({
	  type : 'POST',
      url  : '<?=site_url()?>/snap/token',
	  data :  {nama:nama,kelas:kelas,jmlBayar:jmlBayar},
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

</body>
</html>
