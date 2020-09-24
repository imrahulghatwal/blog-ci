<?php include 'Header.php'; ?>

<div class="container" style="margin-top:20px">
<h3 class="font-weight-normal "><?php echo $result->title; ?></h3>
   <div class="row">
      <div class="col-lg-12">
		  <p><img src="<?php echo $result->image;?>" alt="" width="280" height="200"></P>
		  <p class="lead text-justify"><?php echo $result->body; ?></p>
      </div>
   </div>
</div>
<?php include 'Footer.php'; ?>
