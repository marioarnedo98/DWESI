<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book[]|\Cake\Collection\CollectionInterface $books
 */
?>
<div class="books index large-9 medium-8 columns content">
    <h3><?= __('Books') ?></h3>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Filtrar por:
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item"><?= $this->Paginator->sort('id') ?></a>
                <a class="dropdown-item" href="#" ><?= $this->Paginator->sort('isbn') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('title') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('description') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('author_id') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('publisher_id') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('photo') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('price') ?></a>
                <a class="dropdown-item" href="#"><?= $this->Paginator->sort('quantity') ?></a>
  </div>
</div>
            <?php foreach ($books as $book): ?>
                <div class="row">
                    <div class="card books" style="width: 100%;">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="imagen_card" src="<?php echo $this->request->webroot;?>files/Books/photo/<?php echo h($book->photo)?>" alt="Card image cap">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                <h3 class="card-title"><?= h($book->title) ?></h3>
                <h5 class="card-title"><?= $book->has('publisher') ? $this->Html->link($book->publisher->name, ['controller' => 'Publishers', 'action' => 'view', $book->publisher->id]) : '' ?></h5>
                <p class="card-text"><?= h($book->description) ?></p>
                </div>
                <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Price: </b><?= h($book->price) ?></li>
    <li class="list-group-item"><b>Quantity: </b>><?= h($book->quantity) ?></li>
                </ul>
                <div class="card-body">
                <?= $this->Html->link(__('View'), ['action' => 'view', $book->id] ,['class' =>'btn btn-primary']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $book->id],['class' =>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $book->id] ,['class' =>'btn btn-primary'], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?>
            </div>
                            </div>
                         </div>
                
            </div>
            <!-- end row -->
            </div> 
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
