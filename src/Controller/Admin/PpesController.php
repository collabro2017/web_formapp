<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Ppes Controller
 *
 * @property \App\Model\Table\PpesTable $Ppes
 *
 * @method \App\Model\Entity\Ppe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PpesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sites', 'Employees']
        ];
        $ppes = $this->paginate($this->Ppes);

        $this->set(compact('ppes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ppe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ppe = $this->Ppes->get($id, [
            'contain' => ['Sites', 'Employees']
        ]);

        $this->set('ppe', $ppe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ppe = $this->Ppes->newEntity();
        if ($this->request->is('post')) {
            $ppe = $this->Ppes->patchEntity($ppe, $this->request->getData());
            if ($this->Ppes->save($ppe)) {
                $this->Flash->success(__('The ppe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ppe could not be saved. Please, try again.'));
        }
        $sites = $this->Ppes->Sites->find('list', ['limit' => 200]);
        $employees = $this->Ppes->Employees->find('list', ['limit' => 200]);
        $this->set(compact('ppe', 'sites', 'employees'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ppe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ppe = $this->Ppes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ppe = $this->Ppes->patchEntity($ppe, $this->request->getData());
            if ($this->Ppes->save($ppe)) {
                $this->Flash->success(__('The ppe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ppe could not be saved. Please, try again.'));
        }
        $sites = $this->Ppes->Sites->find('list', ['limit' => 200]);
        $employees = $this->Ppes->Employees->find('list', ['limit' => 200]);
        $this->set(compact('ppe', 'sites', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ppe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ppe = $this->Ppes->get($id);
        if ($this->Ppes->delete($ppe)) {
            $this->Flash->success(__('The ppe has been deleted.'));
        } else {
            $this->Flash->error(__('The ppe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
