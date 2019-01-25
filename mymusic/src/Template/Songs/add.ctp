<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<div class="content users_form submit_song">
    <?= $this->Form->create($song , ['type'=>'file']) ?>
    <fieldset>
    <div class="text-intro-login">
<?=__('<b>Submit Your Song!</b>')?>
</div>
        <?php
        // debug($categories);
            echo $this->Form->control('title',['placeholder' => 'Title']);
            echo $this->Form->control('author_id', ['options' => $authors]);
            echo $this->Form->control('publisher_id', ['options' => $publishers]);
            echo $this->Form->control('categories_id', ['options' => $categories]);
            echo $this->Form->control('photo', ['type' => 'file']);
            echo $this->Form->control('song', ['type' => 'file']);

        ?>
    </fieldset>
    <div class="btn-login">
    <?= $this->Form->button(__('Submit')) ?>
</div>
    <?= $this->Form->end() ?>
</div>
