<div class="container">
    <h3>Your Shopping cart</h3>
    <div class="row border-bottom">
        <div class="col-sm-3">Image</div>
        <div class="col-sm-4">Title</div>
        <div class="col-sm-3">Price</div>
        <div class="col-sm-2">Cuantity</div>
    </div>
    <?php foreach($products as $book): ?>
    <div class="row border-bottom">
        <div class="col-sm-3"><img class="img-fluid" src="<?php echo $this->request->webroot;?>files/Books/photo/<?php echo h($book->photo)?>" alt="Card image cap"></div>
        <div class="col-sm-4"><?= h($book->title) ?></div>
        <div class="col-sm-3"><?= h($book->price) ?></div>
        <div class="col-sm-2"><?= h($book->cuantity) ?></div>
    </div>
    <?php endforeach?>
</div>