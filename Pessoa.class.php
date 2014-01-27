<?php
/**
 * Created by PhpStorm.
 * User: rdoring
 * Date: 1/26/14
 * Time: 11:16 AM
 */

class Pessoa {
    private $nome;
    private $endereco;
    private $telefone;

    function __get($propriedade){
        return $this->$propriedade;
    }

    function __set($propriedade,$valor){
        $this->$propriedade = $valor;
    }

    function andar(){
        echo $this->nome. " esta andando."."\n";
    }

    function __toString(){
        return $this->nome ." reside na ".$this->endereco." e seu telefone é ".$this->telefone;
    }
} 