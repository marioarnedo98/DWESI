<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dog $dog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('List Dogs'), ['action' => 'index'])?></li>
        <li><?=$this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'])?></li>
    </ul>
</nav>
<div class="dogs form large-9 medium-8 columns content">
    <?=$this->Form->create($dog, ['type' => 'file'])?>

    <fieldset>
        <legend><?=__('Add Dog')?></legend>
        <?php
echo $this->Form->control('title');
echo $this->Form->control('description');
echo $this->Form->control('date');
echo $this->Form->control('city');
// echo $this->Form->control('adopted');
// echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);

echo $this->Form->control('photo', ['type' => 'file']);
?>
    </fieldset>
    <?=$this->Form->button(__('Submit'))?>
    <?=$this->Form->end()?>
</div>
