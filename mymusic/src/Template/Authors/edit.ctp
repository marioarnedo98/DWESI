<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>
<div class="authors users_form submit_song content">
    <?= $this->Form->create($author) ?>
    <fieldset>
    <div class="text-intro-login">
<?=__('<b>Edit Your Author!</b>')?>
</div>
        <?php
            echo $this->Form->control('Name',['placeholder' => 'Name']);
        ?>
    </fieldset>
    <div class="btn-login">
    <?= $this->Form->button(__('Edit')) ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $author->id],
                ['class' => 'btn btn-danger btn-delete'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]
            )
        ?>
</div>
    <?= $this->Form->end() ?>
</div>
