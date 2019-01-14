<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song[]|\Cake\Collection\CollectionInterface $songs
 */
?>
<div class="row">
<div class="text-intro-login">
<?=__('<h3><b>Songs</b></h3>')?>
</div>
            <?php foreach ($songs as $song): ?>
            <div class="music-player col-sm-3">
            <div class="cover">
            <img src="<?php echo $this->request->webroot;?>files/Songs/photo/<?php echo h($song->photo)?>" alt="Caratula" srcset="">
            </div>
            <div class="title">
                    <h3><?= $song->has('author') ? $this->Html->link($song->author->Name, ['controller' => 'Authors', 'action' => 'view', $song->author->id]) : '' ?></h3>
                    <h1><?= h($song->title) ?></h1>
                </div>
                <div class="lector">
                <audio controls>
                        <source src="<?php echo $this->request->webroot;?>files/Songs/song/<?php echo h($song->song)?>" type="audio/mp3"/>
                    </audio>
                </div>
                    <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $song->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $song->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?>
                     -->
                    </div>
            <?php endforeach; ?>
            </div>
    <div class="paginator row">
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