<div class="sec newContent">
	<div class="text-center mb-4">
		<h1 class="big" style="margin-top:-8rem;font-size:8rem;opacity:0.5">Service</h1>
		<h2 class="futura-head" style="font-size:2rem;margin-top:5rem">
			YOU CAN SPLOIT YOUR SELF WITH OUR SERVICES
		</h2>
		<p class="futura-content mt-4 text-muted" style="font-size:1rem">WE HAVE MUCH SERVICE TO MAKE YOU SATISFIED</p>
	</div>
	<div class="row mt-5 mb-5" data-aos="zoom-in-down">
		<div class="serviceContent rounded ml-3 mr-3 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[0]->image ?>" alt="">
            <p class="futura-content font-weight-normal rounded-bottom "><?= $services[0]->name ?></p>
            <span><?= $services[0]->desc ?></span>
		</div>
		<div class="serviceContent rounded mr-4 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[1]->image ?>" alt="">
            <p class="futura-content font-weight-normal rounded-bottom "><?= $services[1]->name ?></p>
            <span><?= $services[1]->desc ?></span>
		</div>
		<div class="serviceContent rounded ml-3 mr-3 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[2]->image ?>" alt="">
            <p class="futura-content font-weight-normal rounded-bottom "><?= $services[2]->name ?></p>
            <span><?= $services[2]->desc ?></span>
		</div>
		<div class="serviceContent rounded mr-4 mb-5">
			<img src="<?= base_url().'uploads/services/'.$services[3]->image ?>" alt="">
            <p class="futura-content font-weight-normal rounded-bottom "><?= $services[3]->name ?></p>
            <span><?= $services[3]->desc ?></span>
		</div>
	</div>
</div>
