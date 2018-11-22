<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * FuelConsumptions Controller
 *
 * @property \App\Model\Table\FuelConsumptionsTable $FuelConsumptions
 *
 * @method \App\Model\Entity\FuelConsumption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuelConsumptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Equipments']
        ];
        $fuelConsumptions = $this->paginate($this->FuelConsumptions);

        $this->set(compact('fuelConsumptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Fuel Consumption id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuelConsumption = $this->FuelConsumptions->get($id, [
            'contain' => ['Equipments']
        ]);

        $this->set('fuelConsumption', $fuelConsumption);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuelConsumption = $this->FuelConsumptions->newEntity();
        if ($this->request->is('post')) {
            $fuelConsumption = $this->FuelConsumptions->patchEntity($fuelConsumption, $this->request->getData());
            if ($this->FuelConsumptions->save($fuelConsumption)) {
                $this->Flash->success(__('The fuel consumption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel consumption could not be saved. Please, try again.'));
        }
        $equipments = $this->FuelConsumptions->Equipments->find('list', ['limit' => 200]);
        $this->set(compact('fuelConsumption', 'equipments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel Consumption id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuelConsumption = $this->FuelConsumptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuelConsumption = $this->FuelConsumptions->patchEntity($fuelConsumption, $this->request->getData());
            if ($this->FuelConsumptions->save($fuelConsumption)) {
                $this->Flash->success(__('The fuel consumption has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fuel consumption could not be saved. Please, try again.'));
        }
        $equipments = $this->FuelConsumptions->Equipments->find('list', ['limit' => 200]);
        $this->set(compact('fuelConsumption', 'equipments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel Consumption id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuelConsumption = $this->FuelConsumptions->get($id);
        if ($this->FuelConsumptions->delete($fuelConsumption)) {
            $this->Flash->success(__('The fuel consumption has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel consumption could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
