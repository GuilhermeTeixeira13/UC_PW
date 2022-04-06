<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="pacientes.css" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
  <?php 
    $xml = simplexml_load_file("pacientes.xml");
    echo "<h2>Pacientes</h2><br />";

    echo "<table border='1'>";
    echo "<tr><td>ID</td><td>Sexo</td><td>Nome</td><td>Ano Nascimento</td><td>BI</td><td>Contribuinte</td><td>Sistema de Saúde</td><td>Doutor</td></tr>";
    foreach($xml->children() as $paciente)
    { 
      $paciente->addAttribute('id', $paciente->id);
      unset($paciente->id);
      $paciente->addAttribute('sexo', $paciente->sexo);
      unset($paciente->sexo);
      
      $paciente->addChild("doutor");
      if($paciente->attributes()->sexo == 'M')
        $paciente->doutor = "Dr.Marcelo Pereira";
      else
        $paciente->doutor = "Dra.Josefina Fontes";
    
      if((date("Y") - $paciente->anoNascimento) < 18){
        echo "<tr>";  
        echo "<td>".$paciente->attributes()->id."</td>";
        echo "<td>".$paciente->attributes()->sexo."</td>";
        echo "<td>".$paciente->name."</td>";
        echo "<td>".$paciente->anoNascimento."</td>";
        echo "<td>".$paciente->bi."</td>";
        echo "<td>".$paciente->contribuinte."</td>";
        echo "<td>".$paciente->sistemaSaude."</td>";
        echo "<td>".$paciente->doutor."</td>";
        echo "</tr>";  
      } 
    }
    echo "</table>";

    
    $xml->asXML('pacientes2.xml');
  ?>
</body>
</html>