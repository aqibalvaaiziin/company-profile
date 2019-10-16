<div class="sec newContent">
	<div class="text-center mb-4">
		<h1 class="big" style="margin-top:-8rem;font-size:8rem">Service</h1>
		<h2 class="futura-head" style="font-size:2rem;margin-top:5rem">
			YOU CAN SPLOIT YOUR SELF WITH OUR SERVICES
		</h2>
		<p class="futura-content mt-4 text-muted" style="font-size:1rem">WE HAVE MUCH SERVICE TO MAKE YOU SATISFIED</p>
	</div>
	<div class="row mt-5 mb-5" data-aos="zoom-in-down">
		<div class="serviceContent rounded ml-3 mr-3 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[0]->image ?>" alt="">
			<div class="d-flex">
				<p class="futura-content font-weight-normal textboard"><?= $services[0]->name ?></p>
				<p class="textExplore font-italic text-middle">Description ></p>
			</div>
			<span><?= $services[0]->desc ?></span>
		</div>
		<div class="serviceContent rounded mr-4 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[1]->image ?>" alt="">
			<div class="d-flex">
				<p class="futura-content font-weight-normal textboard"><?= $services[0]->name ?></p>
				<p class="textExplore font-italic text-middle">Description ></p>
			</div>
			<span><?= $services[1]->desc ?></span>
		</div>
		<div class="serviceContent rounded ml-3 mr-3 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[2]->image ?>" alt="">
			<div class="d-flex">
				<p class="futura-content font-weight-normal textboard"><?= $services[2]->name ?></p>
				<p class="textExplore font-italic text-middle">Description ></p>
			</div>
			<span><?= $services[2]->desc ?></span>
		</div>
		<div class="serviceContent rounded mr-4 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[3]->image ?>" alt="">
			<div class="d-flex">
				<p class="futura-content font-weight-normal textboard"><?= $services[3]->name ?></p>
				<p class="textExplore font-italic text-middle">Description ></p>
			</div>
			<span><?= $services[3]->desc ?></span>
		</div>
	</div>
</div>


<section class="sec" data-aos="zoom-in-up">
	<div class="text-center mb-4">
		<h1 class="big" style="margin-top:-8rem;font-size:8rem;">Pricing</h1>
		<h2 class="futura-head" style="font-size:2rem;margin-top:5rem">
			THE PRICE OF OUR SERVICE
		</h2>
		<p class="futura-content mt-4 text-muted" style="font-size:1rem">GET THE GOOD EXPERIENCE WITH CHAEP PRICE</p>
	</div>

	<div class="w-100 d-flex flex-row justify-content-between mt-5"> 
		<?php foreach ($services as $service):?>	
			<div class="bordereds text-center pb-0 mb-0">
				<div class="futura-head mb-2 p-3 text-white bg-dark" style="background:#FAFAFA;font-size:30px"><?= $service->name ?></div>
				<div class="roboto-head font-weight-bolder mb-2" style="font-size:30px">RP. <?= $service->price ?>/Session</div>
			</div>
		<?php endforeach ;?>
	</div>

</section>