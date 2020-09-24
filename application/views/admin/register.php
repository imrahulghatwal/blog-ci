<?php include 'Header.php'; ?>
<div class="container" >
    <h4>Registration</h4>
    <div class="row" style="margin-top:20px;" >
        <div class="col-lg-6">
            <?php echo form_open('Admin/sendmail'); ?>

            <div class="form-group">
                <label for="email">Username:</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);?>
            </div>

        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="pwd">Password:</label>
                <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password']);?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
        </div>
		<div class="col-lg-6">
        <div class="form-group">
            <label for="email">First name:</label>
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter First name','name'=>'first_name','value'=>set_value('first_name')]);?>
        </div>
		</div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
        </div>
		<div class="col-lg-6">
        <div class="form-group">
            <label for="email">Last name:</label>
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Last name','name'=>'last_name','value'=>set_value('last_name')]);?>
        </div>
		</div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
        </div>
		<div class="col-lg-6">
        <div class="form-group">
            <label for="email">Email:</label>
            <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);?>
        </div>
		</div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
        </div>
        <div class="col-lg-12" style="margin-bottom:30px">
            <?php echo form_submit(['class'=>'btn btn-sm btn-secondary','type'=>'submit','value'=>'Submit']);?>
            <?php echo form_reset(['class'=>'btn btn-sm btn-secondary','type'=>'reset','value'=>'Reset']);?>
            <?php echo anchor('admin/login/','sign in?','class="link-class text-reset"') ?>

        </div>
    </div>
</div>

<?php include 'Footer.php'; ?>
