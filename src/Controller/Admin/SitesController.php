<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Sites Controller
 *
 * @property \App\Model\Table\SitesTable $Sites
 *
 * @method \App\Model\Entity\Site[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SitesController extends AppController
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
        $sites = $this->paginate($this->Sites);
        $this->set('title', __('Site Lists'));
        $this->set(compact('sites'));
    }

    /**
     * View method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $site = $this->Sites->get($id, [
            'contain' => ['Employees', 'Equipments', 'Users']
        ]);

        $this->set('site', $site);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $site = $this->Sites->newEntity();
        if ($this->request->is('post')) {
            $site = $this->Sites->patchEntity($site, $this->request->getData());
            if ($this->Sites->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site could not be saved. Please, try again.'));
        }
        $this->set('title', __('Add Site'));
        $employees = $this->Sites->Employees->find('list', ['limit' => 200, 'keyField' => 'employee_id', 'valueField' => 'full_name']);
        $equipments = $this->Sites->Equipments->find('list', ['limit' => 200, 'keyField' => 'equipment_id', 'valueField' => 'serial_plate_number']);
        $users = $this->Sites->Users->find('list', ['limit' => 200, 'keyField' => 'user_id', 'valueField' => 'username']);
        $this->set(compact('site', 'employees', 'equipments', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $site = $this->Sites->get($id, [
            'contain' => ['Employees', 'Equipments', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $site = $this->Sites->patchEntity($site, $this->request->getData());
            if ($this->Sites->save($site)) {
                $this->Flash->success(__('The site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The site could not be saved. Please, try again.'));
        }
        $this->set('title', __('Edit Site'));
        $employees = $this->Sites->Employees->find('list', ['limit' => 200, 'keyField' => 'employee_id', 'valueField' => 'full_name']);
        $equipments = $this->Sites->Equipments->find('list', ['limit' => 200, 'keyField' => 'equipment_id', 'valueField' => 'serial_plate_number']);
        $users = $this->Sites->Users->find('list', ['limit' => 200, 'keyField' => 'user_id', 'valueField' => 'username']);
        $this->set(compact('site', 'employees', 'equipments', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Site id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $site = $this->Sites->get($id);
        if ($this->Sites->delete($site)) {
            $this->Flash->success(__('The site has been deleted.'));
        } else {
            $this->Flash->error(__('The site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
