<?php
class Pessoa{
    protected $nome_Pessoa;
    protected $sobre_Pessoa;
    protected $cpf_Pessoa;
    protected $tel_Pessoa;
    public $data_Consult;

    function setNomePessoa($novoNomePessoa){
        $this->nome_pessoa=$novoNomePessoa;
    }
    function setSobrePessoa($novoSobrePessoa){
        $this->sobre_pessoa=$novoSobrePessoa;
    }
    function setCpfPessoa($novoCpfPessoa){
        $this->Cpf_pessoa=$novoCpfPessoa;
    }
    function setTelPessoa($novoTelPessoa){
        $this->tel_pessoa=$novoTelPessoa;
    }
    function setDataConsult($novoDataConsult){
        $this->data_Consult=$novoDataConsult;
    }

    function getNomePessoa(){
        return $this-> nome_Pessoa;
    }
    function getSobrePessoa(){
        return $this-> sobre_Pessoa;
    }
    function getCpfPessoa(){
        return $this-> cpf_Pessoa;
    }
    function getTelPessoa(){
        return $this-> tel_Pessoa;
    }
    function getDataConsult(){
        return $this-> data_Consult;
    }
}