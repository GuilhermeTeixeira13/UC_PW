<?php
function coinToss() {
  $res = rand(1,2);
  if($res == 1)
    return "cara";
  else
    return "coroa";
}

echo "Lançou a moeda ao ar, o resultado foi: " . coinToss();
?>