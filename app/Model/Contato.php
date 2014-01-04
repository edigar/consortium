<?php
App::uses('AuthComponent', 'Controller/Component');

class Contato extends AppModel {
    
    public $validate = array(
        'nome' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Coloque seu nome'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Coloque seu e-mail'
            ), array(
        	'rule' => 'isUnique', // Único
        	'message' => 'Este e-mail já está em uso'
        	)
        ),
        'mensagem' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Envie alguma mensagem'
            )
        ),
    );
}