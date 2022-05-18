<?php
$multicity = array (
  array("City", "Country", "Continent"),
  array("Tokyo",
  "Japan", "Asia", "Mexico City", "Mexico", "North America", "New York City", "USA", "North America", "Mumbai", "India", "Asia", "Seoul", 
  "Korea", "Asia", "Shanghai", "China", "Asia", "Lagos", "Nigeria", "Africa", "Buenos Aires", "Argentina", "South America", "Cairo", "Egypt", 
  "Africa", "London", "UK", "Europe"),
);

// Abra a base de dados como objeto PDO (ou com a extensão mysqli se preferir)
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "primeira");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully\n";


//    Crie a tabela City com um commando similar a $sqldb->query("CREATE TABLE City (Id INTEGER
// PRIMARY KEY, Name TEXT, Country TEXT, Continent TEXT)");
$criar = "CREATE TABLE City (Name TEXT, Country TEXT, Continent TEXT)";
if ($conn->query($criar) === TRUE) {
  echo "Table created successfully\n";
} else {
  echo "Error: " . $criar . "<br>" . $conn->error;
}

// Insira todas as cidades, países e continentes existentes no exercício 8.2
for ($i = 0; $i < 30; $i+=3) {
  $fieldVal1 = mysqli_real_escape_string($conn, $multicity[1][$i]);
  $fieldVal2 = mysqli_real_escape_string($conn, $multicity[1][$i+1]);
  $fieldVal3 = mysqli_real_escape_string($conn, $multicity[1][$i+2]);

  $inserirPaises = "INSERT INTO City (Name, Country, Continent)
  VALUES ('$fieldVal1', '$fieldVal2', '$fieldVal3')";

  mysqli_query($conn, $inserirPaises);
}

// Obtenha todas os dados da base de dados e disponibilize-os numa tabela HTML
// Guarde o resultado da tabela num ficheiro cities.txt
$getData = "SELECT Name, Country, Continent FROM City";
$result = $conn->query($getData);
$f = fopen('data.txt', 'w');
if ($result->num_rows > 0) {
  echo "<table border='1'>";
  echo "<tr><td>Name</td><td>Country</td><td>Continent</td></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Country"]. "</td><td>" . $row["Continent"]. "</td></tr>";
               
    fwrite($f, $row["Name"].",".$row["Country"].",".$row["Continent"]."\n");                                                                                    
  }
  echo "</tr>";
} else {
  echo "0 results";
}

// Fechar conexão à BD
$conn->close();
?>