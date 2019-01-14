<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author[]|\Cake\Collection\CollectionInterface $authors
 */
?>
<div class="text-intro-login">
<?=__('<h1><b>Authors</b></h1>')?>
</div>
            <?php foreach ($authors as $author): ?>
            <div class="row author">
            <div class="col-sm-8">
                <h3><?= h($author->Name) ?></h3>
                </div>
                <div class="col-sm-4">
                    <?= $this->Html->link(__('See More'), ['action' => 'view', $author->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $author->id]) ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?> -->
                    </div>
            
            </div>
            <?php endforeach; ?>
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
