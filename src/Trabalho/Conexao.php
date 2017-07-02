<?php
namespace Trabalho;

class Conexao{
    public function novaConexao() {
        $dsn = 'mysql:dbname=trabalho_pos_2017;host=localhost';
        $dbn = new \PDO($dsn, 'root', '');
        return $dbn;
    }
}
