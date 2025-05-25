<?php
require_once('../Models/Database.php');

class User
{
    private $db;
    private $Username;
    private $UserDescription;
    private $UserData;
    private $UserSpot;

    public function __construct($db, $Username, $UserDescription, $UserData, $UserSpot)
    {
        $this->db =  $db->Conection();
        $this->Username = $Username;
        $this->UserDescription = $UserDescription;
        $this->UserData = $UserSpot;
    }

    // Metodos get y set

    // Get
    public function getUsername()
    {
        return $this->Username;
    }

    public function getUserDescription()
    {
        return $this->UserDescription;
    }

    public function getUserData()
    {
        return $this->UserData;
    }

    public function getUserSpot(){
        return $this->getUserSpot();
    }


    // Crear Encuentas
    public function CreateForms()
    {
        try {
            $sql = 'INSER INTO  dataformsuser(UserName,UserDescription,UserDate,UserSpot)VALUE( :UserName, :UserDescription ,:UserDate,:UserSpot ) ';
            $stmtUser = $this->db->prepare($sql);
            $stmtUser -> bindValue(':UserName', $this->getUsername());
            $stmtUser -> bindValue(':UserDescription', $this->getUserDescription());
            $stmtUser -> bindValue(':UserDate', $this->getUserData());
            $stmtUser -> bindValue(':UserSpot', $this->getUserSpot());
            $stmtUser->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
