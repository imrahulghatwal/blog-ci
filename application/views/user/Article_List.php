<?php include 'Header.php'; ?>

<?php function readMoreHelper($story_desc, $chars = 200) {
	$story_desc = substr($story_desc,0,$chars);  
	$story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
	$story_desc = $story_desc." >>>>";  
	return $story_desc;  
} ?>

<div class="container" style="margin-top:20px;">
    <div class="row ">
        <div class="col-lg-12 ">
            <form class="form-inline float-right">
                <input type="search" id="my_input" class="form-control" placeholder="Search" aria-lable="Search">
                <button type="submit" class="btn btn-outline-secondary">Search</button>
            </form>
        </div>
    </div>
</div>


<div class="container" style="margin-top:20px">
    <?php foreach($articles as $data){ ?>
    <h4 class="font-weight-lighter " id="mytable"><?= anchor("user/article_page/{$data->id}",$data->title); ?></h4>
    <div class="row" style="margin-top:20px">

        <div class="col-lg-4">
            <p><img src="<?php echo $data->image?>" alt="" width="230" height="150"></P>
        </div>
        <div class="col-lg-6">
            <p class=" text-justify medium" style="color:#7f8c8d;"><?php echo readMoreHelper($data->body); ?></p>
        </div>

    </div>
    <hr>
    <?php }?>
</div>
<?php include 'Footer.php'; ?>
