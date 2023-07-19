<?php

require_once 'CONEXAO/CONEXAO.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($login,$senha) {
        try {
            $sql = "SELECT u.login,u.idusuario,p.descricao FROM usuario u
                    INNER JOIN perfil p ON (u.idperfil = p.idperfil)
                    WHERE login=? AND senha=?";
            $execucao = $this->pdo->prepare($sql);
            $execucao->bindValue(1, $login);
            $execucao->bindValue(2, $senha);
            $execucao->execute();
            $login = $execucao->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
