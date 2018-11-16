<?php
ob_start();
?>
<div class="container">

<div class="row blog_entries">
<?php foreach($data['posts'] as $post):
$str = $post['content'];
$wraped= wordwrap($str,200);
$lines= explode("\n",$wraped);
if (sizeof($lines)>1){
$new_content= $lines[0].'...';
}else{
$new_content = $lines[0];
}
$date= explode(" ",$post['updated_at']);
$real_date= $date[0];
    echo "<div class='col-md-4'>";
    echo "<div class='card'>";
    echo "<img src='data:image/jpeg;base64, " . base64_encode($post->files->filedata) ."'class='card-img-top'  alt='Card image cap'/>";
    echo "<div class='card-body'>";
        echo "<h4 class='card-title'>".$post['title']."</h4>";
        echo "<h4 class='card-title authors'>Authors: ".$post['authors']."</h4>";
        echo "<p class='card-text'>";
        echo $new_content;
        echo "</p>";
        echo "<div class='card-header fecha_subida'>";
        echo "<p> Updated at ".$real_date."</p>";
        echo "</div>";
        if(isset($_SESSION['is_logged_in']) && sizeof($lines)>1 && $post['real_author']== $_SESSION['user_data']['name']){
       echo "<a href='". ROOT_URL."/Posts/read/".$post['id']."' class='btn btn-info'>Read</a>"."<a href='". ROOT_URL."Posts/delete/".$post['id']."' class='btn btn-danger peligro'>Remove</a>";
        }elseif(isset($_SESSION['is_logged_in']) && $post['real_author']== $_SESSION['user_data']['name']){
          echo "<a href='". ROOT_URL."Posts/delete/".$post['id']."' class='btn btn-danger peligro'>Remove</a>";
        }elseif(!isset ($_SESSION['is_logged_in']) && sizeof($lines)>1){
          echo "<a href='". ROOT_URL."/Posts/read/".$post['id']."' class='btn btn-info'>Read</a>";
        }
    echo "</div>";
    echo "</div>";
    echo "</div>";
    endforeach?>
</div>
<div class="row">
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <?php 
       for ($i=1; $i <=$data['numpages'] ; $i++) { 
        echo "<li class='page-item'><a class='page-link' href='".ROOT_URL."Posts/?page=".$i."'>$i</a></li>";
        
       }
    ?>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
<?php if(isset($_SESSION['is_logged_in'])):?>
<?php echo "<a href='". ROOT_URL."Posts/add/".$post['id']."' class='btn btn-info add pull-right'>+ Add</a>";?>
  <?php endif;?>
</div>
<?php $content = ob_get_clean();
include 'app/views/layout.html.php';
?>
