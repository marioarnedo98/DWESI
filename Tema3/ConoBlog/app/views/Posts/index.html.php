<?php
ob_start();
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Img</th>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Authors</th>
      <?php if(isset($_SESSION['is_logged_in'])):?>
      <th scope="col">Actions</th>
      <?php endif;?>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['posts'] as $post):
               echo "<tr>";
               echo '<td><img src="data:image/jpeg;base64, '. base64_encode($post->files->filedata) .'"class="read-img"/></td>';
                    echo "<td>".$post['id']."</td>";
                   echo "<td>".$post['title']."</td>";
                   echo "<td>".$post['authors']."</td>";
                   if(isset($_SESSION['is_logged_in'])){
                   echo "<td>"."<a href='". ROOT_URL."books/delete/".$post['id']."' class='btn btn-danger peligro'>Delete</a>"."<a href='". ROOT_URL."/books/read/".$post['id']."' class='btn btn-info'>Read</a>"."</td>";
                   }
               echo "</td>";
               endforeach?>
               
  </tbody>
  
</table>
<a href="<?=ROOT_URL?>books/pdf">Convertir a PDF</a>
<?php if(isset($_SESSION['is_logged_in'])):?>
<a href="<?=ROOT_URL?>books/add" class="boton-subir">
  <i class="fa fa-book" aria-hidden="true"></i>
</a>
  <?php endif;?>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <?php 
       for ($i=1; $i <=$data['numpages'] ; $i++) { 
        echo "<li class='page-item'><a class='page-link' href='".ROOT_URL."?page=".$i."'>$i</a></li>";
        
       }
    ?>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<?php $content= ob_get_clean();
include 'app/views/layout.html.php';
// print_r($data['books']);
