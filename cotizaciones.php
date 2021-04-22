<!DOCTYPE html>
<html lang="en">
<?php
require("./layout/header.php");

?>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
          
            <picture>
              <source srcset="./src/icons/Logo Atenea 1.svg"
              class="logo"
              alt="logo" type="image/webp"/>
              <img
              loading="lazy"
              src="./src/icons/Logo Atenea 1.svg"
              class="logo"
              alt="logo"
            />
            </picture>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mt-5 mt-md-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="nuestros-servicios.php">
                  Nuestros Servicios
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="cotizaciones.php">Cotizaciones</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="contenedor p-100">
        <div class="text-center">
          <h2 class="text-center">Formulario de contacto</h2>
          <picture>
              <source srcset="./src/icons/Linea (centro).svg"
            alt="linea"
            class="decorador" type="image/webp"/>
              <img
            loading="lazy"
            src="./src/icons/Linea (centro).svg"
            alt="linea"
            class="decorador"
          />
            </picture>

          <p class="mt-5">
            Asesoría en Constitución de Empresas y Gestión Empresarial
          </p>
          <p class="alinear-derecha">
            Obligatorio (
            <span class="red">*</span>
            )
          </p>
        </div>

        <form action="correo.php" method="POST" id="form" class="mt-5 needs-validation "  novalidate>
          <div class="form">
            <div class="grupo">
              <input type="text" name="name" id="name" required />
              <span class="barra"></span>
              <label for="">
                Nombre y apellido
                <span class="red">*</span>
              </label>
            </div>
            <div class="grupo">
              <input type="tel" name="telefono" id="telefono" required />
              <span class="barra"></span>
              <label for="">
                Número de teléfono
                <span class="red">*</span>
              </label>
            </div>
            <div class="grupo">
              <input type="email" name="email" id="email" required />
              <span class="barra"></span>
              <label for="">Correo Electronico</label>
            </div>
            <div class="grupo">
              <input type="text" name="country" id="country" required />
              <span class="barra"></span>
              <label for="">Pais y Ciudad</label>
            </div>
            <div class="grupo">
              <input type="text" name="service" id="service" required />
              <span class="barra"></span>
              <label for="">
                Tipo de asesoría o servicio que solicita
                <span class="red">*</span>
              </label>
            </div>
          </div>
          <div class="alinear-derecha">
            <input
              type="submit"
              class="btn px-5 py-2 btn-primary text-uppercase rounded-pill"
              value="Enviar"
            />
          </div>
        </form>
      </section>
      <div class="ml-md-5">
       
        <picture>
              <source srcset="./src/img/Atenea-03.png"
          class="plant"
          alt="imagen" type="image/webp"/>
              <img
          loading="lazy"
          src="./src/img/Atenea-03.png"
          class="plant"
          alt="imagen"
        />
            </picture>
      </div>
    </main>

    <?php 
    require("./layout/footer.php");
?>

  </body>
</html>
