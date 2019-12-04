<?php


    // hàm sua username, password trong php
    function editUser() {

    }

    //ham chuyen json => array
    function readFileJSON($url) {
        $dataJson = file_get_contents($url);
        return json_decode($dataJson, true);
    }

    //ham chuyern array ==> json
    function saveDatatoFile($url, $data) {
        $dataJson = json_encode($data);
        file_put_contents($url, $dataJson);
    }

    //function onloadData
    function onLoadData() {

    }
?>