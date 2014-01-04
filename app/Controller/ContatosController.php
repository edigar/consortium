<?php

class ContatosController extends AppController {
    
	public function index() {
		$this->layout = 'admin';
        $this->Contato->recursive = 0;
        $this->set('contatos', $this->paginate());
	}

    public function contatar() {
        if ($this->request->is('post')) {
            $this->Contato->create();
            if ($this->Contato->save($this->request->data)) {
                $this->Session->setFlash('Mensagem enviada com sucesso. Obrigado por entrar em contato! :)');
            } else { 
                echo $this->Contato->save($this->request->data);
                $this->Session->setFlash('Algum problema impediu o envio da mensagem. Tente novamente!');
            }
        }
    }

    public function delete($id = null) {
        if($this->Contato->delete($id)) {
            $this->Session->setFlash('Contato deletado');
            $this->redirect('../contatos');
        }
        $this->Session->setFlash('O contato não foi deletado');
        $this->redirect('../contatos');
    }
}