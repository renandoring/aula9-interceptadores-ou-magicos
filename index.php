<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 11:43 AM
 */

include_once 'Pessoa.class.php';

$renan = new Pessoa();
$renan->nome = "Renan";
$renan->endereco = "Rua xxxxxx";
$renan->telefone = "9999-99999";

$renan->andar();
echo $renan;