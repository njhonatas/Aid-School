<?php

class UsuarioDTO {

    private $idusuario;
    private $login;
    private $senha;
    private $idperfil;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getIdperfil() {
        return $this->idperfil;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setIdperfil($idperfil) {
        $this->idperfil = $idperfil;
    }

}
