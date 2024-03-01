function init() {
  $("#form_empleado").on("submit", (e) => {
    GuardarEditar(e);
  });
}

$().ready(() => {
  CargaLista();
});

var CargaLista = () => {
  var html = "";
  $.get(
    "../../controllers/empleado.controllers.php?op=todos",
    (ListEmpleados) => {
      ListEmpleados = JSON.parse(ListEmpleados);
      $.each(ListEmpleados, (index, empleado) => {
        html += `<tr>
            <td>${index + 1}</td>
            <td>${empleado.Nombre}</td>
            <td>${empleado.Cargo}</td>
            <td>${empleado.Salario}</td>
            <td>${empleado.Fecha_contratacion}</td>
            <td>
              <button class='btn btn-primary' click='editar(${empleado.ID_empleado})'>Editar</button>
              <button class='btn btn-warning' click='eliminar(${empleado.ID_empleado})'>Eliminar</button>
            </td>
            </tr>`;
      });
      $("#ListaEmpleados").html(html);
    }
  );
};

var GuardarEditar = (e) => {
  e.preventDefault();
  var DatosFormularioEmpleado = new FormData($("#form_empleado")[0]);
  var accion = "../../controllers/empleado.controllers.php?op=insertar";

  for (var pair of DatosFormularioEmpleado.entries()) {
    console.log(pair[0] + ", " + pair[1]);
  }

  $.ajax({
    url: accion,
    type: "post",
    data: DatosFormularioEmpleado,
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



var LimpiarCajas = () => {
  (document.getElementById("Nombre").value = ""),
    (document.getElementById("Cargo").value = ""),
    (document.getElementById("Salario").value = ""),
    (document.getElementById("Fecha_contratacion").value = ""),
    $("#ModalEmpleado").modal("hide");
};
init();
