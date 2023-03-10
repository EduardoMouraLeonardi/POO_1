<?php
class Produto{
    protected $id;
    protected $descricao;
    protected $custo;

    function setId($novoId){
        $this->id=$novoId;
    }
    function setDescricao($novodescricao){
        $this->descricao=$novodescricao;
    }
    function setCusto($novoCusto){
        $this->custo=$novoCusto;
    }
    function getId(){
        return $this->id;
    }
    function getDescricao(){
        return $this->descricao;
    }
    function getCusto(){
        return $this->custo;
    }
   
}