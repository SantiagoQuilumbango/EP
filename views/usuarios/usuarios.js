function init() {
  $("#form_usuarios").on("submit", (e) => {
    GuardarEditar(e);
  });
}

$().ready(() => {
  CargaLista();
});

var CargaLista = () => {
  var html = "";
  $.get(
    "../../controllers/usuario.controllers.php?op=todos",
    (ListUsuarios) => {
      ListUsuarios = JSON.parse(ListUsuarios);
      $.each(ListUsuarios, (index, usuario) => {
        html += `<tr>
            <td>${index + 1}</td>
            <td>${usuario.Nombres}</td>
            <td>${usuario.Apellidos}</td>
            <td>${usuario.Rol}</td>
            <td>${usuario.Nombre}</td>
<td>
<button class='btn btn-primary' click='uno(${
          usuario.idUsuarios
        })'>Editar</button>
<button class='btn btn-warning' click='eliminar(${
          usuario.idUsuarios
        })'>Editar</button>`;
      });
      $("#ListaUsuarios").html(html);
    }
  );
};

var GuardarEditar = (e) => {
  e.preventDefault();
  var DatosFormularioUsuario = new FormData($("#form_usuarios")[0]);
  var accion = "../../controllers/usuario.controllers.php?op=insertar";

  for (var pair of DatosFormularioUsuario.entries()) {
    console.log(pair[0] + ", " + pair[1]);
  }

  
  $.ajax({
    url: accion,
    type: "post",
    data: DatosFormularioUsuario,
    processData: false,
    contentType: false,
    cache: false,
    success: (respuesta) => {
      console.log(respuesta);
      respuesta = JSON.parse(respuesta);
      if (respuesta == "ok") {
        alert("Se guardo con éxito");
        CargaLista();
        LimpiarCajas();
      } else {
        alert("no se guardo");
      }
    },
  });
};

var uno = () => {};


var roles = () => {
  return new Promise((resolve, reject) => {
    var html = `<option value="0">Seleccione una opción</option>`;
    $.post(
      "../../controllers/rol.controllers.php?op=todos",
      async (ListaRoles) => {
        ListaRoles = JSON.parse(ListaRoles);
        $.each(ListaRoles, (index, rol) => {
          html += `<option value="${rol.idRoles}">${rol.Rol}</option>`;
        });
        await $("#RolId").html(html);
        resolve();
      }
    ).fail((error) => {
      reject(error);
    });
  });
};

var eliminar = () => {};

var LimpiarCajas = () => {
  (document.getElementById("Nombres").value = ""),
    (document.getElementById("Apellidos").value = ""),
    (document.getElementById("Correo").value = ""),
    (document.getElementById("contrasenia").value = ""),
    $("#ModalUsuarios").modal("hide");
};
init();
