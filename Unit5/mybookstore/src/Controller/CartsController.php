<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Session;
use Cake\Event\Event;

class CartsController extends AppController{
    public $session;
    public function beforeFilter(Event $event){
            $this->Auth->allow(['add', 'view']);
        
        $this->session = $this->request->session();
        $this->loadModel('Books');
    }
    function beforeRender (Event $event){
        $this->viewBuilder()->layout('front');
    }
    public function add ($productId=null){
        $this->autoRender=false;
       
        if($this->request->is('ajax')){
          
            $allProducts= $this->session->read('cart');
            
            if(null!=$allProducts){
                if(array_key_exists($productId, $allProducts)){
                    $allProducts[$productId]++;
                }else{
                    $allProducts[$productId]=1;
                }
            }
            else{
                $allProducts[$productId] =1;
                
            }
            $this->session->write('cart', $allProducts);
          
        }
            $count= $this->getCount();
            $this->response->body(json_encode($count));
            return $this->response;
    }
    public function getCount(){
        $allProducts = $this->session->read('cart');
        if(count($allProducts)<1){
            return 0;
        }
        $count =0;
        foreach($allProducts as $product){
            $count = $count+$product;
        }
        return $count;
    }
    public function view(){
        $carts = $this->session->read('cart');
        $products = [];
        if(null!= $carts){
            foreach ($carts as $productId => $count){
                $product = $this->Books->get($productId);
                $product->count= $count;
                $products[]=$product;
            }
        }
        // debug
        $this->set(compact('products'));
    }
}