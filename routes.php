<?php

//Definir URL do projeto
//http://localhost/projetos-gabrielle/mvc/a_projeto_mvc_clinica/index.php?page=agenda

//Definir páginas válidas no projetos
$paginasValidas = [
    "agendas" => __DIR__ . "/views/agenda.php",
    "clientes" => __DIR__ . "/views/cliente.php",
    "medicos" => __DIR__ . "/views/medico.php",
];

//Capturar a página informada na url
$page = $_GET["page"] ?? "agenda"; // agenda, clientes ou médicos.

//Verificar se a página existe
if(array_key_exists($page, $paginasValidas)){
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}