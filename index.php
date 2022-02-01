<?php
    $fileData=json_decode(file_get_contents("dati.json"));
    foreach($fileData as $indice => $valore){
        $d = $valore -> dato;
        echo "[$indice] $d<br>";
    }
    $newValore = new stdClass();
    $newValore -> dato = ($d+1);
    $fileData[] = $newValore;
    file_put_contents("dati.json", json_encode($fileData));
?>