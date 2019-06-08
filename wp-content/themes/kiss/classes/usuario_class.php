<?php




class Usuario
{
    protected $pdo;

    public function __construct()
    {
        header('Content-Type: text/html; charset=utf-8');
        $this->pdo = new PDO("mysql:dbname=kiss;host=localhost", "root", "");

    }
    public function getUsuario()
    {

        $sql = "SELECT * FROM usuario WHERE ativo = 1 AND usuarios.id = " . $_SESSION['kiss-rai'];
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {

            return $sql->fetchAll();
        } else {
            echo 'else: ';
            return array();
        }
    }


}