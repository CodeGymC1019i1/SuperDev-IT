<?php
    function readFileJson($path) {
        $dataJson = file_get_contents($path);
        return json_decode($dataJson, true);
    }

    function saveDataToFile($path, $data) {
        $dataJson = json_encode($data);
        file_put_contents($path, $dataJson);
    }

    
?>
