<section class="sec headImage" data-aos="zoom-in-up">
	<img src="https://images.pexels.com/photos/1595822/pexels-photo-1595822.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
	<div class="headIndex">
		<h1 class="futura-head" style="font-size:3.5rem;">Blog</h1>
		<h2 class="futura-content" style="font-size:1.1rem;">
			<a class="imageLink" href="<?= base_url().'user/home' ?>">Home ></a>
			<a class="imageLink" href="<?= base_url().'user/blog' ?>">Blog ></a>
		</h2>
	</div>
</section>

<section class="newContent sec">

<div class=" d-flex flex-row-reverse justify-content-between" data-aos="fade-right">
<div>
			<form action="" method="post">
				<div class="input-group md-form form-sm form-2 pl-0">
					<input class="form-control m-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
	
						<button class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
								aria-hidden="true"></i></button>
					</div>
				</div>
			</form>
		</div>
	<?php foreach ($blogs as $blog) : ?>
		<div class="blogC d-flex flex-row mb-5">
			<div class="iblog">
				<img src="<?= base_url().'/uploads/blogs/'.$blog->image?>" alt="lala">
			</div>
			<div class="text">
				<div class="textBoard">
					<div>
						<p class="text-muted p-0 m-0"><?= $blog->date ?> &nbsp; <?= $blog->author ?> &nbsp; <i class="fa fa-comment" aria-hidden="true"></i>&nbsp; <?= $blog->view ?></p>
						<p class="futura-head p-0 m-0" style="font-size:2.5rem"> <?= $blog->title ?></p>
						<p class="futura-content p-0 text-muted" style="font-size:1rem">
							<?= str_word_count($blog->desc) > 25 ? substr($blog->desc,0,200)."[...]" : $blog->desc ;?>
						</p>
					</div>
					<div>
						<button class="btn btn-info mt-1 font-weight-bold"> Read More </button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</section>