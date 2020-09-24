

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog | Admin Panel</title>
	<!--<link href="<?= base_url("Assets/css/bootstrap.min.css") ?>" rel="stylesheet">-->
	<?= link_tag("Assets/css/bootstrap.min.css") ?>

</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blog </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav ml-auto">
	
      <?php  
     if($this->session->userdata('id'))
	 {
	?>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Admin/logout'); ?>" class="btn btn-danger">Logout</a>
      </li>
     <?php }else{ ?>
	 <li class="nav-item active ">
        <a class="nav-link" href="<?php echo base_url('user/index')?>">Home</a>
      </li>
	 <?php } ?>
    </ul>
  </div>
</nav>