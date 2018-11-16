<?php
ob_start();
?>
<div class="container">
<div class="row">
<?php foreach($data['book'] as $posts_r):
$date= explode(" ",$posts_r['updated_at']);
$real_date= $date[0];
?>
    <div class="card">
    <div class="card-body">
        <h3 class="card-text"><?php print_r($posts_r['title']) ?></h3>
        <h3 class="card-text"><?php print_r($posts_r['authors']) ?></h3>
    </div>
    <?php echo "<img src='data:image/jpeg;base64, " . base64_encode($posts_r->files->filedata) ."'class='card-img-top'  alt='Card image cap'/>";?>
    <div class="card-body">
        <p class="card-text"><?php print_r($posts_r['content']);?></p>
    </div>
    <div class='card-header fecha_subida'>
        <p> Updated at <?php echo $real_date?></p>
        </div>
    </div>
<?php endforeach;?>
</div>
</div>
<?php
$content= ob_get_clean();
include 'app/views/layout.html.php';
