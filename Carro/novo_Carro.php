<?php
require_once "Carro.php";

$novoCarro = new Carro;
$novoCarro->marca_Carro="Nissan";
$novoCarro->modelo_Carro="240 sx";
$novoCarro->cor_Carro="Azul Meia Noite";
$novoCarro->ano_Carro="1998";
$novoCarro->tipo_Carro="Coupe";
$novoCarro->km_Carro="100000";
$novoCarro->combus_Carro="Alcool";
$novoCarro->tunado_Carro="Sim";
$novoCarro->placa_Carro="123546789";

echo"Registro do Veiculo<br>";
echo"Marca: ". $novoCarro->getMarca_Carro();
echo"<br>Modelo: ". $novoCarro->modelo_Carro;
echo"<br>Cor: ". $novoCarro->cor_Carro;
echo"<br>Tipo: ". $novoCarro->tipo_Carro;
echo"<br>Km: ". $novoCarro->km_Carro;
echo"<br>Combuustivel: ". $novoCarro->combus_Carro;
echo"<br>Tunado: ". $novoCarro->tunado_Carro;
echo"<br>Placa: ". $novoCarro->placa_Carro;