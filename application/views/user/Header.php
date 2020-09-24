<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog | User view</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			
		<?= link_tag("Assets/css/bootstrap.min.css") ?>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav ml-auto">
	 <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('user/index')?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/login')?>">Admin <i class="fas fa-sign-in-alt"></i></a>
      </li>
	  
    </ul>
  </div>
</nav>