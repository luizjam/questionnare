<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Representante
 *
 * @author LuizCarlos
 */
class Representante extends AppModel{
    public $name = 'Representante';
    public $useTable = 'tb_representantes';
    public $primaryKey = 'cd_representante';
    
    public $validate = array(
        'nm_representante' => array(
            'nomeRepresentante' => array(
                'rule' => 'notEmpty',
                'message' => 'Campo obrigatório.'
            )
        ),
        'ds_cpf' => array(
            'cpf' => array(
                'rule' => 'validateCPF',
                'message' => 'CPF inválido'
            )
        ),
        'ds_email' => array(
            'email' => array(
                'rule' => 'email',
                'message' => 'Informe um e-mail válido.'
            )
        ),
        'ds_fone' => array(
            'fone' => array(
                'rule' => 'validateFone',
                'message' => 'Informe o telefone seguindo o ex: 055(13)3446-1910'
            )
        ),
        'ds_celular' => array(
            'celular' => array(
                'rule' => 'validateFone',
                'message' => 'Informe o celular seguingo o ex: 055(13)99188-0327'
            )
        )
    );
    
    public $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'cd_empresa'
        )
    );
}
