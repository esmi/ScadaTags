<?php

require_once "scada.php";
require_once "provider.php";

$provider = new provider();
$scada = new scada($provider);
//$scada = new scada(null);
$d = $scada->scadaTags();
var_dump($d);
 ?>
