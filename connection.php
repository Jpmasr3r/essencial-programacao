<?php

$host = "";
$user = "";
$password = "";
$database = "";
$port = 3306;
$options = [
    PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE =>
    PDO::FETCH_ASSOC,
];

$output;


try {
    $conn = new PDO(
        "mysql:host=$host;port=$port;dbname=$database",
        $user,
        $password,
        $options
    );
    $output = [
        "status" => "Conexao Bem Sucedida",
    ];
    // echo json_encode($output);
} catch (PDOException $e) {
    $output = [
        "status"=> "Conexao Falha :" . $e->getMessage(),
    ];
    // echo json_encode($output);
}
