function enviarFormulario(event) {
  event.preventDefault();

  var carnet = document.getElementById("carnet").value;
  var nombres = document.getElementById("nombres").value;
  var apellidos = document.getElementById("apellidos").value;
  var fechaNacimiento = document.getElementById("fecha_nacimiento").value;
  var email = document.getElementById("email").value;
  var telefono = document.getElementById("telefono").value;
  var direccion = document.getElementById("direccion").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../Store/guardar.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    console.log(xhr.responseText);
    var response = JSON.parse(xhr.responseText);
    if (response.status === "success") {
      alert(response.message);
      window.location.href = "../Views/bienvenido.php";
    } else {
      alert(response.message);
    }
  };

  var data =
    "carnet=" +
    encodeURIComponent(carnet) +
    "&nombres=" +
    encodeURIComponent(nombres) +
    "&apellidos=" +
    encodeURIComponent(apellidos) +
    "&fecha_nacimiento=" +
    encodeURIComponent(fechaNacimiento) +
    "&email=" +
    encodeURIComponent(email) +
    "&telefono=" +
    encodeURIComponent(telefono) +
    "&direccion=" +
    encodeURIComponent(direccion);
  xhr.send(data);
}
