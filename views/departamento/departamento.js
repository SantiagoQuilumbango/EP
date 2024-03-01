function init() {
  $("#form_departamentos").on("submit", (e) => {
    GuardarEditar(e);
  });
}

$().ready(() => {
  CargaLista();
});

var CargaLista = () => {
  var html = "";
  $.get(
    "../../controllers/departamento.controllers.php?op=todos",
    (ListDepartamentos) => {
      ListDepartamentos = JSON.parse(ListDepartamentos);
      $.each(ListDepartamentos, (index, departamento) => {
        html += `<tr>
            <td>${index + 1}</td>
            <td>${departamento.Nombre}</td>
            <td>${departamento.Ubicacion}</td>
            <td>${departamento.Presupuesto}</td>
            <td>${departamento.Jefe}</td>
            <td>
              <button class='btn btn-primary' click='editar(${departamento.ID_departamento})'>Editar</button>
              <button class='btn btn-warning' click='eliminar(${departamento.ID_departamento})'>Eliminar</button>
            </td>
            </tr>`;
      });
      $("#ListaDepartamentos").html(html);
    }
  );
};

var GuardarEditar = (e) => {
  e.preventDefault();
  var DatosFormularioDepartamento = new FormData($("#form_departamentos")[0]);
  var accion = "../../controllers/departamento.controllers.php?op=insertar";

  for (var pair of DatosFormularioDepartamento.entries()) {
    console.log(pair[0] + ", " + pair[1]);
  }

  $.ajax({
    url: accion,
    type: "post",
    data: DatosFormularioDepartamento,
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

var editar = (idDepartamento) => {
  // Aquí puedes implementar la lógica para editar un departamento utilizando el ID proporcionado
};

var eliminar = (idDepartamento) => {
  // Aquí puedes implementar la lógica para eliminar un departamento utilizando el ID proporcionado
};

var LimpiarCajas = () => {
  (document.getElementById("Nombre").value = ""),
    (document.getElementById("Ubicacion").value = ""),
    (document.getElementById("Presupuesto").value = ""),
    (document.getElementById("Jefe").value = ""),
    $("#ModalDepartamentos").modal("hide");
};
init();

  