function inicio_sesion(e){
    e.preventDefault();
    var email = document.getElementById("email").value;
    var contraseña = document.getElementById("contraseña").value;
    var data = new FormData();
    data.append("email", email);
    data.append("contraseña", contraseña);
    var xhr = new XMLHttpRequest();
    xhr.withCredentials = true;
    xhr.addEventListener("readystatechange", function() {
      if(this.readyState === 4) {
          if(this.responseText == "TRUE"){
            window.location.href = "http://localhost/proyecto-encuesta/perfil.php";
          }
            document.getElementById("mensaje_error").innerHTML = this.responseText
        }
    });
    xhr.open("POST", "http://localhost/proyecto-encuesta/iniciar_sesion.php");
    xhr.send(data);
}
document.getElementById("btninicio").addEventListener("click", inicio_sesion);