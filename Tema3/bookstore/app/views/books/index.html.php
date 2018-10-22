<?php
ob_start();
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Authors</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['books'] as $book):
               echo "<tr>";
                    echo "<td>".$book['id']."</td>";
                   echo "<td>".$book['name']."</td>";
                   echo "<td>".$book['authors']."</td>";
                   echo "<td>".$book['isbn']."</td>";
               echo "</td>";
               endforeach?>
               
  </tbody>
</table>




<?php $content= ob_get_clean();
include 'app/views/layout.html.php';
// print_r($data['books']);
