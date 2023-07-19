<?php

class RepresentanteDTO {

    private $idrepresentante;
    private $nomerep;
    private $cpfrep;
    private $rgrep;
    private $dtnascrep;
    private $enderecorep;
    private $emailrep;
    private $telefonerep;
    private $sexo;
    private $idinstituto;
    private $idusuario;

    function getIdrepresentante() {
        return $this->idrepresentante;
    }

    function getNomerep() {
        return $this->nomerep;
    }

    function getCpfrep() {
        return $this->cpfrep;
    }

    function getRgrep() {
        return $this->rgrep;
    }

    function getDtnascrep() {
        return $this->dtnascrep;
    }

    function getEnderecorep() {
        return $this->enderecorep;
    }

    function getEmailrep() {
        return $this->emailrep;
    }

    function getTelefonerep() {
        return $this->telefonerep;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getIdinstituto() {
        return $this->idinstituto;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setIdrepresentante($idrepresentante) {
        $this->idrepresentante = $idrepresentante;
    }

    function setNomerep($nomerep) {
        $this->nomerep = $nomerep;
    }

    function setCpfrep($cpfrep) {
        $this->cpfrep = $cpfrep;
    }

    function setRgrep($rgrep) {
        $this->rgrep = $rgrep;
    }

    function setDtnascrep($dtnascrep) {
        $this->dtnascrep = $dtnascrep;
    }

    function setEnderecorep($enderecorep) {
        $this->enderecorep = $enderecorep;
    }

    function setEmailrep($emailrep) {
        $this->emailrep = $emailrep;
    }

    function setTelefonerep($telefonerep) {
        $this->telefonerep = $telefonerep;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setIdinstituto($idinstituto) {
        $this->idinstituto = $idinstituto;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

}
