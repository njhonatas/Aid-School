<?php

require_once 'CONEXAO/CONEXAO.php';

class UsuarioDAO
{

    public $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function pegaUltimoID()
    {

        try {
            $sql = "select max(idusuario) as ultimoID from usuario;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisar()
    {

        try {
            $sql = "select * from usuario;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Pesquisar2()
    {

        try {
            $sql = "select * from usuario as u, perfil as p where u.idPerfil = p.idPerfil;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro($idusuario)
    {

        try {
            $sql = "select * from usuario where idusuario = ?";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idusuario);
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(UsuarioDTO $UsuarioDTO)
    {
        try {
            $sql = "insert into usuario (login,senha,idperfil) values(?,?,?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $UsuarioDTO->getLogin());
            $execucao->bindValue(2, $UsuarioDTO->getSenha());
            $execucao->bindValue(3, $UsuarioDTO->getIdperfil());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar($idusuario)
    {
        try {
            $sql = "delete from usuario where idusuario = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $idusuario);
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Alterar(usuarioDTO $usuarioDTO)
    {
        try {
            $sql = "UPDATE usuario as u SET senha=?, u.login=?, idperfil=idperfil WHERE idusuario=?;";
            $stmt = $this->pdo->prepare($sql);
            //print_r($sql);
            //die();
            $stmt->bindValue(1, $usuarioDTO->getSenha());
            $stmt->bindValue(2, $usuarioDTO->getLogin());
           // $stmt->bindValue(3,$usuarioDTO->getIdperfil());
            $stmt->bindValue(3, $usuarioDTO->getIdusuario());
            $result = $stmt->execute();
            return $result;

        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
}