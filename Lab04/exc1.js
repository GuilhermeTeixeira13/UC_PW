function quote(nomePersonagem) {
  var citacao;
  if (nomePersonagem == "Bart") citacao = "Ay Caramba!";
  else if (nomePersonagem == "Homer") citacao = "D'ohh!!";

  console.log(citacao);
  return citacao;
}

function exc1() {
  var nomePersonagem = document.getElementById("personagem").value;
  document.getElementById("exc1").textContent = quote(nomePersonagem);
}
