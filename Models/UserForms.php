<?php
require_once('../Models/Database.php');

class User
{
    private $db;
    //  1
    private $Program;
    // 2
    private $Semester;
    // 3
    private $Day;
    // 4
    private $Age;
    // 5
    private $Locality;
    // 6
    private $Neighborhood;
    // 7
    private $Transport;
    // 8
    private $Perception;
    // 9
    // AQUI VA LA DE LAS 3 PREGUNTAS DEL la pregunta "
    //     Sobre la percepción de seguridad en zonas aledañas a la universidad, de las siguientes asigne un valor entre 0 y 5, siendo 5 muy segura  y 0 
    // POCO segura
    private $AvRojas26;
    private $AvRojas63;
    private $AvRojas53yBoyaca;
    // 10
    private $Intimidation;
    // 11
    private $MapTheft = [];
    // 12
    private $DayFacts;
    // 13
    private $TimeFacts;
    // 14
    private $VictimOfTheft;
    // 15
    // ¿En el hecho intervinieron cuantos delincuentes?
    private $NumberOfOffenders;
    // 16
    private $WeaponType;
    // 17
    private $DisplacementOfPerpetrators;
    // 18
    private $HowWaShe;
    // 19
    private $typeOfLesson;
    // 20
    private $AfterTheEvents;
    // 21
    private $Recommendation;
    // 22





    public function __construct($db)
    {
        $this->db =  $db->Conection();
    }

    // Metodos get y set

    // Get



    // Crear Encuentas
    public function CreateForms()
    {
        try {
            $sql = 'INSER INTO  dataformsuser(UserName,UserDescription,UserDate,UserSpot)VALUE( :UserName, :UserDescription ,:UserDate,:UserSpot ) ';
            $stmtUser = $this->db->prepare($sql);

            $stmtUser->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
