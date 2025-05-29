<?php
include('../Models/Database.php');

class GetPoints
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function ConsulPoint()
    {
        try {
            // Variable de datos
            $Dates = [];
            // Sentencia sql
            $sql = 'SELECT ST_AsText(MapTheft)
            FROM `dataformsuser`;';
            // Query hacia la base de datos
            $stmt = $this->db->query($sql);
            // Recorrer la tabla de la base de datos
            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                // Seleccionar campo
                $pointText = $row['ST_AsText(MapTheft)'];
                // Eliminar el texto POINT()
                $coordsStr  = str_replace(['POINT(', ')'], '', $pointText);
                // list($lng, $lat) = explode(' ', $coordsStr);
                // Seperar por un espacio
                $example = explode(' ', $coordsStr);
                // Latitud y longitud en un array
                $lat = $example[0];
                $lgn = $example[1];
                // Asociar en el array los datos 
                $Dates[] = ['lat' => (float)$lat, 'lng' => (float)$lgn];
            }

            return $Dates;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}


$pruebas = new GetPoints($db);

$puntos =  $pruebas->ConsulPoint();
