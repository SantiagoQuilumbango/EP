function init() {
    $("#form_roles").on("submit", (e) => {
      GuardarEditar(e);
    });
  }
  
  $().ready(() => {
    CargaLista();
  });
  
  var CargaLista = () => {
    var html = "";
    $.get(
      "../../controllers/rol.controllers.php?op=todos",
      (ListRoles) => {
        ListRoles = JSON.parse(ListRoles);
        $.each(ListRoles, (index, rol) => {
          html += `<tr>
              <td>${index + 1}</td>
              <td>${rol.Rol}</td>
              <td>
                <button class='btn btn-primary' click='editar(${rol.idRoles})'>Editar</button>
                <button class='btn btn-warning' click='eliminar(${rol.idRoles})'>Eliminar</button>
              </td>
              </tr>`;
        });
        $("#ListaRoles").html(html);
      }
    );
  };
  
  var GuardarEditar = (e) => {
    e.preventDefault();
    var DatosFormularioRol = new FormData($("#form_roles")[0]);
    var accion = "../../controllers/rol.controllers.php?op=insertar";
  
    for (var pair of DatosFormularioRol.entries()) {
      console.log(pair[0] + ", " + pair[1]);
    }
  
    $.ajax({
      url: accion,
      type: "post",
      data: DatosFormularioRol,
      processData: false,
      contentType: false,
      cache: false,
      success: (respuesta) => {
        console.log(respuesta);
        respuesta = JSON.parse(respuesta);
        if (respuesta == "ok") {
          alert("Se guardó con éxito");
          CargaLista();
          LimpiarCajas();
        } else {
          alert("No se pudo guardar");
        }
      },
    });
  };
  
  var editar = (idRol) => {
    // Aquí puedes implementar la lógica para editar un rol utilizando el ID proporcionado
  };
  
  var eliminar = (idRol) => {
    // Aquí puedes implementar la lógica para eliminar un rol utilizando el ID proporcionado
  };
  
  var LimpiarCajas = () => {
    (document.getElementById("Rol").value = ""),
      $("#ModalRoles").modal("hide");
  };
  init();
  