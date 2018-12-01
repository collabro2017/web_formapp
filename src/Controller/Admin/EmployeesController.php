<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 *
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmployeesController extends AppController
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
        $employees = $this->paginate($this->Employees, ['contain' => ['Sites']]);

        $this->set('title', __('Employees List'));
        $this->set(compact('employees'));
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Sites']
        ]);

        $this->set('employee', $employee);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $inputs = $this->request->getData();
            $inputs['hire_date'] = !empty($inputs['hire_date']) ? date('Y-m-d', strtotime($inputs['hire_date'])) : NULL;
            $employee = $this->Employees->patchEntity($employee, $inputs);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set('title', __('Add Employee'));
        $sites = $this->Employees->Sites->find('list', ['limit' => 200, 'keyField' => 'site_id', 'valueField' => 'site_name']);
        $this->set(compact('employee', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Sites']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inputs = $this->request->getData();
            $inputs['hire_date'] = !empty($inputs['hire_date']) ? date('Y-m-d', strtotime($inputs['hire_date'])) : NULL;
            $inputs['active'] = !empty($inputs['active']) ? 1 : NULL;
            $employee = $this->Employees->patchEntity($employee, $inputs);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The employee could not be saved. Please, try again.'));
        }
        $this->set('title', __('Edit Employee'));
        $sites = $this->Employees->Sites->find('list', ['limit' => 200, 'keyField' => 'site_id', 'valueField' => 'site_name']);
        $this->set(compact('employee', 'sites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Get employees
     * site_id required
     * @return employees list
     */
    public function ajaxGetEmployees($site_id = null)
    {
        $this->autoRender = false;
        echo json_encode($this->Employees->allEmployeeList($site_id));
        exit();
    }
}
