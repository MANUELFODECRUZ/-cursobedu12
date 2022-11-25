<?php
HolaHola;95--95
include_once 'conexion.php';
//recibimos los datos del formulario
//if(isset($_POST['update'])){
var_dump($_POST);
echo $id = $_GET['id'];
echo $constancia = $_FILES['cons_socialtsu']['name'];
echo $archivoconstancia = $_FILES['cons_socialtsu']['tmp_name'];
echo $examen = $_FILES['ex_extsu']['name'];
echo $archivoexamen = $_FILES['ex_extsu']['tmp_name'];
echo $certificado = $_FILES['cert_carrtsu']['name'];
echo $archivocertificado = $_FILES['cert_carrtsu']['tmp_name'];
echo $certitsu = $_FILES['cert_tsu']['name'];
echo $archivocertitsu = $_FILES['cert_tsu']['tmp_name'];
echo $titulotsu = $_FILES['titu_tsu']['name'];
echo $archivotitulotsu = $_FILES['titu_tsu']['tmp_name'];
echo $carpeta = "img";
echo $rutaconstancia = $carpeta."/".$constancia;
echo $rutaexamen = $carpeta."/".$examen;
echo $rutacertitsu = $carpeta."/".$certitsu;
echo $rutatitulotsu = $carpeta."/".$titulotsu;
echo $rutacertificado = $carpeta."/".$certificado;
move_uploaded_file($archivoconstancia, $rutaconstancia);
move_uploaded_file($archivoexamen, $rutaexamen);
move_uploaded_file($archivocertitsu, $rutacertitsu);
move_uploaded_file($archivocertificado, $rutacertificado);
move_uploaded_file($archivotitulotsu, $rutatitulotsu);

if($constancia != null AND $examen != null AND $certificado != null AND $certitsu != null AND $titulotsu != null){
echo $insertar = "INSERT INTO titulaciontsu(id_alumtsu, id_alumno, constanciasotsu, examenex, certificadocarretsu, certificadotsu, titulotsu) 
VALUES (null, '$id','$constancia','$examen','$certificado','$certitsu','$titulotsu')";
$result=$conexion->query($insertar);
if($result)
{
    echo "Exito al insertar";
}

}else{
    echo "No hay documentos que insertar";
}

?>