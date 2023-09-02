<?php

require_once 'responses/consultarResponse.php';
require_once '../../modelo/operador.php';
require_once '../../modelo/satelite.php';

header('Content-Type: application/json');

$IdSatelite = $_GET['id'];

$resp= new ConsultarResponse ();

$o=new Operador();
$o->Nombre = 'ARSAT';
$o->TipoEmpresa = 'publica';
$o->FormaLegal = 'sociedad anonima';

$s=new Satelite();
$s->Id= $IdSatelite;
$s->Nombre = 'Arsat-1';
$s-> Operador= $o;
$s->TipoDeMision = 'comunicaciones';
$s->DuracionEnAnios = '15';






$resp->Satelite = $s;


echo json_encode($resp);
