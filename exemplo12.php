<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h1> Exemplo 12 </h1>
<?php
function msn(){
$msn="Olá, Bem vindo as funções no PHP";
echo "<h2>$msn</h2>";
}
function imprimir($texto){
echo "<h3>$texto</h3>";
}
msn();
imprimir("Testando a função");
?>
</body>
</html>