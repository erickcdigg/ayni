document.getElementById("formulario").addEventListener('submit', function (e) {
  e.preventDefault();

  const usuario = document.getElementById("usuario").value;
  const password = document.getElementById("password").value;

  if (!usuario || !password) {
    alert("Usuario o contraseña no pueden estar vacíos");
    return;
  }

  const objUsuario = {
    usuario,
    password
  };

  fetch("./backend-php/login.php", {
    method: "POST",
    body: JSON.stringify(objUsuario),
    headers: {
      'Content-Type': 'application/json'
    }
  })
    .then(response => {
      if (!response.ok) {
        if (response.status >= 500 && response.status < 600) {
          throw new Error("Error interno del servidor");
        } else {
          throw new Error("Error en la solicitud");
        }
      }
      return response.json();
    })
    .then(data => {
      console.log(data);
      if (data.redirigir) {
        // Redirigir a la página especificada en la respuesta
        window.location.href = data.redirigir;
      } else if (data.error) {
        alert(data.error);
      } else {
        alert("Error desconocido al iniciar sesión");
      }
    })
    .catch(error => {
      console.error(error);
      alert("Error al iniciar sesión");
    });
});
