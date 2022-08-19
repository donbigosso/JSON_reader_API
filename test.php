<?php
include "ApiClass.php";
$myApi = new ApiClass;
//echo $myApi->get_file_content("dupa");
$content = $myApi->get_file_content("motorbikeList.json");
$decoded = $myApi-> decode_data($content);
$bike = $decoded[0];
//var_dump($bike);
$codedBike = $myApi->encode_data('{"name":"john"}');
var_dump($codedBike);
?>