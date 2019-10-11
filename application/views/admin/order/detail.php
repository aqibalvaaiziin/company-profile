<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Data orders
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $orders['id']; ?></h5>
					<p class="card-text">
						<label for=""><b>ID ROOM : </b></label>
						<?= $orders['id_room']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>DATE <span style="margin-left:1.8rem">:</span> </b></label>
						<?= $orders['date']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>TOTAL <span style="margin-left:1.3rem">:</span> </b></label>
						<?= $orders['total']; ?>
					</p>
					<a href="<?= base_url() ;?>admin/order" class="btn btn-primary float-right">
						<i class="fa fa-sign-out" aria-hidden="true">&nbsp;Keluar</i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
