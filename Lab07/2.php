<?php 
$multicity = array (
  array("City", "Country", "Continent"),
  array("Tokyo",
  "Japan", "Asia", "Mexico City", "Mexico", "North America", "New York City", "USA", "North America", "Mumbai", "India", "Asia", "Seoul", 
  "Korea", "Asia", "Shanghai", "China", "Asia", "Lagos", "Nigeria", "Africa", "Buenos Aires", "Argentina", "South America", "Cairo", "Egypt", 
  "Africa", "London", "UK", "Europe"),
);

echo "<table border='1'>";
echo "<tr>";
for ($i = 0; $i < 3; $i++) {
  echo "<td>". $multicity[0][$i]."</td>";
}
echo "</tr>";
for ($i = 0; $i < 30; $i+=3) {
  echo "<tr>";
  echo "<td>". $multicity[1][$i]."</td>";
  echo "<td>". $multicity[1][$i+1]."</td>";
  echo "<td>". $multicity[1][$i+2]."</td>";
  echo "</tr>";
}
echo "</table>";
?> 