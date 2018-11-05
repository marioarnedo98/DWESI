<?php
 $pag_actual=($_SERVER['REQUEST_URI']);
$pag_cortada= explode("/", $pag_actual);
?>
<html>
<head>
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/override.css">
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/login_user.css">

</head>
<body class="<?php echo($pag_cortada[sizeof($pag_cortada)-1].$pag_cortada[sizeof($pag_cortada)-2])?>"> 

<div class="topnav">
  <a class="active home" href="<?=ROOT_URL?>">Home</a>
  <div class="topnav-right">
    <a href="#">Login</a>
    <a href="<?= ROOT_URL?>users/register">Register</a>
  </div>
</div>
<div class="container">
<?=$content?>

</div>

</body>
</html>