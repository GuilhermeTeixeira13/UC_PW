$(document).ready(function () {  // do not delete 
  // ----------------------------------------------------------------------------
  // EXERCISE 3
  // In the HTML file, first look at the code to see what has been hidden 
  // with this jQuery.
  // Then figure out how to make the appropriate character appear when we
  // hover on his or her name in the main text.
  //
  // Hint: var amount = $(this).closest('.vacation').data('price');
  // ----------------------------------------------------------------------------


  var rama = $('#rama');
  var sita = $('#sita');
  var hanuman = $('#hanuman');
  var ravana = $('#ravana');
  var lakshmana = $('#lakshmana');

  $('.character').hide();
  $('.right').prepend("<p>Roll over a character's name to learn more.</p>");
  $('.name').mouseover(
    function () {
      let p = document.querySelector('.name');
      let nome = this.getAttribute('data-person');
      console.log(nome);
      if (nome == "#rama") {
        sita.hide();
        hanuman.hide();
        ravana.hide();
        lakshmana.hide();
        rama.show();
      }
      if (nome == "#sita") {
        rama.hide();
        hanuman.hide();
        ravana.hide();
        lakshmana.hide();
        sita.show();
      }
      if (nome == "#hanuman") {
        rama.hide();
        sita.hide();
        ravana.hide();
        lakshmana.hide();
        hanuman.show();
      }
      if (nome == "#ravana") {
        rama.hide();
        sita.hide();
        hanuman.hide();
        lakshmana.hide();
        ravana.show();
      }
      if (nome == "#lakshmana") {
        rama.hide();
        sita.hide();
        hanuman.hide();
        ravana.hide();
        lakschmana.show();
      }
    }
  )
  // ----------------------------------------------------------------------------
}); // do not delete
