<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 */
?>

<div class="row">
  

    <div class="text-intro-login">
    <h3><?=h($author->Name)?></h3>
            <q><?=h($author->description)?></q>
        <h3><?= __('Related Songs of '.$author->Name) ?></h3></div>
        <?php if (!empty($author->songs)): ?>
            <?php foreach ($author->songs as $songs): ?>
            <div class="music-player col-sm-12">
            <div class="cover">
            <img src="<?php echo $this->request->webroot;?>files/Songs/photo/<?php echo h($songs->photo)?>" alt="Caratula" srcset="">
            </div>
            <div class="title">
                    <h3><?= $songs->has('author') ? $this->Html->link($songs->author->Name, ['controller' => 'Authors', 'action' => 'view', $songs->author->id]) : '' ?></h3>
                    <h1><?= h($songs->title) ?></h1>
                </div>
                <div class="lector">
                <audio controls>
                        <source src="<?php echo $this->request->webroot;?>files/Songs/song/<?php echo h($songs->song)?>" type="audio/mp3"/>
                    </audio>
                </div>
                </div>
                    <!-- <?= $this->Html->link(__('View'), ['controller' => 'Songs', 'action' => 'view', $songs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Songs', 'action' => 'edit', $songs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songs', 'action' => 'delete', $songs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $songs->id)]) ?> -->

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
