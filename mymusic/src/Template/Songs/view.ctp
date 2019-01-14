<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Song'), ['action' => 'edit', $song->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Song'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authors'), ['controller' => 'Authors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Author'), ['controller' => 'Authors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Publishers'), ['controller' => 'Publishers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['controller' => 'Publishers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="songs view large-9 medium-8 columns content">
    <h3><?= h($song->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($song->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= $song->has('author') ? $this->Html->link($song->author->id, ['controller' => 'Authors', 'action' => 'view', $song->author->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publisher') ?></th>
            <td><?= $song->has('publisher') ? $this->Html->link($song->publisher->name, ['controller' => 'Publishers', 'action' => 'view', $song->publisher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($song->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song') ?></th>
            <td><?= h($song->song) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir Photo') ?></th>
            <td><?= h($song->dir_photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dir Song') ?></th>
            <td><?= h($song->dir_song) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($song->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($song->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($song->modified) ?></td>
        </tr>
    </table>
</div>
