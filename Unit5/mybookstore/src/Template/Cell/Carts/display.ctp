<?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">'.$count=(isset($count))? $count:'0'.'</span>',
array('controller'=> 'carts', 'action'=>'view'), array('escape'=>false));?>
