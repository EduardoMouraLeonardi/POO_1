<?php
class Carro{
    public $marca_Carro;//1
    public $modelo_Carro;//2
    public $cor_Carro;//3
    public $ano_Carro;//4
    public $tipo_Carro;//5
    public $km_Carro;//6
    public $combus_Carro;//7
    public $tunado_Carro;//8
    public $placa_Carro;//9

    function setMarca_Carro($novoMarca_Carro){
     $this->marca_Carro = $novoMarca_Carro;   
    }
    function setModelo_Carro($novoModelo_Carro){
        $this->modelo_Carro = $novoModelo_Carro;   
    }
    function setCor_Carro($novoCor_Carro){
        $this->cor_Carro = $novoCor_Carro;   
    }
    function setAno_Carro($novoAno_Carro){
        $this->ano_Carro = $novoAno_Carro;   
    }
    function setTipo_Carro($novoTipo_Carro){
        $this->tipo_Carro = $novoTipo_Carro;   
    }
    function setKm_Carro($novoKm_Carro){
        $this->km_Carro = $novoKm_Carro;   
    }
    function setCombus_Carro($novoCombus_Carro){
        $this->combus_Carro = $novoCombus_Carro;   
    }
    function setTunado_Carro($novoTunado_Carro){
        $this->tunado_Carro = $novoTunado_Carro;   
    }
    function setPlaca_Carro($novoPlaca_Carro){
        $this->placa_Carro = $novoPlaca_Carro;   
    }
    
    function getMarca_Carro(){
        return $this->marca_Carro;   
    }
    function getModelo_Carro(){
        return $this->modelo_Carro;   
    }
    function getCor_Carro(){
        return $this->cor_Carro;  
    }
    function getAno_Carro(){
        return $this->ano_Carro; 
    }
    function getTipo_Carro(){
        return $this->tipo_Carro;  
    }
    function getKm_Carro(){
        return $this->km_Carro;   
    }
    function getCombus_Carro(){
        return $this->combus_Carro;   
    }
    function getTunado_Carro(){
        return $this->tunado_Carro;   
    }
    function getPlaca_Carro(){
        return $this->placa_Carro;   
    }
}