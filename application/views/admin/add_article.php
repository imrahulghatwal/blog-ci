<?php include 'Header.php'; ?>
<div class="container" style="margin:20px 20px;">
    <h4>Add Articles</h4>
    <div class="row">
        <div class="col-lg-6">
            <!--<?php// echo form_hidden('user_id','$this->session->userdata("id")');?>-->
            <?php echo form_open_multipart('Admin/user_validation'); ?>
            <?php echo form_hidden('created_at',date('Y-m-d H:i:s'));?>
            <div class="form-group">
                <label for="title">Article Title:</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Article Title','name'=>'title','value'=>set_value('title')]);?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('title','<div class="text-danger">','</div>'); ?>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="body">Article Body:</label>
                <?php echo form_textarea(['class'=>'form-control','placeholder'=>'Enter Article Body','name'=>'body','value'=>set_value('body')]);?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php echo form_error('body','<div class="text-danger">','</div>'); ?>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="body">Select Image</label>
                <?php echo form_upload(['name'=>'userfile']);?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:40px" ;>
            <?php if(isset($upload_error)) {echo $upload_error;} ?>
        </div>
        <div class="col-lg-12">

            <?php echo form_submit(['class'=>'btn btn-sm btn-secondary','type'=>'submit','value'=>'Submit']);?>

        </div>
    </div>
</div>

<?php include 'Footer.php'; ?>
