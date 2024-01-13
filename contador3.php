<?php

$contador = 0;

if($fd = fopen('counter.txt', 'r')){
  $contador=fgets($fd);
  fclose($fd);
}

$fd=open('counter.txt','w');
$contador=$contador+1;
fwrite($fd,$contador);
fclose($fd2);

echo $contador;

?>
