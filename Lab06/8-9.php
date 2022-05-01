<?php
$string = 'Class00';
for ($i = 0; $i <= 11; $i++) {
  echo substr_replace($string, $i, 5) . "\n\n"; 
}
?>