<div class="container mb-3">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Data room</h1>
				</div>
				<div class="card-body">
					<label for=""></label>
					<h3>ID</h3>
					<h3 class="card-title mb-5"><?= $room['id']; ?></h3>
					<p class="card-text">
						<label for=""><b>NAME <span style="margin-left:2rem">:</span> </b></label>
						<?= $room['name']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>PEOPLE <span style="margin-left:1rem">:</span> </b></label>
						<?= $room['people']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>TYPE <span style="margin-left:2.4rem">:</span> </b></label>
						<?= $room['type']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>SERVICE <span style="margin-left:0.7rem">:</span> </b></label>
						<?= $room['service']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>PRICE <span style="margin-left:2rem">:</span> </b></label>
						<?= $room['price']; ?>
					</p>
					<p class="card-text">
						<label for=""><b>IMAGE <span style="margin-left:1.8rem">:</span> </b></label>
					</p>
					<img src="<?= base_url().'/uploads/rooms/'.$room['image']?>" alt=""
						style="margin-left:9rem;width:350px;heigth:300px">
					<div>
						<a href="<?= base_url() ;?>admin/room" class="btn btn-primary float-right">
							<i class="far fa-arrow-alt-circle-left" aria-hidden="true">&nbsp;Keluar</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
