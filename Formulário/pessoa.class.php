<?php

    class Pessoa{
    public $nome;
    private $telefone;
    private $origem;
    private $data;
    private $obsevacao;

    public function getNome(){
        return $this->nome;

    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function getTelefone(){
        return $this->telefone;

    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }


    public function getOrigem(){
        return $this->origem;

    }

    public function setOrigem($origem){
        $this->origem = $origem;
    }


    public function getData(){
        return $this->data;

    }

    public function setData($data){
        $this->data = $data;
    }


    public function getObsevacao(){
        return $this->obsevacao;

    }

    public function setObsevacao($obsevacao){
        $this->obsevacao = $obsevacao;
    }


}

?>