<?php
namespace Trabalho\Traits;

trait Hidratacao {
    public function populaObjeto(array $dados) {

        foreach($dados as $key => $value) {
            $this->$key = $value;
        }
    }
}