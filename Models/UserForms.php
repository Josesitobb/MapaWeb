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
    private $MapTheft;
    // 12
    private $DayFacts;
    // 13
    private $TimeFacts;
    // 14
    private $StolenObject;
    // 15
    // ¿En el hecho intervinieron cuantos delincuentes?
    private $NumberOfOffenders;
    // 16
    private $WeaponType;
    // 17
    private $DisplacementOfPerpetrators;
    // 18
    private $StateAtTheMoment;
    // 19
    private $TypeOfLesson;
    // 20
    private $AfterTheEvents;
    // 21
    private $Recommendation;
    // 22






    public function __construct(
        $db,
        $Program,
        $Semester,
        $Day,
        $Age,
        $Locality,
        $Neighborhood,
        $Transport,
        $Perception,
        $AvRojas26,
        $AvRojas63,
        $AvRojas53yBoyaca,
        $Intimidation,
        $MapTheft,
        $DayFacts,
        $TimeFacts,
        $StolenObject,
        $NumberOfOffenders,
        $WeaponType,
        $DisplacementOfPerpetrators,
        $StateAtTheMoment,
        $TypeOfLesson,
        $AfterTheEvents,
        $Recommendation
    ) {

        $this->db =  Database::getConnection();;
        $this->Program = $Program;
        $this->Semester = $Semester;
        $this->Day = $Day;
        $this->Age = $Age;
        $this->Locality = $Locality;
        $this->Neighborhood = $Neighborhood;
        $this->Transport = $Transport;
        $this->Perception = $Perception;
        $this->AvRojas26 = $AvRojas26;
        $this->AvRojas63 = $AvRojas63;
        $this->AvRojas53yBoyaca = $AvRojas53yBoyaca;
        $this->Intimidation = $Intimidation;
        $this->MapTheft = $MapTheft;
        $this->DayFacts = $DayFacts;
        $this->TimeFacts = $TimeFacts;
        $this->StolenObject = $StolenObject;
        $this->NumberOfOffenders = $NumberOfOffenders;
        $this->WeaponType = $WeaponType;
        $this->DisplacementOfPerpetrators = $DisplacementOfPerpetrators;
        $this->StateAtTheMoment = $StateAtTheMoment;
        $this->TypeOfLesson = $TypeOfLesson;
        $this->AfterTheEvents = $AfterTheEvents;
        $this->Recommendation = $Recommendation;
    }

    // Metodos get y set

    // Get

    public function getProgram()
    {
        return $this->Program;
    }

    public function getSemester()
    {
        return $this->Semester;
    }

    public function getDay()
    {
        return $this->Day;
    }

    public function getAge()
    {
        return $this->Age;
    }

    public function getLocality()
    {
        return $this->Locality;
    }

    public function getNeighborhood()
    {
        return $this->Neighborhood;
    }

    public function getTransport()
    {
        return $this->Transport;
    }

    public function getPerception()
    {
        return $this->Perception;
    }

    public function getAvRojas26()
    {
        return $this->AvRojas26;
    }

    public function getAvRojas63()
    {
        return $this->AvRojas63;
    }

    public function getAvRojas53yBoyaca()
    {
        return $this->AvRojas53yBoyaca;
    }

    public function getIntimidation()
    {
        return $this->Intimidation;
    }

    public function getMapTheft()
    {
        return $this->MapTheft;
    }

    public function getDayFacts()
    {
        return $this->DayFacts;
    }

    public function getTimeFacts()
    {
        return $this->TimeFacts;
    }

    public function getStolenObject()
    {
        return $this->StolenObject;
    }

    public function getNumberOfOffenders()
    {
        return $this->NumberOfOffenders;
    }

    public function getWeaponType()
    {
        return $this->WeaponType;
    }

    public function getDisplacementOfPerpetrators()
    {
        return $this->DisplacementOfPerpetrators;
    }

    public function getStateAtTheMoment()
    {
        return $this->StateAtTheMoment;
    }

    public function getTypeOfLesson()
    {
        return $this->TypeOfLesson;
    }

    public function getAfterTheEvents()
    {
        return $this->AfterTheEvents;
    }

    public function getRecommendation()
    {
        return $this->Recommendation;
    }



    // Crear Encuentas
    public function CreateForms()
    {
        try {
            $sql = "INSERT INTO dataformsuser (
            Program,
            Semester,
            Day,
            Age,
            Locality,
            Neighborhood,
            Transport,
            Perception,
            AvRojas26,
            AvRojas63,
            AvRojas53yBoyaca,
            Intimidation,
            MapTheft,
            DayFacts,
            TimeFacts,
            StolenObject,
            NumberOfOffenders,
            WeaponType,
            DisplacementOfPerpetrators,
            StateAtTheMoment,
            TypeOfLesson,
            AfterTheEvents,
            Recommendation
        ) VALUES (
            :Program,
            :Semester,
            :Day,
            :Age,
            :Locality,
            :Neighborhood,
            :Transport,
            :Perception,
            :AvRojas26,
            :AvRojas63,
            :AvRojas53yBoyaca,
            :Intimidation,
            ST_GeomFromText(:MapTheft),
            :DayFacts,
            :TimeFacts,
            :StolenObject,
            :NumberOfOffenders,
            :WeaponType,
            :DisplacementOfPerpetrators,
            :StateAtTheMoment,
            :TypeOfLesson,
            :AfterTheEvents,
            :UserRecommendation

        )";

            $stmt = $this->db->prepare($sql);

            $stmt->bindValue('Program', $this->getProgram());
            $stmt->bindValue('Semester', $this->getSemester());
            $stmt->bindValue('Day', $this->getDay());
            $stmt->bindValue('Age', $this->getAge());
            $stmt->bindValue('Locality', $this->getLocality());
            $stmt->bindValue('Neighborhood', $this->getNeighborhood());
            $stmt->bindValue('Transport', $this->getTransport());
            $stmt->bindValue('Perception', $this->getPerception());

            $stmt->bindValue('AvRojas26', $this->getAvRojas26());
            $stmt->bindValue('AvRojas63', $this->getAvRojas63());
            $stmt->bindValue('AvRojas53yBoyaca', $this->getAvRojas53yBoyaca());

            $stmt->bindValue('Intimidation', $this->getIntimidation());
            $stmt->bindValue(':MapTheft', $this->getMapTheft(), PDO::PARAM_STR);

            $stmt->bindValue('DayFacts', $this->getDayFacts());
            $stmt->bindValue('TimeFacts', $this->getTimeFacts());
            $stmt->bindValue('StolenObject', $this->getStolenObject());
            $stmt->bindValue('NumberOfOffenders', $this->getNumberOfOffenders());
            $stmt->bindValue('WeaponType', $this->getWeaponType());
            $stmt->bindValue('DisplacementOfPerpetrators', $this->getDisplacementOfPerpetrators());
            $stmt->bindValue('StateAtTheMoment', $this->getStateAtTheMoment());
            $stmt->bindValue('TypeOfLesson', $this->getTypeOfLesson());
            $stmt->bindValue('AfterTheEvents', $this->getAfterTheEvents());
            $stmt->bindValue('UserRecommendation', $this->getRecommendation());

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    
   
}


