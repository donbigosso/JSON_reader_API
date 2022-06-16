<?php
$posted_data = file_get_contents("php://input");
$decoded_data = json_decode($posted_data, TRUE);
print_r($decoded_data["data"]);
?>