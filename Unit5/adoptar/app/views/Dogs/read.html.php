<?php
ob_start();
?>
 <div class="navbar navbar-default">
          <div class="container-fluid">
          </div>
        </div> 
        <?php foreach($data['Dog'] as $dog_r):?>
        <div class="row row-sm no-gutter-xs js-masonry">
        <div class="col-xs-12 col-sm-12 col-md-12 grid-item">
            <div class="listing loop-item loop-grid card pos-relative   loop-grid  ">
              <div class="overlay-wrapper">
              <a class="loop-image-wrapper " href="http://adoptar.org/index.php?page=item&id=170" title="<?php $dog_r['title']?>">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($dog_r->files->filedata).'"class="read-img"/>'?>;
              </a>
              </div>
              <div class="card-block text-center">
                <h3 class="h4 card-title">
                  <a class="link-default loop-item-title " href="http://localhost/adoptar/dogs/read/<?php echo $dog_r['id']?>" title="<?php $dog_r['title']?>">
                    <?php echo $dog_r['title']?>
                  </a>
                </h3>
                <div class="card-subtitle text-muted font-secondary text-ellipsis text-sm m-b-0">
                  <span class="loop-item-location">
                  <?php echo $dog_r['city']?></span>
                </div>
                <p class="text-muted loop-item-description hidden-xs m-t-md ">
                <?php echo $dog_r['description']?> </p>
              </div>
            </div>
          </div>

                <?php endforeach;?>
                
<?php $content= ob_get_clean();
include 'app/views/layout.html.php';
        
