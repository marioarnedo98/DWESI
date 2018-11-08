<?php
 $pag_actual=($_SERVER['REQUEST_URI']);
$pag_cortada= explode("/", $pag_actual);
// var_dump($_COOKIE);
?>
<html>
<head>
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/override.css">
<link rel="stylesheet" href="<?=ROOT_URL?>/public/css/login_user.css">
<link rel="icon" type="image/png" href="<?=ROOT_URL?>/public/images/favicon.png">

</head>
<body class="<?php echo($pag_cortada[sizeof($pag_cortada)-1].$pag_cortada[sizeof($pag_cortada)-2])?>"> 
    <div class="topnav">
    <a class="active home" href="<?=ROOT_URL?>">Home</a>

    <div class="topnav-right">
    <?php if(isset($_SESSION['is_logged_in'])):?>
    <!-- <p>Bienvenido  </p> -->
    <!-- <a href="<?= ROOT_URL?>users/logout"">Logout</a> -->

          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bienvenido <?= print_r($_SESSION['user_data']['name'],true); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="logout" href="<?= ROOT_URL?>users/logout"">Logout</a></li>
            <li><p>Last Login: <?php echo $_COOKIE["HeCookie"]; ?></p></li>
    <?php else:?>
    <a href="<?= ROOT_URL?>users/login">Login</a>
      <a href="<?= ROOT_URL?>users/register">Register</a>
    <?php endif;?>
    </div>
    </div>
<div class="container">
<?=print_r (Messages::display(),true)?>
<?=$content?>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>