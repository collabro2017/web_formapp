<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Equipments Controller
 *
 * @property \App\Model\Table\EquipmentsTable $Equipments
 *
 * @method \App\Model\Entity\Equipment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EquipmentsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $equipments = $this->paginate($this->Equipments);

        $this->set('title', __('All Equipments'));
        $this->set(compact('equipments'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipment = $this->Equipments->get($id, [
            'contain' => ['Sites']
        ]);

        $this->set('title', __('View Equipment'));
        $this->set('equipment', $equipment);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipment = $this->Equipments->newEntity();
        if ($this->request->is('post')) {
            $equipment = $this->Equipments->patchEntity($equipment, $this->request->getData());
            if ($this->Equipments->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
        }
        $sites = $this->Equipments->Sites->sitesList();

        $this->set('title', __('Add Equipment'));
        $this->set(compact('equipment', 'sites'));
        $this->setFixedDatas();
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipment = $this->Equipments->get($id, [
            'contain' => ['Sites']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipment = $this->Equipments->patchEntity($equipment, $this->request->getData());
            if ($this->Equipments->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
        }
        $sites = $this->Equipments->Sites->sitesList();

        $this->set('title', __('Edit Equipment'));
        $this->set(compact('equipment', 'sites'));
        $this->setFixedDatas();
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipment = $this->Equipments->get($id);
        if ($this->Equipments->delete($equipment)) {
            $this->Flash->success(__('The equipment has been deleted.'));
        } else {
            $this->Flash->error(__('The equipment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // Set static array for fuel type and status
    private function setFixedDatas() {
        $statuses = ['In Use' => 'In Use', 'Idle' => 'Idle', 'Broken' => 'Broken'];
        $fuelTypes = ['Gas' => 'Gas', 'Diesel' => 'Diesel', '2T' => '2T'];
        $this->set(compact('statuses', 'fuelTypes'));
    }
}
