<?php
ob_start();
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">img</th>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Authors</th>
      <th scope="col">ISBN</th>
      <th scope="col">Publisher</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
 foreach($data['book'] as $book_r):

echo "<tr>";
  echo '<td><img src="data:image/jpeg;base64, '. base64_encode($book_r->files->filedata) .'"class="read-img"/></td>';
    echo "<td>".$book_r['id']."</td>";
    echo "<td>".$book_r['name']."</td>";
    echo "<td>".$book_r['authors']."</td>";
    echo "<td>".$book_r['isbn']."</td>";
    echo "<td>".$book_r['publisher']."</td>";
    echo "<td>".$book_r['price']."</td>";
    echo "</tr>";
 endforeach;
 ?>   
 </tbody>
 </table>
 <?php

$content= ob_get_clean();
include 'app/views/layout.html.php';