<div class="container">
    <h3>Your Shopping cart</h3>
    <legend>
    <div class="row border-bottom">
        <div class="col-sm-4">Image</div>
        <div class="col-sm-5">Title</div>
        <div class="col-sm-1">Price</div>
        <div class="col-sm-1">Cuantity</div>
        <div class="col-sm-1">Total</div>
    </div>
    </legend>
    <?php foreach($products as $book): ?>
    <?php $cuantity= $this->Session->read("cart.$book->id"); ?>
    <div class="row border-bottom">
        <div class="col-sm-4"><img class="img-fluid" src="<?php echo $this->request->webroot;?>files/Books/photo/<?php echo h($book->photo)?>" alt="Card image cap"></div>
        <div class="col-sm-5"><?= h($book->title) ?></div>
        <div class="col-sm-1"><?= h($book->price) ?></div>
        <div class="col-sm-1"><?php echo $cuantity ?></div>
        <?php $total= $cuantity * $book->price;?>
        <div class="col-sm-1"><?= $total ?></div>
    <?php $precio_total+= $total?>
    </div>
    <?php endforeach?>
    <legend>
    <div class="row">
    
        <div class="col-sm-10">
            <h3>Total</h3>
        </div>
        <div class="col-sm-2">
        <h3><?php echo $precio_total?></h3>
        </div>
 
    </div>
    </legend>
</div>