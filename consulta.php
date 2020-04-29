<?php 

$server = $_SERVER['REQUEST_METHOD'];

if ($server == 'GET'){
$datos = [[
    "Cedula"=>132424242,
    "Nombre"=>"Francisco pacho",
    "Dirrecion"=>"calle 54 676",
    "Telefono"=>"5555corriente",
    "Edad"=>25
],
[
    "Cedula"=>12134677,
    "Nombre"=>"Jhan cachon",
    "Dirrecion"=>"calle 54 676",
    "Telefono"=>"5555corriente",
    "Edad"=>25
]
,
[
    "Cedula"=>56672272,
    "Nombre"=>"Jonathan machaca perrita",
    "Dirrecion"=>"Calle 343 89",
    "Telefono"=>"5555corriente",
    "Edad"=>25
]];
$json= json_encode($datos);

header('content-type: application/json; charset=utf-8');
echo $json;
}else{

    $clientes = ["message"=>"Metodo $server no permitido" ];
    $json= json_encode($datos);

header('content-type: application/json; charset=utf-8');
echo $json;
}
?>
