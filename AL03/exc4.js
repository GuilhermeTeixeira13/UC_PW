function registo() {
  var numParticipantes = prompt("Número de alunos a registar:", "1");
  const totalIdades=[];
  var i = 0;
  let text = "Idades a serem resgistadas:\n\n";

  while(i < numParticipantes){
    totalIdades[i] = prompt("Idade do participante nº"+(i+1)+":");
    text = text + "Participante "+ (i+1) +": " +totalIdades[i] + " anos\n";
    i++;
  }

  if (confirm(text) == true) {
    document.getElementById("resultado").innerHTML = "Idades";
    document.getElementById("numParticipantes").innerHTML = "Nº de Participantes: "+ numParticipantes;
    document.getElementById("mediaIdades").innerHTML = "Média de Idades: "+ avg(totalIdades, numParticipantes);
    document.getElementById("minimaIdade").innerHTML = "Idade mínima: "+ min(totalIdades, numParticipantes);
    document.getElementById("maximaIdade").innerHTML = "Idade máxima: "+ max(totalIdades, numParticipantes);
  } else {
    document.getElementById("resultado").innerHTML = "Registo Cancelado!";
    document.getElementById("numParticipantes").innerHTML = "";
    document.getElementById("mediaIdades").innerHTML = "";
    document.getElementById("minimaIdade").innerHTML = "";
    document.getElementById("maximaIdade").innerHTML = "";
  }
}


function avg(Array, tamanho){
  var sum = 0;

  for(i=0; i<tamanho; i++)
    sum += parseFloat(Array[i]);

  var media = sum / tamanho;

  console.log("Média: "+media);
  return media;
}

function min(Array, tamanho){
  var min = Array[0];

  for(i=1; i<tamanho; i++){
    if(Array[i] < min)
      min = Array[i];
  }

  console.log("Min: "+min);
  return min;
}

function max(Array, tamanho){
  var max = Array[0];

  for(i=1; i<tamanho; i++){
    if(Array[i] > max)
      max = Array[i];
  }

  console.log("Max: "+max);
  return max;
}