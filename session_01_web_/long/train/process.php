<?php
//ham chuyen json => array
function readFileJSON($url) {
    $dataJson = file_get_contents($url);
    return json_decode($dataJson, true); // decode chuyen choi thanh mang
}

//ham chuyen array => json
function saveDatatoFile($url, $data) {
    $dataJson = json_encode($data);
    file_put_contents($url, $dataJson);// Day du lieu vao file

}