<?php

class DoadorDTO {

    private $cpfdoador;
    private $rgdoador;
    private $nomedoador;
    private $telefonedoador;
    private $emaildoador;
    private $enderecodoador;
    private $dtnascdoador;
    private $idusuario;

    function getCpfdoador() {
        return $this->cpfdoador;
    }

    function getRgdoador() {
        return $this->rgdoador;
    }

    function getNomedoador() {
        return $this->nomedoador;
    }

    function getTelefonedoador() {
        return $this->telefonedoador;
    }

    function getEmaildoador() {
        return $this->emaildoador;
    }

    function getEnderecodoador() {
        return $this->enderecodoador;
    }

    function getDtnascdoador() {
        return $this->dtnascdoador;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setCpfdoador($cpfdoador) {
        $this->cpfdoador = $cpfdoador;
    }

    function setRgdoador($rgdoador) {
        $this->rgdoador = $rgdoador;
    }

    function setNomedoador($nomedoador) {
        $this->nomedoador = $nomedoador;
    }

    function setTelefonedoador($telefonedoador) {
        $this->telefonedoador = $telefonedoador;
    }

    function setEmaildoador($emaildoador) {
        $this->emaildoador = $emaildoador;
    }

    function setEnderecodoador($enderecodoador) {
        $this->enderecodoador = $enderecodoador;
    }

    function setDtnascdoador($dtnascdoador) {
        $this->dtnascdoador = $dtnascdoador;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

}
