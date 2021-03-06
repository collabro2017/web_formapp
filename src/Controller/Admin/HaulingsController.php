<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Haulings Controller
 *
 * @property \App\Model\Table\HaulingsTable $Haulings
 *
 * @method \App\Model\Entity\Hauling[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HaulingsController extends AppController
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
            'contain' => ['Sites']
        ];
        $haulings = $this->paginate($this->Haulings);

        $this->set('title', __('Haulings'));
        $this->set(compact('haulings'));
    }

    /**
     * View method
     *
     * @param string|null $id Hauling id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hauling = $this->Haulings->get($id, [
            'contain' => ['Sites']
        ]);

        $this->set('title', __('View Hauling'));
        $this->set('hauling', $hauling);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hauling = $this->Haulings->newEntity();
        if ($this->request->is('post')) {
            $inputs = $this->request->getData();
            $inputs['hauling_date'] = !empty($inputs['hauling_date']) ? date('Y-m-d', strtotime($inputs['hauling_date'])) : NULL;
            $hauling = $this->Haulings->patchEntity($hauling, $inputs);
            if ($this->Haulings->save($hauling)) {
                $this->Flash->success(__('The hauling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hauling could not be saved. Please, try again.'));
        }
        $sites = $this->Haulings->Sites->sitesList();

        $this->set('title', __('Add Hauling'));
        $this->set(compact('hauling', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hauling id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hauling = $this->Haulings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inputs = $this->request->getData();
            $inputs['hauling_date'] = !empty($inputs['hauling_date']) ? date('Y-m-d', strtotime($inputs['hauling_date'])) : NULL;
            $hauling = $this->Haulings->patchEntity($hauling, $inputs);
            if ($this->Haulings->save($hauling)) {
                $this->Flash->success(__('The hauling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hauling could not be saved. Please, try again.'));
        }
        $sites = $this->Haulings->Sites->sitesList();
        $this->set('title', __('Edit Hauling'));
        $this->set(compact('hauling', 'sites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hauling id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hauling = $this->Haulings->get($id);
        if ($this->Haulings->delete($hauling)) {
            $this->Flash->success(__('The hauling has been deleted.'));
        } else {
            $this->Flash->error(__('The hauling could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
