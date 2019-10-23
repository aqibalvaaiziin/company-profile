<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Document</title>
</head>

<body>
	<h1 style="font-size:4rem;text-align:center;margin:0;padding:0">HOTEL SANTIKA</h1>
	<p style="text-align:center;margin:0;padding:0">Jl.Ikan Gurami No 14 Malang Jawa Timur</p>
	<p style="text-align:center;margin:0;padding:0">telp : (0341)-876654 &nbsp;&nbsp; FAX : 44556634</p>
	<hr>
	<hr>
	<br>
	<div>

		<p>
			<span style="margin-left:1rem">Terima kasih atas</span> pemesanan yang telah anda lakukan mohon untuk segera
			konfirmasi untuk pemesanan anda,
			batas waktu maksimal untuk melakukan konfirmasi adalah 3 hari, jika laporan tidak dikonfirmasi dalam 3
			hari maka pemesanan anda akan otomatis dihapus oleh sistem.
		</p>
		<br>
		<p>Berikut data pemesanan yang anda lakukan : </p>


		<div class="boxDataReport" style="margin-top:1rem;">
			<?php $tanggal;?>
			<?php foreach($allData as $data): ?>
			<p>Name <span style="margin-left:5.9rem">:</span> <?= $data->cn ?></p>
			<p>Address <span style="margin-left:4.9rem">:</span> <?= $data->address ?></p>
			<p>Telephone <span style="margin-left:3.9rem">:</span> <?= $data->telephone ?></p>
			<p>Room Type <span style="margin-left:3.4rem">:</span> <?= $data->type ?></p>
			<p>Room Name <span style="margin-left:3.1rem">:</span> <?= $data->rn ?></p>
			<p>Room Number <span style="margin-left:2.3rem">:</span> <?= $data->ri ?></p>
			<p>Package <span style="margin-left:5rem">:</span> <?= $data->service1 ?> &nbsp; <?= $data->service2 ?>
				&nbsp; <?= $data->service3 ?> &nbsp; <?= $data->service4 ?></p>
			<p>Date <span style="margin-left:6.4rem">:</span> <?= date("d-m-Y",strtotime($data->date)) ?></p>
			<p>Total <span style="margin-left:6.2rem">:</span> <?= $data->total ?></p>
			<?php $tanggal = $data->date;?>
			<?php endforeach;?>
		</div>
		<br>
		<p>
			<span style="margin-left:1rem">Terima kasih atas</span> pemesanan yang telah anda lakukan.
		</p>
		<br><br>
		<p style="text-align:right">Malang, <?= date("d-m-Y",strtotime($tanggal)) ?></p>
		<br><br>
		<p style="text-align:right"> Mr.Aqib Alvaaiziin </p>
	</div>
</body>

</html>
