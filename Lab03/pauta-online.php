<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="pauta.css" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
  <?php 
    $xml = simplexml_load_file("pauta.xml");
    echo "<h2>Pauta de Alunos</h2><br />";

    foreach($xml->children() as $aluno)
    {
      echo "<div id='aluno'>";
      $aluno->addChild("FinalNote", (($aluno->exam2 + $aluno->exam1)/2));

      echo "<p>Nº de aluno : ".$aluno->attributes()->studentNo."</p><br />";
      echo "<p>Nome : ".$aluno->name."</p>";
      echo "<table border='1'>";
      echo "<tr><td>Nota Frequência 1</td><td>".$aluno->exam1."</td></tr><br />";
      echo "<tr><td>Nota Frequência 2</td><td>".$aluno->exam2."</td></tr><br />";
      echo "<tr><td>Nota Final</td><td>".$aluno->FinalNote."</td></tr><br />";
      echo "</table>";

      if($aluno->FinalNote < 10){
        echo "<p class='reprovado'><br />Aluno/a Reprovado/a<br /><br /></p>";
      }
      else{
        echo "<p class='aprovado'><br />Aluno/a Aprovado/a<br /><br /></p>";
      }
      echo "</div>";
    }
  ?>
</body>
</html>