<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Attendances Controller
 *
 * @property \App\Model\Table\AttendancesTable $Attendances
 *
 * @method \App\Model\Entity\Attendance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AttendancesController extends AppController
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
        $this->paginate = [
            'contain' => ['Employees', 'Sites']
        ];
        $attendances = $this->paginate($this->Attendances);

        $this->set('title', __('All Attendances'));
        $this->set(compact('attendances'));
    }

    /**
     * View method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $attendance = $this->Attendances->get($id, [
            'contain' => ['Employees', 'Sites']
        ]);

        $this->set('attendance', $attendance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $attendance = $this->Attendances->newEntity();
        if ($this->request->is('post')) {
            $inputs = $this->request->getData();
            $inputs['work_date'] = !empty($inputs['work_date']) ? date('Y-m-d', strtotime($inputs['work_date'])) : NULL;
            $attendance = $this->Attendances->patchEntity($attendance, $inputs);
            if ($this->Attendances->save($attendance)) {
                $this->Flash->success(__('The attendance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }

        $this->set('title', __('Add Attendance'));
        $sites = $this->Attendances->Sites->sitesList();
        $this->set('types', $this->getTypes());
        $this->set(compact('attendance', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $attendance = $this->Attendances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inputs = $this->request->getData();
            $inputs['work_date'] = !empty($inputs['work_date']) ? date('Y-m-d', strtotime($inputs['work_date'])) : NULL;
            $attendance = $this->Attendances->patchEntity($attendance, $inputs);
            if ($this->Attendances->save($attendance)) {
                $this->Flash->success(__('The attendance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The attendance could not be saved. Please, try again.'));
        }

        $this->set('title', __('Edit Attendance'));
        $sites = $this->Attendances->Sites->sitesList();
        $employees = $this->Attendances->Employees->allEmployeeList($attendance->site_id);
        $this->set('types', $this->getTypes());
        $this->set(compact('attendance', 'sites', 'employees'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Attendance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $attendance = $this->Attendances->get($id);
        if ($this->Attendances->delete($attendance)) {
            $this->Flash->success(__('The attendance has been deleted.'));
        } else {
            $this->Flash->error(__('The attendance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Return all type return method
     * private method
     */
    public function getTypes()
    {
        return ['A' => 'A', 'DO' => 'DO', 'P' => 'P', 'L' => 'L', 'H' => 'H', 'S' => 'S', 'Time' => 'Time'];
    }

}
