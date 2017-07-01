<?php
namespace Trabalho;

class Usuario {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}