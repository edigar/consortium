<?php
Class UsersController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout');
    }

    public function index() {
        $this->layout = 'admin';
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuário adicionado'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException('Usuário inválido');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) $this->redirect(array('action' => 'index'));
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function login() {
	    if ($this->Auth->login()) $this->redirect($this->Auth->redirect());
	    else $this->Session->setFlash(__('Login ou senha incorretos, tente novamente!'));
	}

	public function logout() {
    	$this->redirect($this->Auth->logout());
	}
}