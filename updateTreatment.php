<?php
include "dbBroker.php";
include "Treatment.php";
// TO EXTRACT ALL SEND VARIABLES
extract($_POST);

if(isset($_POST['idSend']) && isset($_POST['nameSend']) && isset($_POST['datSend']) && isset($_POST['telSend']) && isset($_POST['timeSend']) &&isset($_POST['typeIDSend'])){
  
    $result=Treatment::updateTreatment($conn, $_POST['idSend'], $_POST['nameSend'], $_POST['telSend'], $_POST['datSend'], $_POST['timeSend'], $_POST['typeIDSend']);
    if($result){
        echo "Success";
    }
    else {
    echo "Failed";
}

}



?>