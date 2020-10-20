<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author everaldo.araujo
 */
class Usuario {
    public $id;
    public $nome;
    public $cpf;
    public $email;
    
    public function Usuario($id, $nome, $cpf, $email) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setEmail($email);
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setEmail($email): void {
        $this->email = $email;
    }
}
?>