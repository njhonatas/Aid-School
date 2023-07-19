<?php

class PerfilDTO {

    private $idperfil;
    private $descricao;

    function getIdperfil() {
        return $this->idperfil;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setIdperfil($idperfil) {
        $this->idperfil = $idperfil;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}
