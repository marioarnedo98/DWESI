<?php
$this->layout='front';
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<div class="row">
<div class="books_read col-md-8 content shadow-lg bg-white rounded">
    <h3><?= h($book->title) ?></h3>
    <div class="information-left">
        <img src="<?php echo $this->request->webroot;?>files/Books/photo/<?php echo h($book->photo)?>" alt="Foto Libro">
    </div>
    <h3><?= __('Description') ?></h3>
        <?= $this->Text->autoParagraph(h($book->description)); ?>
    <ul class="list-unstyled">
    <li><h4><?= __('Isbn') ?></h4> <?= h($book->isbn) ?></li>
    <li> <h4><?= __('Author') ?></h4><?= $book->has('author') ? $this->Html->link($book->author->id, ['controller' => 'Authors', 'action' => 'view', $book->author->id]) : '' ?> </li>
    <li> <h4><?= __('Publisher') ?></h4><?= $book->has('publisher') ? $this->Html->link($book->publisher->name, ['controller' => 'Publishers', 'action' => 'view', $book->publisher->id]) : '' ?> </li>
    </ul>
    </div>
<div class="row">
<div class="books_read col-md-4">
    <h3><?= __('Price') ?></h3>
    <h6><?= h($book->price) ?></h6>
    <h4><?= __('Quantity') ?></h4>
    <h6><?= h($book->quantity) ?></h6>
    <?= $this->Html->link(__('Comprar'), ['action' => 'edit', $book->id],['class' =>'btn btn-primary']) ?>
</div>
</div>
</div>
