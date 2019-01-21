<?php
$this->layout='back';
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song[]|\Cake\Collection\CollectionInterface $songs
 */
?>
<div class="text-intro-login">
<?=__('<h3><b>Songs</b></h3>')?>
</div>
<table cellpadding="0" cellspacing="0">
<thead>
            <tr>
                <th scope="col-sm-1"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('song') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($songs as $song): ?>
            <tr>
                <td><?= h($song->id) ?></td>
                <td><?= h($song->title) ?></td>
                <td><?= $song->has('author') ? $this->Html->link($song->author->Name, ['controller' => 'Authors', 'action' => 'view', $song->author->id]) : '' ?></td>
                <td class="lector">
                <audio controls>
                        <source src="<?php echo $this->request->webroot;?>files/Songs/song/<?php echo h($song->song)?>" type="audio/mp3"/>
                    </audio>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $song->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?>
                </td>
                    
            </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
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