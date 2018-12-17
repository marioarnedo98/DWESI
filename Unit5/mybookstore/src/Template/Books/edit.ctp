<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Book $book
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $book->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Books'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publishers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="books form large-9 medium-8 columns content">
    <?= $this->Form->create($book) ?>
    <fieldset>
        <legend><?= __('Edit Book') ?></legend>
        <?php
            echo $this->Form->control('isbn');
            echo $this->Form->control('title');
            echo $this->Form->control('category_id');
            echo $this->Form->control('description');
            echo $this->Form->control('author_id', ['options' => $authors]);
            echo $this->Form->control('publisher_id', ['options' => $publishers]);
            echo $this->Form->control('photo');
            echo $this->Form->control('dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
