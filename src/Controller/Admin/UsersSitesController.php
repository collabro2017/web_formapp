<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UsersSites Controller
 *
 * @property \App\Model\Table\UsersSitesTable $UsersSites
 *
 * @method \App\Model\Entity\UsersSite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersSitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Sites']
        ];
        $usersSites = $this->paginate($this->UsersSites);

        $this->set(compact('usersSites'));
    }

    /**
     * View method
     *
     * @param string|null $id Users Site id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersSite = $this->UsersSites->get($id, [
            'contain' => ['Users', 'Sites']
        ]);

        $this->set('usersSite', $usersSite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersSite = $this->UsersSites->newEntity();
        if ($this->request->is('post')) {
            $usersSite = $this->UsersSites->patchEntity($usersSite, $this->request->getData());
            if ($this->UsersSites->save($usersSite)) {
                $this->Flash->success(__('The users site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users site could not be saved. Please, try again.'));
        }
        $users = $this->UsersSites->Users->find('list', ['limit' => 200]);
        $sites = $this->UsersSites->Sites->find('list', ['limit' => 200]);
        $this->set(compact('usersSite', 'users', 'sites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Site id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersSite = $this->UsersSites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersSite = $this->UsersSites->patchEntity($usersSite, $this->request->getData());
            if ($this->UsersSites->save($usersSite)) {
                $this->Flash->success(__('The users site has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users site could not be saved. Please, try again.'));
        }
        $users = $this->UsersSites->Users->find('list', ['limit' => 200]);
        $sites = $this->UsersSites->Sites->find('list', ['limit' => 200]);
        $this->set(compact('usersSite', 'users', 'sites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Site id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersSite = $this->UsersSites->get($id);
        if ($this->UsersSites->delete($usersSite)) {
            $this->Flash->success(__('The users site has been deleted.'));
        } else {
            $this->Flash->error(__('The users site could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
