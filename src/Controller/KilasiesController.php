<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kilasies Controller
 *
 * @property \App\Model\Table\KilasiesTable $Kilasies
 */
class KilasiesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('kilasies', $this->paginate($this->Kilasies));
        $this->set('_serialize', ['kilasies']);
    }

    /**
     * View method
     *
     * @param string|null $id Kilasy id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kilasy = $this->Kilasies->get($id, [
            'contain' => ['Students', 'Subjects']
        ]);
        $this->set('kilasy', $kilasy);
        $this->set('_serialize', ['kilasy']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kilasy = $this->Kilasies->newEntity();
        if ($this->request->is('post')) {
            $kilasy = $this->Kilasies->patchEntity($kilasy, $this->request->data);
            if ($this->Kilasies->save($kilasy)) {
                $this->Flash->success('The kilasy has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The kilasy could not be saved. Please, try again.');
            }
        }
        $this->set(compact('kilasy'));
        $this->set('_serialize', ['kilasy']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kilasy id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kilasy = $this->Kilasies->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kilasy = $this->Kilasies->patchEntity($kilasy, $this->request->data);
            if ($this->Kilasies->save($kilasy)) {
                $this->Flash->success('The kilasy has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The kilasy could not be saved. Please, try again.');
            }
        }
        $this->set(compact('kilasy'));
        $this->set('_serialize', ['kilasy']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kilasy id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kilasy = $this->Kilasies->get($id);
        if ($this->Kilasies->delete($kilasy)) {
            $this->Flash->success('The kilasy has been deleted.');
        } else {
            $this->Flash->error('The kilasy could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
