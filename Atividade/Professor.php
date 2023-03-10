<?php
class Professor extends Pessoa{
    private $pis;
    private $dataAdm;
    private $salario;
    public $Venc_consult;

    function setPis($novoPis){
        $this->pis=$novoPis;
    }
}