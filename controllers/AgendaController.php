<?php

//A resposta será enviada no formato JSON
header("Content-Type: application/json; charset=utf-8");

//Verifica se a requisição é do tipo POST
if($_SERVER["REQUEST_METHOD"] !== "POST"){
 http_response_code(405); //405 - método não permitido

 echo json_encode([
    "sucesso" => false, 
    "mensagem" => "Método não permitido, esperava GET"
 ]);

 exit;
}

//Recebe os dados enviados pelo formulário
$crmMed = trim($_POST['crmMed']);
$cpf = trim($_POST['cpf']);
$data = trim($_POST['data']);
$horario = trim($_POST['horario']);

//Valida os campos obrigatórios
if($crmMed === "" || $cpf === "" ||$data === "" ||$horario === ""){
    http_response_code(400);

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);

    exit;
}


// -------> TODO: Aqui seria o banco de dados.

//Retornar após sucesso
http_response_code(200);

echo json_encode([
    "sucesso" => true,
    "mensagem" => "Consulta cadastrada com sucesso!",
    "medico" => [
        "crmMed" => $crmMed,
        "cpf" => $cpf,
        "data" => $data,
        "horario" => $horario,
    ]
])


?>