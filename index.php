<?php
require 'autoload.php';

use Trabalho\Usuario;

$u = new Usuario();
$u->setEmail("Cesar@email.com");
var_dump(get_object_vars($u));

