<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * EquipmentsSites Controller
 *
 * @property \App\Model\Table\EquipmentsSitesTable $EquipmentsSites
 *
 * @method \App\Model\Entity\EquipmentsSite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipmentsSitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sites', 'Equipments']
        ];
        $equipmentsSites = $this->paginate($this->EquipmentsSites);

        $this->set(compact('equipmentsSites'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipments Site id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipmentsSite = $this->EquipmentsSites->get($id, [
            'contain' => ['Sites', 'Equipments']
        ]);

        $this->set('equipmentsSite', $equipmentsSite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipmentsSite = $this->EquipmentsSites->newEntity();
        if ($this->request->is('post')) {
            $equipmentsSite = $this->EquipmentsSites->patchEntity($equipmentsSite, $this->request->getData());
            if ($this->EquipmentsSites->save($equipmentsSite)) {
                $this->Flash->success(__('The equipments site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipments site could not be saved. Please, try again.'));
        }
        $sites = $this->EquipmentsSites->Sites->find('list', ['limit' => 200]);
        $equipments = $this->EquipmentsSites->Equipments->find('list', ['limit' => 200]);
        $this->set(compact('equipmentsSite', 'sites', 'equipments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipments Site id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipmentsSite = $this->EquipmentsSites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipmentsSite = $this->EquipmentsSites->patchEntity($equipmentsSite, $this->request->getData());
            if ($this->EquipmentsSites->save($equipmentsSite)) {
                $this->Flash->success(__('The equipments site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipments site could not be saved. Please, try again.'));
        }
        $sites = $this->EquipmentsSites->Sites->find('list', ['limit' => 200]);
        $equipments = $this->EquipmentsSites->Equipments->find('list', ['limit' => 200]);
        $this->set(compact('equipmentsSite', 'sites', 'equipments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipments Site id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipmentsSite = $this->EquipmentsSites->get($id);
        if ($this->EquipmentsSites->delete($equipmentsSite)) {
            $this->Flash->success(__('The equipments site has been deleted.'));
        } else {
            $this->Flash->error(__('The equipments site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
