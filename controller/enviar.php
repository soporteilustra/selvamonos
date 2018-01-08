<?php
include_once 'connection.php';
include_once 'sendmailreservas.php';

//get parameters
$variables='';
$values='';
foreach ($_POST as $key => $value) {
    $variables.="$key,";
    $values.="'$value',";
}
$variables = substr($variables,0,-1);
$values= substr($values,0,-1);

//table data
$table = 'registros';
# code...
$insertar = "INSERT INTO $table ($variables) VALUES ($values)";
mysqli_query($conexion,$insertar);

$bool = sendEmail($variables, $values);
mysqli_close($conexion);

header('Location: /gracias.html');

?>
