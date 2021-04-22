let gen = document.getElementById("icono-gerencial");
let juridico = document.getElementById("icono-juridico");
let admin = document.getElementById("icono-admin");
let contable = document.getElementById("icono-contable");
let financiera = document.getElementById("icono-financiera");
let tramite = document.getElementById("icono-tramite");

function changeGerencial() {
  if (gen.src.includes("13")) {
    gen.src = "./src/img/Atenea-22.png";
    juridico.src = "./src/img/Atenea-14.png";
    admin.src = "./src/img/Atenea-15.png";
    contable.src = "./src/img/Atenea-16.png";
    financiera.src = "./src/img/Atenea-17.png";
    tramite.src = "./src/img/Atenea-13.png";
  }
}
function changeJuridico() {
  if (juridico.src.includes("14")) {
    gen.src = "./src/img/Atenea-13.png";
    juridico.src = "./src/img/Atenea-21.png";
    admin.src = "./src/img/Atenea-15.png";
    contable.src = "./src/img/Atenea-16.png";
    financiera.src = "./src/img/Atenea-17.png";
    tramite.src = "./src/img/Atenea-13.png";
  }
}
function changeAdmin() {
  if (admin.src.includes("15")) {
    gen.src = "./src/img/Atenea-13.png";
    juridico.src = "./src/img/Atenea-14.png";
    admin.src = "./src/img/Atenea-20.png";
    contable.src = "./src/img/Atenea-16.png";
    financiera.src = "./src/img/Atenea-17.png";
    tramite.src = "./src/img/Atenea-13.png";
  }
}
function changeContable() {
  if (contable.src.includes("16")) {
    gen.src = "./src/img/Atenea-13.png";
    juridico.src = "./src/img/Atenea-14.png";
    admin.src = "./src/img/Atenea-15.png";
    contable.src = "./src/img/Atenea-18.png";
    financiera.src = "./src/img/Atenea-17.png";
    tramite.src = "./src/img/Atenea-13.png";
  }
}

function changeFinanciera() {
  if (financiera.src.includes("17")) {
    gen.src = "./src/img/Atenea-13.png";
    juridico.src = "./src/img/Atenea-14.png";
    admin.src = "./src/img/Atenea-15.png";
    contable.src = "./src/img/Atenea-16.png";
    financiera.src = "./src/img/Atenea-19.png";
    tramite.src = "./src/img/Atenea-13.png";
  }
}

function changeTramite() {
  if (tramite.src.includes("13")) {
    gen.src = "./src/img/Atenea-13.png";
    juridico.src = "./src/img/Atenea-14.png";
    admin.src = "./src/img/Atenea-15.png";
    contable.src = "./src/img/Atenea-16.png";
    financiera.src = "./src/img/Atenea-17.png";
    tramite.src = "./src/img/Atenea-22.png";
  }
}

(function () {
  "use strict";
  window.addEventListener(
    "load",
    function () {
      // Seleccionar el formulario para validar
      var forms = document.getElementsByClassName("needs-validation");
      // Validar cada campo y prevenir que se envie
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();

