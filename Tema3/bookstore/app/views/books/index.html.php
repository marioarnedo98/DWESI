<?php
ob_start();
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Img</th>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Authors</th>
      <th scope="col">ISBN</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['books'] as $book):
               echo "<tr>";
               echo '<td><img src="data:image/jpeg;base64, '. base64_encode($book->files->filedata) .'"class="read-img"/></td>';
                    echo "<td>".$book['id']."</td>";
                   echo "<td>".$book['name']."</td>";
                   echo "<td>".$book['authors']."</td>";
                   echo "<td>".$book['isbn']."</td>";
                   echo "<td>"."<a href='". ROOT_URL."books/delete/".$book['id']."' class='btn btn-danger peligro'>Delete</a>"."<a href='". ROOT_URL."/books/read/".$book['id']."' class='btn btn-info'>Read</a>"."</td>";
               echo "</td>";
               endforeach?>
               
  </tbody>
</table>
<!-- código HTMl botón subir (top)-->
<a href="<?=ROOT_URL?>books/add" class="boton-subir">
  <!-- link del icono http://fontawesome.io/icon/rocket/ -->
  <i class="fa fa-book" aria-hidden="true"></i>
</a>



<?php $content= ob_get_clean();
include 'app/views/layout.html.php';
// print_r($data['books']);
