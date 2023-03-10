<?php
class Pessoa_Fisica extends Pessoa{
    private $cpf_pessoa;
    private $rg_pessoa;
    private $nasc_pessoa;
    public $cpf_consult;

    function setCpf_Pessoa($novoCpf_Pessoa){
        $this-> cpf_pessoa=$novoCpf_Pessoa;
    }
    function setRg_Pessoa($novoRg_Pessoa){
        $this-> Rg_pessoa=$novoRg_Pessoa;
    }
    function setNasc_Pessoa($novoNasc_Pessoa){
        $this-> nasc_pessoa=$novoNasc_Pessoa;
    }
    function setCpf_Consult($novoCpf_Consult){
        $this-> cpf_consult=$novoCpf_Consult;
    }

    function getCpf_Pessoa(){
        $this->cpf_pessoa;
    }
    function getRg_Pessoa(){
        $this->rg_pessoa;
    }
    function getNasc_Pessoa(){
        $this->nasc_pessoa;
    }
    function getCpf_Consult(){
        $this->cpf_consult;
    }
}