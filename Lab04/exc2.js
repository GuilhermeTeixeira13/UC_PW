function polig(numLados) {
  var nomePol;
  switch (numLados) {
    case "3":
      nomePol = "Triângulo";
      break;
    case "4":
      nomePol = "Quadrilátero";
      break;
    case "5":
      nomePol = "Pentágono";
      break;
    case "6":
      nomePol = "Hexágono";
      break;
    case "7":
      nomePol = "Heptágono";
      break;
    case "8":
      nomePol = "Octógono";
      break;
    case "9":
      nomePol = "Eneágono";
      break;
    case "10":
      nomePol = "Decágono";
      break;
    default:
      nomePol = "Nº de lados deve ser um valor compreendido entre 3 e 10";
      break;
  }

  console.log(nomePol);
  return nomePol;
}

function exc2() {
  var numLados = document.getElementById("nlados").value;
  document.getElementById("exc2").textContent = polig(numLados);
}
