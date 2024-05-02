<?php
$clientData = array(
    "name" => "putu rama aagstya diananta putra",
    "email" => "rama.agastyadp04@gmail.com",
    "phone" => "081-337-742-956",
    "address" => "Renon"
);

$jsonData = json_encode($clientData);

$fileName = "client_input.json";
file_put_contents($fileName, $jsonData);

echo "Client input data array has been generated and saved to client_input.json.";
