<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * EmployeesSites Controller
 *
 * @property \App\Model\Table\EmployeesSitesTable $EmployeesSites
 *
 * @method \App\Model\Entity\EmployeesSite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesSitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Sites']
        ];
        $employeesSites = $this->paginate($this->EmployeesSites);

        $this->set(compact('employeesSites'));
    }

    /**
     * View method
     *
     * @param string|null $id Employees Site id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employeesSite = $this->EmployeesSites->get($id, [
            'contain' => ['Employees', 'Sites']
        ]);

        $this->set('employeesSite', $employeesSite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employeesSite = $this->EmployeesSites->newEntity();
        if ($this->request->is('post')) {
            $employeesSite = $this->EmployeesSites->patchEntity($employeesSite, $this->request->getData());
            if ($this->EmployeesSites->save($employeesSite)) {
                $this->Flash->success(__('The employees site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees site could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesSites->Employees->find('list', ['limit' => 200]);
        $sites = $this->EmployeesSites->Sites->find('list', ['limit' => 200]);
        $this->set(compact('employeesSite', 'employees', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employees Site id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employeesSite = $this->EmployeesSites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employeesSite = $this->EmployeesSites->patchEntity($employeesSite, $this->request->getData());
            if ($this->EmployeesSites->save($employeesSite)) {
                $this->Flash->success(__('The employees site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employees site could not be saved. Please, try again.'));
        }
        $employees = $this->EmployeesSites->Employees->find('list', ['limit' => 200]);
        $sites = $this->EmployeesSites->Sites->find('list', ['limit' => 200]);
        $this->set(compact('employeesSite', 'employees', 'sites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employees Site id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employeesSite = $this->EmployeesSites->get($id);
        if ($this->EmployeesSites->delete($employeesSite)) {
            $this->Flash->success(__('The employees site has been deleted.'));
        } else {
            $this->Flash->error(__('The employees site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
