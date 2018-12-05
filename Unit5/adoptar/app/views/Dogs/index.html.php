<?php
ob_start();
?>
        <!--Aquí empieza el contenido-->
        <div class="navbar navbar-default">
          <div class="container-fluid">
            <ul class="nav navbar-nav navbar-left nav-underline">
              <li class="active">
                <a class="js-search-filter" href="/adoptar/" rel="nofollow">
                  All</span>
                </a>
              </li>
            </ul>

            </li>
            </ul>
          </div>
        </div> <div class="row row-sm no-gutter-xs js-masonry">

        <?php foreach($data['dogs'] as $dog):?>
        
       
          <div class="col-xs-12 col-sm-12 col-md-12 grid-item">
            <div class="listing loop-item loop-grid card pos-relative   loop-grid  ">
              <div class="overlay-wrapper">
              <a class="loop-image-wrapper " href="http://adoptar.org/index.php?page=item&id=170" title="<?php $dog['title']?>">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($dog->files->filedata).'"class="read-img"/>'?>;
              </a>
              </div>
              <div class="card-block text-center">
                <h3 class="h4 card-title">
                  <a class="link-default loop-item-title " href="<?= ROOT_URL?>/dogs/read/<?php echo $dog['id']?>" title="<?php $dog['title']?>">
                    <?php echo $dog['title']?>
                  </a>
                </h3>
                <div class="card-subtitle text-muted font-secondary text-ellipsis text-sm m-b-0">
                  <span class="loop-item-location">
                  <?php echo $dog['city']?></span>
                </div>
                <p class="text-muted loop-item-description hidden-xs m-t-md ">
                <?php echo $dog['description']?> </p>
                <a class="btn btn-outline btn-primary hidden-xs" href="<?= ROOT_URL?>/dogs/read/<?php echo $dog['id']?>">
                  Ver más </a>
                  <?php if(isset($_SESSION['is_logged_in'])):?>
                  <a class="btn btn-outline btn-primary hidden-xs" href="<?= ROOT_URL?>/dogs/adopt/<?php echo $dog['id']?>">
                  Adoptar </a>
<?php endif;?>
              </div>
            </div>
          </div>

                <?php endforeach;?>
      
        </div>

        <div class="p-xs-x-sm">
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
        </div>
        <!--Aquí termina el contenido-->

<?php $content= ob_get_clean();
include 'app/views/layout.html.php';