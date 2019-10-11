<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h2>Form Edit Data</h2>
				</div>
				<div class="card-body">
					<?php if(validation_errors()): ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors() ?>
					</div>
					<?php endif; ?>
					<form action="" method="post">
						<input type="hidden" name="id" value="<?= $orders['id'] ;?>">
						<div class="form-group">
							<label for="id_room">ID_ROOM</label>
							<input type="text" class="form-control" id="id_room" name="id_room"
								value="<?= $orders['id_room'] ;?>">
						</div>
						<div class="form-group">
							<label for="date">DATE</label>
							<input type="date" class="form-control" id="date" name="date"
								value="<?= $orders['date'] ;?>">
						</div>
						<div class="form-group">
							<label for="total">TOTAL</label>
							<input type="number" class="form-control" id="total" name="total"
								value="<?= $orders['total'] ;?>">
                        </div>
						<button type="submit" name="submit" class="btn btn-success float-right">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
