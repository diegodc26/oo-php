<?php

$data = new DateTime();
echo $data->format('d/m/Y H:i:s').PHP_EOL;

$intervalo = new DateInterval('P5DT10H50M');//adiciona um periodo de 5 minutos
$data->sub($intervalo);
echo $data->format('d/m/Y H:i:s').PHP_EOL;
 