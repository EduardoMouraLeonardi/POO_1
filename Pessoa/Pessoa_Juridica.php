<?php
class Pessoa_Juridica extends Pessoa{
    private $cnpj_pessoa;
    public $cnpj_consult;

    function setCnpj_Pessoa($novoCnpj_Pessoa){
        $this-> cnpj_pessoa=$novoCnpj_Pessoa;
    }
    function setCnpj_Consult($novoCnpj_Consult){
        $this-> cnpj_consult=$novoCnpj_Consult;
    }
    
    function getCnpj_Pessoa(){
        return $this-> cnpj_pessoa;
    }
    function getCnpj_Consult(){
        return $this-> cnpj_pessoa;
    }
}
