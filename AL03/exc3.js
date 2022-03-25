function calculoArea(raio) {
  var area = Math.PI * Math.pow(raio , 2);
  console.log("Raio:"+raio+" | Área:"+area);
  return area.toFixed(2);
}

function exc3() {
  var raio = parseInt(document.getElementById("raio").value, 10);
  document.getElementById("exc3").textContent = calculoArea(raio);

  console.log("\nÁreas dos círculos com raios de 2 a 9 excuindo o 5:")
  var novoRaio = 2;
  while(novoRaio <= 9){
    if(novoRaio != 5)
      calculoArea(novoRaio);
    
    novoRaio++;
  }
}
