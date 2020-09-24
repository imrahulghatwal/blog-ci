<?php include 'Header.php'; ?>

<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-lg-6 align-right">
            <a href="<?= base_url('admin/add_article');  ?>" class="btn btn-sm btn-outline-secondary" style="margin-bottom:20px;">Add Article</a>
        </div>
    </div>
    <?php if($msg = $this->session->flashdata('msg')): 
         $msg_class = $this->session->flashdata('msg_class')
 ?>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-6">
            <div class="alert <?= $msg_class ?>">
                <?= $msg; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Article Title</th>
                        <th>Article Body</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($result)){ ?>
                    <?php   foreach($result as $data){?>
                    <tr>
                        <td><?php echo $data->title ?></td>
                        <td><?php echo $data->body ?></td>
                        <td style="padding-bottom:20px;">
                            <?php echo anchor("admin/edit_article/{$data->id}",'Edit',['class'=>'btn btn-sm btn-warning','style'=>'margin-bottom:20px']); ?>
                            <?= form_open('admin/delete_article'),
		      form_hidden('id',$data->id),
			  form_submit(['class'=>'btn btn-sm btn-danger','type'=>'submit','value'=>'Delete']),
			  form_close();
	    ?>
                        </td>
                    </tr>
                    <?php } }else{?>
                    <tr>
                        <td> No data found</td>
                    </tr>
                    <?php } ?>
                </tbody>

				
            </table>
			<?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>

<?php include 'Footer.php'; ?>
