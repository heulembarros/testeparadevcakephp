<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit'=> 6,
            'order'=> [
                'Users.nome' => 'asc',
            ]
        ];

        $usuarios = $this->paginate($this->Users);

        $user = $this->Users->newEntity();
        if($this->request->is('post')){
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)){
                $this->Flash->success(__('Usuário cadastrado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            }else{
                $this->Flash->error(__('Erro ao cadastrar o usuário!'));
            }
        }

        // $usuarios = $this->Users->find()->all();
        $this->set(compact('usuarios','user'));

    }

    // public function add()
    // {
    //     $user = $this->Users->newEntity();
    //     if($this->request->is('post')){
    //         $user = $this->Users-patchEntity($user, $this->request->getData());
    //     }
    //     $this->set(compact('user'));
    // }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário removido.'));
        } else {
            $this->Flash->error(__('O usuário não foi deletado!'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
    
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set('user', $user);
    }    

}
