<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<div class="songs  users_form submit_song content">
    <?= $this->Form->create($song , ['type'=>'file']) ?>
    <fieldset>
    <div class="text-intro-login">
<?=__('<b>Submit Your Song!</b>')?>
</div>
        <?php
            echo $this->Form->control('title',['placeholder' => 'Title']);
            echo $this->Form->control('author_id', ['options' => $authors]);
            echo $this->Form->control('publisher_id', ['options' => $publishers]);
            echo $this->Form->control('category_id');
            echo $this->Form->control('photo', ['type' => 'file'], ['required' => false]);
            echo $this->Form->control('song', ['type' => 'file'], ['required' => false]);
        ?>
    </fieldset>
    <div class="btn-login">
    <?= $this->Form->button(__('Edit')) ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $song->id],
                ['class' => 'btn btn-danger btn-delete'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]
            )
        ?>
</div>
    <?= $this->Form->end() ?>
</div>
