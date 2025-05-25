<?php

class Database
{
    private $hostmane;
    private $port;
    private $database;
    private $username;
    private $password;

    public function __construct($hostmane, $port, $database, $username, $password)
    {
        $this->hostmane = $hostmane;
        $this->port = $port;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;
    }


    public function Conection()
    {
        try {
            $dsn = "mysql:host=$this->hostmane;port=$this->port;dbname=$this->database;charset=utf8";
            // $opcionCertifique = [
            //     PDO::MYSQL_ATTR_SSL_CA => '../DigiCertGlobalRootCA.crt.pem',
            //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            // ];
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,);
            echo "Conexion exitosa";
            return $pdo;
        } catch (PDOException $e) {
            echo "Erro la conectaser a la base de datos" . $e->getMessage();
        }
    }
}


// $db  = new Database("veico.mysql.database.azure.com", 3306, "sgcitas", "veicol12", "Joseguerra302004");
// $db->Conection();

$db  = new Database("localhost", 3306, "formsmaps", "root", "");
$db->Conection();
