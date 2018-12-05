<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dog[]|\Cake\Collection\CollectionInterface $dogs
 */
?>
<!-- No quitar esto de abajo -->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
    <li class="heading">
      <?=__('Actions')?>
    </li>
    <li>
      <?=$this->Html->link(__('New Dog'), ['action' => 'add'])?>
    </li>
    <li>
      <?=$this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'])?>
    </li>
    <li>
      <?=$this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'])?>
    </li>
  </ul>
</nav>
<?php $name = $this->Session->read('Auth.User.username');?>
<div class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left nav-underline">
      <li class="active">
        <a class="js-search-filter" href="/adoptar/" rel="nofollow">
          All</span>
        </a>
      </li>
    </ul>

    </li>
    </ul>
  </div>
</div>
<div class="row row-sm no-gutter-xs js-masonry">
  <?php foreach ($dogs as $dog): ?>

  <div class="col-xs-4 col-sm-4 col-md-4 grid-item">
    <div class="listing loop-item loop-grid card pos-relative   loop-grid  ">
      <div class="overlay-wrapper">
        <a class="loop-image-wrapper " href="http://adoptar.org/index.php?page=item&id=170" title="<?php $dog->title?>">


          <?php
if (!isset($dog->photo)) {
    echo $this->Html->image('no-photo.png', ['width' => '100%']);

} else {
    $img = '../' . $dog->dir . $dog->photo;
    echo "<img src='$img' style=width:100%>";
}
?>
        </a>
      </div>
      <div class="card-block text-center">
        <h3 class="h4 card-title">
          <?=h($dog->title)?>
          </a>
        </h3>
        <div class="card-subtitle text-muted font-secondary text-ellipsis text-sm m-b-0">
          <span class="loop-item-location">
            <?=h($dog->city)?></span>
            <h3>Adopted by <?=h($dog->user->username)?></h3>

        </div>
        <p class="text-muted loop-item-description hidden-xs m-t-md ">
          <?=h($dog->description)?>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach;?>
</div>
</div>
<div class="paginator">
  <ul class="pagination">
    <?=$this->Paginator->first('<< ' . __('first'))?>
    <?=$this->Paginator->prev('< ' . __('previous'))?>
    <?=$this->Paginator->numbers()?>
    <?=$this->Paginator->next(__('next') . ' >')?>
    <?=$this->Paginator->last(__('last') . ' >>')?>
  </ul>
  <p>
    <?=$this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])?>
  </p>
</div>
</div>