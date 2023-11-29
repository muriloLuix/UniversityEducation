document.getElementById('campo3').addEventListener('input', function() {
    const enteredDate = this.value;
    const components = enteredDate.split('-');
    const year = components[0];
  
    if (year.length > 4) {
      const truncatedYear = year.slice(0, 4);
      components[0] = truncatedYear;
      const truncatedDate = components.join('-');
      this.value = truncatedDate;
    }
  });



  function mostrarMensagem() {
    alert('Arquivo adicionado com sucesso!');
}
function mostrarMensagem() {
  var modal = document.getElementById("modal");
  modal.style.display = "block";

  var span = document.getElementsByClassName("close")[0];

  span.onclick = function () {
      modal.style.display = "none";
  };

  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  };
}
