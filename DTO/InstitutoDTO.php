<?php

class InstitutoDTO {

    private $idinstituto;
    private $nomeinstituto;
    private $emailinstituto;
    private $telefoneinstituto;
    private $enderecoinstituto;

    function getIdinstituto() {
        return $this->idinstituto;
    }

    function getNomeinstituto() {
        return $this->nomeinstituto;
    }

    function getEmailinstituto() {
        return $this->emailinstituto;
    }

    function getTelefoneinstituto() {
        return $this->telefoneinstituto;
    }

    function getEnderecoinstituto() {
        return $this->enderecoinstituto;
    }

    function setIdinstituto($idinstituto) {
        $this->idinstituto = $idinstituto;
    }

    function setNomeinstituto($nomeinstituto) {
        $this->nomeinstituto = $nomeinstituto;
    }

    function setEmailinstituto($emailinstituto) {
        $this->emailinstituto = $emailinstituto;
    }

    function setTelefoneinstituto($telefoneinstituto) {
        $this->telefoneinstituto = $telefoneinstituto;
    }

    function setEnderecoinstituto($enderecoinstituto) {
        $this->enderecoinstituto = $enderecoinstituto;
    }

}
