<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo base_url().'asssets/css/user.css' ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"
		integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
	</script>  <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light mt-2">
  <a class="navbar-brand font-weight-bold" href="#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?= base_url().'user/home' ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?= base_url().'user/service'; ?>">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?= base_url().'user/blog'; ?>">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-bold" href="<?= base_url().'user/about'; ?>">About</a>
        </li>
      </ul>
    </div>
  </div>
  </nav>