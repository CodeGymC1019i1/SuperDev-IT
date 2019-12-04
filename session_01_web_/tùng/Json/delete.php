<?php
    function deleteUser($arr, $index, $url) {
        array_splice($arr, $index-1, 1);
        saveDatatoFile($url, $arr);
    }

?>