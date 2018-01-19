<?php
$pen = 0;
$ult = 1;
echo "$pen $ult ";
for($i = 0; $i < 15; $i++){
  $atu = $pen + $ult;
  echo "$atu ";
  $pen = $ult;
  $ult = $atu;
}
echo "\n";
