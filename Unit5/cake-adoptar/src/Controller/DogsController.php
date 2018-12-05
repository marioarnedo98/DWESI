<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Dogs Controller
 *
 * @property \App\Model\Table\DogsTable $Dogs
 *
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => '6',
            'order' => ['Dogs.id' => 'desc'],
            'contain' => ['Users'],
        ];
        $dogs = $this->paginate($this->Dogs->find()->where(['adopted' => '0']));
        $this->set(compact('dogs'));
    }
    public function seeAdopted()
    {

        $this->paginate = [
            'limit' => '6',
            'order' => ['Dogs.id' => 'desc'],
            'contain' => ['Users'],
        ];
        $dogs = $this->paginate($this->Dogs->find()->where(['adopted' => '1']));
        $this->set(compact('dogs'));
    }
    /**
     * View method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $dog = $this->Dogs->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('dog', $dog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dog = $this->Dogs->newEntity();
        if ($this->request->is('post')) {
            $dog = $this->Dogs->patchEntity($dog, $this->request->getData());
            if ($this->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be saved. Please, try again.'));
        }
        $users = $this->Dogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('dog', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dog = $this->Dogs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dog = $this->Dogs->patchEntity($dog, $this->request->getData());
            if ($this->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be saved. Please, try again.'));
        }
        $users = $this->Dogs->Users->find('list', ['limit' => 200]);
        $this->set(compact('dog', 'users'));
    }
    //adopt method
    public function adoptar($id = null)
    {
        $dog = $this->Dogs->get($id);
        /* $number_user = $this->Users->get($id_user, [
        'contain'=>[];
        ]);*/
        $dog->adopted = '1';
        $dog->user_id = $this->request->getSession()->read('Auth.User.id');

        if ($this->request->is(['patch', 'post', 'put', 'get'])) {

            if ($this->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been adopted.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be adopted. Please, try again.'));
        }

    }

    /**
     * Delete method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dog = $this->Dogs->get($id);
        if ($this->Dogs->delete($dog)) {
            $this->Flash->success(__('The dog has been deleted.'));
        } else {
            $this->Flash->error(__('The dog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view']);
    }
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
// Admin can access every action
        if (isset($user['role']) && $user['role'] === 'reader' && in_array($action, ['adoptar'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }
}
