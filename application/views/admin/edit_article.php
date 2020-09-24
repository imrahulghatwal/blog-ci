<?php include 'Header.php'; ?>
<div class="container" style="margin:20px 20px;">
  <h4>Edit Articles</h4>

  <div class="row" >
  <div class="col-lg-6">
    <?php echo form_open("Admin/update_article/{$result->id}"); ?>
    <div class="form-group">
    <label for="title">Article Title:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'title','value'=>set_value('title',$result->title)]);?>
	</div>	
  </div>
  <div class="col-lg-6" style="margin-top:40px";>
	<?php echo form_error('title','<div class="text-danger">','</div>'); ?>
	</div>
  <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Article Body:</label>
    <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Article Body','name'=>'body','value'=>set_value('body',$result->body)]);?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px";>
	<?php echo form_error('body','<div class="text-danger">','</div>'); ?>
	</div>
  <div class="col-lg-12">
    
  <?php echo form_submit(['class'=>'btn btn-sm btn-info','type'=>'submit','value'=>'Update']);?>
  
</div>
</div>
</div>

<?php include 'Footer.php'; ?>
