<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publisher $publisher
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publisher'), ['action' => 'edit', $publisher->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publisher'), ['action' => 'delete', $publisher->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publisher->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publishers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publisher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publishers view large-9 medium-8 columns content">
    <h3><?= h($publisher->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($publisher->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publisher->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($publisher->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($publisher->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Songs') ?></h4>
        <?php if (!empty($publisher->songs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Author Id') ?></th>
                <th scope="col"><?= __('Publisher Id') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Song') ?></th>
                <th scope="col"><?= __('Dir Photo') ?></th>
                <th scope="col"><?= __('Dir Song') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($publisher->songs as $songs): ?>
            <tr>
                <td><?= h($songs->id) ?></td>
                <td><?= h($songs->title) ?></td>
                <td><?= h($songs->author_id) ?></td>
                <td><?= h($songs->publisher_id) ?></td>
                <td><?= h($songs->photo) ?></td>
                <td><?= h($songs->song) ?></td>
                <td><?= h($songs->dir_photo) ?></td>
                <td><?= h($songs->dir_song) ?></td>
                <td><?= h($songs->created) ?></td>
                <td><?= h($songs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Songs', 'action' => 'view', $songs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Songs', 'action' => 'edit', $songs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songs', 'action' => 'delete', $songs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $songs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
