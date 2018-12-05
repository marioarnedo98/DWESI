<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dog $dog
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('Edit Dog'), ['action' => 'edit', $dog->id])?> </li>
        <li><?=$this->Form->postLink(__('Delete Dog'), ['action' => 'delete', $dog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dog->id)])?> </li>
        <li><?=$this->Html->link(__('List Dogs'), ['action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New Dog'), ['action' => 'add'])?> </li>
        <li><?=$this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'])?> </li>
        <li><?=$this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'])?> </li>
    </ul>
</nav> -->
<div class="row row-sm no-gutter-xs js-masonry">
        <div class="col-xs-12 col-sm-12 col-md-12 grid-item">
            <div class="listing loop-item loop-grid card pos-relative   loop-grid  ">
              <div class="overlay-wrapper">
                  <a class="loop-image-wrapper " href="http://adoptar.org/index.php?page=item&id=170" title="<?php $dog->title?>">
          <?php
if (!isset($dog->photo)) {
    echo $this->Html->image('no-photo.png');

} else {
    //$img = WWW_ROOT . "files\Dogs\photo\\" . $dog->photo;
    //echo "<img src='$img' style=width:100%>";
    echo $this->Html->image('../files/Dogs/photo/' . $dog->photo, ['height' => '400px']);

}
?>
        </a>
                  <div class="card-block text-center">
                <h3 class="h4 card-title">
                    <?=h($dog->title)?></h3>
 <div class="card-subtitle text-muted font-secondary text-ellipsis text-sm m-b-0">
                  <span class="loop-item-location">
                    <?=h($dog->city)?></span>
            <p class="text-muted loop-item-description hidden-xs m-t-md ">
                    <?=$this->Text->autoParagraph(h($dog->description));?></p>
                    </div>
            </div>
          </div>
