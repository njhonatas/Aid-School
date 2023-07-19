<?php

class DoacaoDTO {

    private $iddoacao;
    private $nomedoacao;
    private $descricaodoacao;
    private $quantidadedoacao;
    private $datadoacao;
    private $idrepresentante;
    private $idpedido;
    private $cpfdoador;

    function getIddoacao() {
        return $this->iddoacao;
    }

    function getNomedoacao() {
        return $this->nomedoacao;
    }

    function getDescricaodoacao() {
        return $this->descricaodoacao;
    }

    function getQuantidadedoacao() {
        return $this->quantidadedoacao;
    }

    function getDatadoacao() {
        return $this->datadoacao;
    }

    function getIdrepresentante() {
        return $this->idrepresentante;
    }

    function getIdpedido() {
        return $this->idpedido;
    }

    function getCpfdoador() {
        return $this->cpfdoador;
    }

    function setIddoacao($iddoacao) {
        $this->iddoacao = $iddoacao;
    }

    function setNomedoacao($nomedoacao) {
        $this->nomedoacao = $nomedoacao;
    }

    function setDescricaodoacao($descricaodoacao) {
        $this->descricaodoacao = $descricaodoacao;
    }

    function setQuantidadedoacao($quantidadedoacao) {
        $this->quantidadedoacao = $quantidadedoacao;
    }

    function setDatadoacao($datadoacao) {
        $this->datadoacao = $datadoacao;
    }

    function setIdrepresentante($idrepresentante) {
        $this->idrepresentante = $idrepresentante;
    }

    function setIdpedido($idpedido) {
        $this->idpedido = $idpedido;
    }

    function setCpfdoador($cpfdoador) {
        $this->cpfdoador = $cpfdoador;
    }

}
