<?php
class Connexion
{
    private $login;
    private $pass;

    public function __construct($bd, $login = 'root', $pass = '')
    {
        $this->login = $login;
        $this->pass = $pass;
        $this->bd = $bd;
        $this->connexion();
    }

    private function connexion()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=' . $this->bd . ';charset=utf8', $this->login, $this->pass);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
