<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Carts cell
 */
class CartsCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Books');
        $session = $this->request->session();
        $allProducts =$session->read('cart');
        if(count($allProducts)<1){
            return 0;
        }
        $count = 0;
        foreach($allProducts as $product){
            $count = $count + $product;
        }
        $this->set(['count' => $count]);
    }
}
