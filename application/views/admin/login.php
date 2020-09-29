<?php include 'Header.php'; ?>
<div class="container" style="margin-top:20px;">
  <h4>Admin Login</h4>

  
  <?php if($error = $this->session->flashdata('Login_failed')): ?>
  <div class="row">
  <div class="col-lg-6">
  <div class="alert alert-danger">
  <?= $error; ?>
  </div>
  </div>
   </div>
  <?php endif; ?> 
  <div class="row " >
  <div class="col-lg-6">
    <?php echo form_open('Admin/login'); ?>

    <div class="form-group">
    <label for="email">Username:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]);?>
	</div>
	
  </div>
  </div>
   <div class="row">
    <div class="col-lg-6 " style="margin-top:-10px;">
	<?php echo form_error('uname','<div class="text-danger">','</div>'); ?>
	</div>
	</div>
  <div class="row">
  <div class="col-lg-6" >
  <div class="form-group">
    <label for="pwd">Password:</label>
    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password']);?>
  </div>
  </div>
   </div>
    <div class="row">
  <div class="col-lg-6" style="margin-bottom:20px;">
	<?php echo form_error('password','<div class="text-danger">','</div>'); ?>
	</div>
  <div class="col-lg-12">

  <?php echo form_submit(['class'=>'btn btn-sm btn-secondary','type'=>'submit','value'=>'Submit']);?>
  <?php echo form_reset(['class'=>'btn btn-sm btn-secondary','type'=>'reset','value'=>'Reset']);?>
  <?php echo anchor('admin/register/','sign up?','class="link-class text-reset"') ?>
  
</div>
</div>
</div>
</div>

<?php include 'Footer.php'; ?>
