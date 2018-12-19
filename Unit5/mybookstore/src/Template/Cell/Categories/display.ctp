<ul class="nav">
    <li class="nav-header active"><?=$this->Html->link('All Categories', '/');?></li>
    <?php 
    foreach($categories as $category){
        $url= '/pages/listby/'.$category->id .'/'.$category->parent_id;?>
        <li><?= $this->Html->link($category->name, $url);?></li>
    <?php
    }
?>
</ul>