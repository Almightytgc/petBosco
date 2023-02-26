<?php
include("conexionBd.php");
$con = conectar();

$chequeo_general = $_POST['chequeoGeneral'];
$medicamento = $_POST['medicamento'];
$tratamiento = $_POST['tratamiento'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO `reportemedico`( `chequeoGeneral`, `medicamento`, `tratamiento`, `fecha`) VALUES ('$chequeo_general','$medicamento','$tratamiento','$fecha')";

$query = mysqli_query($con, $sql);

if ($query) {
    header ("location: reporteExitoso.php");
}
?>