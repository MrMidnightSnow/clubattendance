<?php
    require_once "../inc/connect.php";

    class Activities {
        public $conn;
        public $outputArray;
        function __construct($dbConnection){
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $dateNow = date('Y-m-d');
            $timeNow = date('H:i:s');
            $this->conn = $dbConnection;

            $trackingSql = "SELECT a.app_name, c.club_name, a.app_startDate, a.app_endDate, a.app_time FROM applications AS a JOIN students AS s ON s.student_id = a.student_id JOIN clubs AS c ON c.club_id = s.club_id WHERE approved = 1";
            $res = mysqli_query($this->conn, $trackingSql);
            if(!is_bool($res)){
                $rowArray = array();
                $resArr = mysqli_fetch_all($res);
                $resArr = array_values($resArr);
                foreach($resArr as $currRowColumn){
                    $columnArray = array();
                    array_push($columnArray, $currRowColumn[0]);
                    array_push($columnArray, $currRowColumn[1]);
                    array_push($columnArray, $currRowColumn[2]);
                    array_push($columnArray, $currRowColumn[3]);
                    array_push($columnArray, $currRowColumn[4]);
                    if($currRowColumn[3] > $dateNow){
                        array_push($columnArray, '<button class="d-grid mx-auto btn btn-danger" style="display: block;" id="viewAppButton">Attendance Closed</button>');
                    } else {
                        array_push($columnArray, '<button class="d-grid mx-auto btn btn-primary" style="display: block;" id="viewAppButton">Fill Attendance</button>');
                    }
                    array_push($rowArray, $columnArray);
                }
                $this->outputArray = array(
                    "data" => $rowArray
                );
                return true;
            } else {
                return false;
            }
        }

        function getActivitiesJson(){
            return json_encode($this->outputArray, JSON_PRETTY_PRINT);
        }
    }
    
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        header("Content-Type: application/json");
        $atvt = new Activities($conn);
        echo $atvt->getActivitiesJson();
    }
?>