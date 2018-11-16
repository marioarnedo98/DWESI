<?php
ob_start();
?>
<div class="container">
<div class="row">
<?php foreach($data['book'] as $posts_r):?>
<?php var_dump($posts_r);?>
    <div class="card">
    <div class="card-body">
        <h3 class="card-text"><?php print_r($posts_r['title']) ?></h3>
        <h3 class="card-text"><?php print_r($posts_r['authors']) ?></h3>
    </div>
    <?php echo "<img src='data:image/jpeg;base64, " . base64_encode($posts_r->files->filedata) ."'class='card-img-top'  alt='Card image cap'/>";?>
    <div class="card-body">
        <p class="card-text"><?php print_r($posts_r['content']);?></p>
    </div>
    </div>
<?php endforeach;?>
</div>
</div>
<?php
$content= ob_get_clean();
include 'app/views/layout.html.php';
