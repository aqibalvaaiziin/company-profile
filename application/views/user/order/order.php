<img src="https://cdn.shopify.com/s/files/1/0012/2005/1002/files/E_S-Fall-Sale_169405d4-f057-4acf-81ef-d9f248069641.jpg?v=1570740655" alt=""
	style = "position:abbsolute;width:400px;height:300px" id="order" data-aos="zoom-in-up"
>
<section class="sec" style="margin-top:-17rem">

	<div class="text-center" data-aos="zoom-in-up">
		<h1 class="text-center big tC" style="margin-top: -6rem;">Booking</h1>
		<h2 class="roboto-head" style="margin-top: 4rem;">Book On Our Hotel Anytime</h2>
		<p class="text-muted font-weight-bolder">We Ready To Serve You Anytime</p>
	</div>

	<div class="formContent d-flex justify-content-between" data-aos="zoom-in-up">
		<div class="align-self-end boxDecor "></div>
		<div class="align-self-center formBox text-center">
			
			<h4 class="roboto-head font-weight-bolder pacifico-content" style="color:rgb(163, 69, 119)">Booking</h4>
			<h2 class="futra-head mt-3 font-weight-bolder">Make a Declination </h2>
			<form action="" method="post">
			<div class="boxFormData d-flex flex-column justify-content-between mt-5">
				<input type="text" class="futura-content" placeholder="Name">
				<input type="text" class="futura-content" placeholder="Address">
				<input type="text" class="futura-content" placeholder="Phone Number">
				<input type="text" class="futura-content" placeholder="Date For Order" onfocus="(this.type='date')" data-date="" data-date-format="DD MMMM YYYY" id="orderDate">
			
					<select name="jurusan" id="jurusan" class=" futura-content">
					<?php foreach ($rooms as $room) : ?>
						<option value="<?= $room->name ?>"><?= $room->name ?></option>
					<?php endforeach;?>
					</select>
                <button type="submit" class="btn-submit text-white futura-head">Make an Order</button>
			</div>
		</form>
		</div>
		<div class="align-self-start decoration">
			<img src="https://images.pexels.com/photos/919/night-dark-hotel-luxury.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
				alt="">
		</div>
	</div>

</section>
