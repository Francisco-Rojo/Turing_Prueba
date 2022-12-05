let btn = document.getElementsByClassName("btnModal");

// se utiliza un for ya que recorre todas las clases con el nombre 
// btnmodal y asi saber cuando abrir un modal
for (let i = 0; i < btn.length; i++) {
  const modal = document.getElementById("myModal");

  const span = document.getElementsByClassName("close")[0];

  btn[i].onclick = function () {
    modal.style.display = "block";
  }

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
