<?php
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    private $situacao;
    public $situ_Consult;

    function setMatricula($novoMatricula){
        $this-> matricula=$novoMatricula;
    }
    function setCurso($novoCurso){
        $this-> matricula=$novoCurso;
    }
    function setSituação($novoSituacao){
        $this-> matricula=$novoSituacao;
    }
    function setSituConsult($novoSituConsult){
        $this-> situ_Consult=$novoSituConsult;
    }

    function getMatricula(){
        return $this-> matricula;
    }
    function getCurso(){
        return $this-> curso;
    }
    function getSituacao(){
        return $this-> situacao;
    }
    function getSituConsult(){
        return $this-> situ_Consult;
    }
}