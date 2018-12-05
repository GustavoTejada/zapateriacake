<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shoes Controller
 *
 * @property \App\Model\Table\ShoesTable $Shoes
 *
 * @method \App\Model\Entity\Shoe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $shoes = $this->paginate($this->Shoes);

        $this->set(compact('shoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Shoe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shoe = $this->Shoes->get($id, [
            'contain' => ['Sales']
        ]);

        $this->set('shoe', $shoe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shoe = $this->Shoes->newEntity();
        if ($this->request->is('post')) {
            $shoe = $this->Shoes->patchEntity($shoe, $this->request->getData());
            if ($this->Shoes->save($shoe)) {
                $this->Flash->success(__('The shoe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shoe could not be saved. Please, try again.'));
        }
        $this->set(compact('shoe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shoe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shoe = $this->Shoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shoe = $this->Shoes->patchEntity($shoe, $this->request->getData());
            if ($this->Shoes->save($shoe)) {
                $this->Flash->success(__('The shoe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shoe could not be saved. Please, try again.'));
        }
        $this->set(compact('shoe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shoe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shoe = $this->Shoes->get($id);
        if ($this->Shoes->delete($shoe)) {
            $this->Flash->success(__('The shoe has been deleted.'));
        } else {
            $this->Flash->error(__('The shoe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
