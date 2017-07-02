<?php
require 'autoload.php';

use Trabalho\Usuario;
use Trabalho\Produto;
use Trabalho\Conexao;

$conexao = new Conexao();

$usuario = new Usuario();
$produto = new Produto();


$usuario->populaObjeto(array("email" => "Cesar3@email.com", "senha" => "123"));
$produto->populaObjeto(array("nome" => "Feijão 2", "valor" => "2.40"));

if($usuario->salvar($conexao->novaConexao())){
    echo "Usuario inserido com sucesso";
} else {
    echo "Não foi possível inserir o usuário! Verifique se o email já foi inserido.";
}

if($produto->salvar($conexao->novaConexao())) {
    echo "<br>Produto inserido com sucesso!";
} else {
    echo "<br>Não foi possível inserir o produto! Verifique se este nome já existe.";
}



