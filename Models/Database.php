<?php



// class Database
// {
//     private $hostname;
//     private $port;
//     private $database;
//     private $username;
//     private $password;

//     public function __construct($hostname, $port, $database, $username, $password)
//     {
//         $this->hostname = $hostname;
//         $this->port = $port;
//         $this->database = $database;
//         $this->username = $username;
//         $this->password = $password;
//     }


//     public function Conection()
//     {
//         try {
//             $dsn = "mysql:host=$this->hostname;port=$this->port;dbname=$this->database;charset=utf8";
//             $opcionCertifique = [
//                 PDO::MYSQL_ATTR_SSL_CA => './DigiCertGlobalRootCA.crt.pem',
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//             ];
//             $pdo = new PDO($dsn, $this->username, $this->password, $opcionCertifique);
//             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,);
//             echo "Conexion exitosa";
//             return $pdo;
//         } catch (PDOException $e) {
//             echo "Erro la conectaser a la base de datos" . $e->getMessage();
//         }
//     }
// }


// $db  = new Database("veico.mysql.database.azure.com", 3306, "formsmaps", "veicol12", "Joseguerra302004");
// $db->Conection(); 



class Database
{
    private static $hostname = "veico.mysql.database.azure.com";
    private static $port = 3306;
    private static $database = "formsmaps";
    private static $username = "veicol12";
    private static $password = "Joseguerra302004";

    // private static $hostname = "localhost";
    // private static $port = 3306;
    // private static $database = "formsmaps";
    // private static $username = "root";
    // private static $password = "";


    private static $pdo = null;

    public static function getConnection()
    {
        if (self::$pdo === null) {
            try {
                $dsn = "mysql:host=" . self::$hostname . ";port=" . self::$port . ";dbname=" . self::$database . ";charset=utf8";
                $options = [
                    PDO::MYSQL_ATTR_SSL_CA => '../Certs/DigiCertGlobalRootCA.crt.pem',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ];

                self::$pdo = new PDO($dsn, self::$username, self::$password,$options);
            } catch (PDOException $e) {

                throw new Exception("Error en la conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}

// Uso:
try {
    $db = Database::getConnection();

    // echo "Conexión exitosa";
} catch (Exception $ex) {
    echo $ex->getMessage();
}
