<?php
include "dbBroker.php";
include "Treatment.php";
// TO EXTRACT ALL SEND VARIABLES
extract($_POST);
if(isset($_POST['deleteSend'])){
   
    $result=Treatment::deleteTreatment($conn, $_POST['deleteSend']);
    if($result){
        echo "Success";
    }
    else echo "Failed";
}

?>