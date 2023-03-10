<?php
class Clipe extends Produto{
    private $musica;
    private $duracao;
    public $show_Music;

    function setMusica($novoMusica){
        $this->musica=$novoMusica;
    }
    function setDuracao($novoDuracao){
        $this->duracao=$novoDuracao;
    }
    function setShowMusic($novoShowMusic){
        $this->show_Music=$novoShowMusic;
    }

    function getMusica(){
        return $this->musica;
    }
    function getDuracao(){
        return $this->Duracao;
    }
    function getShowMusic(){
        return $this->show_Music;
    }
}