<?php

require_once 'CONEXAO/CONEXAO.php';

class PerfilDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function Pesquisar() {
        try {
            $sql = "select * from perfil;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->execute();
            $pesquisa = $execucao->fetchALL(PDO::FETCH_ASSOC);
            return $pesquisa;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function PesquisarUmRegistro(PerfilDTO $PerfilDTO) {
        try {
            $sql = "select * from perfil where idperfil = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PerfilDTO->getIdperfil());
            $execucao->execute();
            $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Gravar(PerfilDTO $PerfilDTO) {
        try {
            $sql = "insert into perfil (descricao) values(?);";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PerfilDTO->getDescricao());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Apagar(PerfilDTO $PerfilDTO) {
        try {
            $sql = "delete from perfil where idperfil = ?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PerfilDTO->getIdperfil());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function Alterar(PerfilDTO $PerfilDTO) {
        try {
            $sql = "updade from perfil set descricao=? where idperfil=?;";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $PerfilDTO->getDescricao());
            $execucao->bindValue(2, $PerfilDTO->getIdperfil());
            $resultado = $execucao->execute();
            return $resultado;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}
