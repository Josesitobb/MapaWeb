<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once('../Models/UserForms.php');
require_once('../Models/Database.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form = new UserForms();
    $form->CreateUser();
}


class UserForms
{
    public function CreateUser()
    {
        try {
            // Process Intimidation
            $Intimidation = isset($_POST['Intimidation']) ? implode(',', $_POST['Intimidation']) : 'No selecciono';
            if ($Intimidation == 'No') {

                // Variables 
                $MapTheft = "POINT(-74.072092 4.710988)";
                $DayFacts = "No hay respuesta";
                $TimeFacts = "00:00:00";
                $StolenObject = "No hay respuesta";
                $NumberOfOffenders = "0";
                $WeaponType = "No hay respuesta";
                $DisplacementOfPerpetrators = "No hay respuesta";
                $DisplacementOfPerpetrators = "No hay respuesta";
                $StateAtTheMoment = "No hay respuesta";
                $TypeOfLesson = "No hay respuesta";
                $AfterTheEvents = "No hay respuesta";
                $Recommendation = "No hay respuesta";
                $db =  Database::getConnection();
                $user = new User(
                    $db,
                    $_POST['Program'],
                    $_POST['Semestre'],
                    $_POST['Day'],
                    $_POST['Age'],
                    $_POST['Locality'],
                    $_POST['Neighborhood'],
                    $_POST['Transport'],
                    $_POST['Perception'],
                    $_POST['AvRojas26'],
                    $_POST['AvRojas63'],
                    $_POST['AvRojas53yBoyaca'],
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
                );

                $user->CreateForms();
                header("Location:../View/MuchasGracias.html");
            } else {
                // Process MapTheft
                $MapTheftStr = 'No selecciono';
                if (isset($_POST['MapTheft'])) {
                    $coordenadas = json_decode($_POST['MapTheft'], true);
                    if (json_last_error() === JSON_ERROR_NONE && is_array($coordenadas)) {
                        $MapTheft = [];
                        foreach ($coordenadas as $coord) {
                            if (isset($coord['latitudArray']) && isset($coord['longitudArray'])) {
                                $MapTheft[] = "{$coord['latitudArray']} {$coord['longitudArray']}";
                            }
                        }

                        if (!empty($MapTheft)) {
                            $MapTheftStr = implode('; ', $MapTheft);
                        }
                    }
                }
                $MapTheft1 = "POINT($MapTheftStr)";


                $StolenObject = isset($_POST['StolenObject']) ? implode(',', $_POST['StolenObject']) : 'No selecciono';
                // Process DayFacts
                $DayFacts = isset($_POST['DayFacts']) ? implode(',', $_POST['DayFacts']) : 'No selecciono';

                $db =  Database::getConnection();


                $user = new User(
                    $db,
                    $_POST['Program'],
                    $_POST['Semestre'],
                    $_POST['Day'],
                    $_POST['Age'],
                    $_POST['Locality'],
                    $_POST['Neighborhood'],
                    $_POST['Transport'],
                    $_POST['Perception'],
                    $_POST['AvRojas26'],
                    $_POST['AvRojas63'],
                    $_POST['AvRojas53yBoyaca'],
                    $Intimidation,
                    $MapTheft1,
                    $DayFacts,
                    $_POST['TimeFacts'],
                    $StolenObject,
                    $_POST['NumberOfOffenders'],
                    $_POST['WeaponType'],
                    $_POST['DisplacementOfPerpetrators'],
                    $_POST['StateAtTheMoment'],
                    $_POST['TypeOfLesson'],
                    $_POST['AfterTheEvents'],
                    $_POST['Recommendation']
                );

                $user->CreateForms();
                header("Location:../View/MuchasGracias.html");
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
