<?php
class Pessoa{
    protected $nome_pessoa;//1
    protected $endereco_pessoa;//2
    protected $telefone_pessoa;//3
    protected $email_pessoa;//4
    protected $renda_pessoa;//5

    function setNome_Pesssoa($novoNome_Pessoa){
        $this->nome_pessoa=$novoNome_Pessoa;
    }
    function setEndereco_Pessoa($novoEndereco_Pessoa){
        $this->enderco_pessoa=$novoEndereco_Pessoa;
    }
    function setTelefone_Pessoa($novoTelefone_Pessoa){
        $this->telefone_pessoa=$novoTelefone_Pessoa;
    }
    function setEmail_Pessoa($novoEmail_Pessoa){
        $this->email_pessoa=$novoEmail_Pessoa;
    }
    function setRenda_Pessoa($novoRenda_Pessoa){
        $this->renda_pessoa=$novoRenda_Pessoa;
    }

    function getNome_Pessoa(){
        return $this-> nome_pessoa;
    }
    function getEndereco_Pessoa(){
        return $this-> endereco_pessoa;
    }
    function getTelefone_Pessoa(){
        return $this-> telefone_pessoa;
    }
    function getEmail_Pessoa(){
        return $this-> email_pessoa;
    }
    function getRenda_Pessoa(){
        return $this-> renda_pessoa;
    }
}