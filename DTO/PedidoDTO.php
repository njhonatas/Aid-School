<?php

class PedidoDTO {

    private $idpedido;
    private $nomepedido;
    private $descricaopedido;
    private $condicao;
    private $status;
    private $datapedido;
    private $quantidadepedido;
    private $idinstituto;
    private $idrepresentante;

    function getIdpedido() {
        return $this->idpedido;
    }

    function getNomepedido() {
        return $this->nomepedido;
    }

    function getDescricaopedido() {
        return $this->descricaopedido;
    }

    function getCondicao() {
        return $this->condicao;
    }

    function getStatus() {
        return $this->status;
    }

    function getDatapedido() {
        return $this->datapedido;
    }

    function getQuantidadepedido() {
        return $this->quantidadepedido;
    }

    function getIdinstituto() {
        return $this->idinstituto;
    }

    function getIdrepresentante() {
        return $this->idrepresentante;
    }

    function setIdpedido($idpedido) {
        $this->idpedido = $idpedido;
    }

    function setNomepedido($nomepedido) {
        $this->nomepedido = $nomepedido;
    }

    function setDescricaopedido($descricaopedido) {
        $this->descricaopedido = $descricaopedido;
    }

    function setCondicao($condicao) {
        $this->condicao = $condicao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDatapedido($datapedido) {
        $this->datapedido = $datapedido;
    }

    function setQuantidadepedido($quantidadepedido) {
        $this->quantidadepedido = $quantidadepedido;
    }

    function setIdinstituto($idinstituto) {
        $this->idinstituto = $idinstituto;
    }

    function setIdrepresentante($idrepresentante) {
        $this->idrepresentante = $idrepresentante;
    }

}
