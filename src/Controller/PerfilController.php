<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Perfil Controller
 *
 * @property \App\Model\Table\PerfilTable $Perfil
 *
 * @method \App\Model\Entity\Perfil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PerfilController extends AppController
{

    public function isAuthorized($user)
    {        
        $action = $this->request->params['action'];

        if (in_array($action, ['index','edit',"view",'add','delete'])) {
            //so pode ter acesso se o usuario for admin
            if(\intval($user["perfil_id"]) === 1){
                return true;
            }
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $perfil = $this->paginate($this->Perfil);

        $this->set(compact('perfil'));
    }

    /**
     * View method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perfil = $this->Perfil->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('perfil', $perfil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perfil = $this->Perfil->newEntity();
        if ($this->request->is('post')) {
            $perfil = $this->Perfil->patchEntity($perfil, $this->request->getData());
            if ($this->Perfil->save($perfil)) {
                $this->Flash->success(__('The perfil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfil could not be saved. Please, try again.'));
        }
        $this->set(compact('perfil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $perfil = $this->Perfil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perfil = $this->Perfil->patchEntity($perfil, $this->request->getData());
            if ($this->Perfil->save($perfil)) {
                $this->Flash->success(__('The perfil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The perfil could not be saved. Please, try again.'));
        }
        $this->set(compact('perfil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Perfil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perfil = $this->Perfil->get($id);
        if ($this->Perfil->delete($perfil)) {
            $this->Flash->success(__('The perfil has been deleted.'));
        } else {
            $this->Flash->error(__('The perfil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
