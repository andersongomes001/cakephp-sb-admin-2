<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccessController extends AppController {
    
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->loadModel("Users");
        $action = $this->request->getParam('action');
        if (in_array($action, ['login'])) {
            if($this->Auth->user()){
                return $this->redirect("/dashboard");
            }
        }
        $this->Auth->allow(['logout',"login","signin"]);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if($user['ativo']){
                    $this->Auth->setUser($user);
                    return $this->redirect("/dashboard");
                }else{
                    return $this->Flash->error('Usuário inativo.');
                }
                
            }
            $this->Flash->error('Usuário ou senha está incorreto.');
        }
    }

    public function logout()
    {
        $this->Auth->setUser(null);
        return $this->redirect("/");
    }
    
    public function  signin(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['perfil_id'] = 3;
            $data['ativo'] = false;
            $user = $this->Users->patchEntity($user, $data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect("/");
            }
            foreach($user->errors() as $key => $value){
                foreach($value as $k => $text){
                    if($k == "_isUnique"){
                        $this->Flash->error(strtoupper($key) .", Já esta em uso. ");
                    }else{
                        $this->Flash->error(strtoupper($key) ." ". $text);
                    }
                    
                    
                    //var_dump($text);
                }
                //
                //var_dump($value);
                //var_dump($key);
            }
        }
        $this->set(compact('user'));
    }
}