<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Categories cell
 */
class CategoriesCell extends Cell
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
    public function display(){
        $this->loadModel('Categories');
        $descendants = $this->Categories->find('all', ['order' =>['Categories.lft' => 'ASC']]);
        $category = $this->request->session()->read('lcat');
        if(!isset($category)){
            $descendants= $descendants->where(function ($exp, $q){
                return $exp->isNull('parent_id');});
        }else{
            $descendants = $descendants->find('children', ['for'=>$category])->where(['parent_id'=>$category]);
        }
        $this->set(['categories'=>$descendants]);
    }
}
