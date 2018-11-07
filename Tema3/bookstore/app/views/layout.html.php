<?php
 $pag_actual=($_SERVER['REQUEST_URI']);
$pag_cortada= explode("/", $pag_actual);
// var_dump($_SESSION);
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
  <?php if(isset($_SESSION['is_logged_in'])):?>
  <p>Bienvenido <?= print($_SESSION['user_data']['name']); ?></p>
  <a href="<?= ROOT_URL?>users/logout"">Logout</a>
<?php else:?>
<a href="<?= ROOT_URL?>users/login">Login</a>
    <a href="<?= ROOT_URL?>users/register">Register</a>
<?php endif;?>
  </div>
</div>
<div class="container">
<?=print Messages::display()?>
<?=$content?>

</div>

</body>
</html>