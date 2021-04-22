<!DOCTYPE html>
<html lang="en">
<?php
require("./layout/header.php");

?>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light pb-md-0">
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
              <li class="nav-item active">
                <a class="nav-link" href="nuestros-servicios.php">
                  Nuestros Servicios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cotizaciones.php">Cotizaciones</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <div class="bg-opcional">
        <section class="contenedor p-100 text-center">
        
          <picture>
              <source srcset="./src/img/Enrique-Story-logo.png"
            alt="icono enrique"
            class="imagen__enrique" type="image/webp"/>
              <img
            loading="lazy"
            src="./src/img/Enrique-Story-logo.png"
            alt="icono enrique"
            class="imagen__enrique"
          />
            </picture>
         
          <picture>
              <source srcset="./src/icons/Logo Atenea 1.svg"
            class="logo__enrique"
            alt="logo" type="image/webp"/>
            <img
            loading="lazy"
            src="./src/icons/Logo Atenea 1.svg"
            class="logo__enrique"
            alt="logo"
          />
            </picture>

          <p class="pt-3">
            <span class="bold">ATENEA global services</span>
            y
            <span class="bold">Enrique Story LLC</span>
            agradecemos su interés
            <br />
            en nuestros servicios de registro de compañia y gestión de cuenta
            bancaria en EE.UU.
          </p>

          <div class="gestiones">
            <div class="gestion">
              <div class="gestion__imagen pb-5">
                <picture>
              <source srcset="./src/icons/Vectores (10).svg"
                  alt="imagen pana"
                  class="img-fluid" type="image/webp"/>
              <img
                  loading="lazy"
                  src="./src/icons/Vectores (10).svg"
                  alt="imagen pana"
                  class="img-fluid"
                />
            </picture>
              </div>
              <h2>REGISTRO DE EMPRESA</h2>
              <p class="pt-2">
                Proceso completo desde selección de nombre hasta emisión de
                documentación.
              </p>
            </div>
            <div class="gestion">
              <div class="gestion__imagen pb-5">
               
                <picture>
              <source srcset="./src/icons/Vectores (11).svg"
                  alt="imagen pana"
                  class="img-fluid" type="image/webp"/>
              <img
                  loading="lazy"
                  src="./src/icons/Vectores (11).svg"
                  alt="imagen pana"
                  class="img-fluid"
                />
            </picture>
              </div>
              <h2>REGISTRO FISCAL</h2>
              <p class="pt-2">
                Proceso de generación y emisión de número de registro fiscal.
              </p>
            </div>

            <div class="gestion">
              <div class="gestion__imagen pb-5">
                <picture>
              <source srcset="./src/icons/Vectores (22).svg"
                  alt="imagen pana"
                  class="img-fluid" type="image/webp"/>
              <img
                  loading="lazy"
                  src="./src/icons/Vectores (22).svg"
                  alt="imagen pana"
                  class="img-fluid"
                />
            </picture>
              </div>
              <h2>GESTIÓN DE PROCESO DE CUENTA BANCARIA</h2>
              <p class="pt-2">
                Desde los primeros contactos con el
                <br />
                banco, hasta coordinar el acceso a la plataformas de banca
                digital.
              </p>
            </div>
          </div>
          <div class="boton-alineado-derecha">
            <a
              href=" https://api.whatsapp.com/send?phone=+584141355691"
              class="boton"
              target="_blank"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-brand-whatsapp"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="#ffffff"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path
                  d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1"
                />
              </svg>
              ¡Cotiza Ahora!
            </a>
          </div>
        </section>

        <section class="beneficios__bg">
          <div class="contenedor">
            <div class="beneficios">
              <div class="beneficios__cuenta__llc">
                <h3>Beneficios de una cuenta LLC</h3>
                <p>(SOCIEDAD DE RESPONSABILIDAD LIMITADA)</p>

                <ul>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Ideal para empresas pequeñas y medianas.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Entidad más común de USA.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Los accionistas pueden ser extranjeros o estadounidenses.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Es una estructura de negocios económica.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    No es necesaria una oficina en EE. UU.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#ffffff"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Se pagan impuestos sobre las ganancias netas generadas
                    <span class="ml-md-5 ml-0">en EE.UU</span>
                  </li>
                </ul>
              </div>
              <div class="beneficios__cuenta__bancaria">
                <h3>Beneficios de tener una cuenta bancaria en EE.UU.</h3>
                <ul>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#013c74"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Crear un perfil de crédito en EE.UU.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#013c74"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Fondos asegurados por la Reserva Federal de EE.UU.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#013c74"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Número de identificación fiscal estadounidense que te
                    permite trabajar como empresario en EE.UU
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#013c74"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Cuenta bancaria en divisas en el sistema financiero
                    estadounidense.
                  </li>
                  <li class="mr-5">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-check"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="3"
                      stroke="#013c74"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                    Acceso a sistemas de banca móvil y en línea, confiables y
                    seguros.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="contenedor p-100">
          <div class="text-center">
            <h2 class="text-center">Paquetes de servicios disponibles</h2>
            
            <picture>
              <source srcset="./src/icons/Linea (centro).svg" alt="linea" class="decorador" type="image/webp"/>
              <img src="./src/icons/Linea (centro).svg" alt="linea" class="decorador" />
            </picture>

            <div class="content p-100">
              <div class="card one">
                <div class="top">
                  <div class="title">standard</div>
                  <div class="price-sec">
                    <span class="price">$545</span>
                  </div>
                </div>

                <div class="card-padding">
                  <div class="details">
                    <div class="one">
                      <span>
                        Registro de empresa en EE. UU. (LLC o Corp): $520
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>EIN (Tax Number):</span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Incluido
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>Saldo de apertura $100</span>
                    </div>
                    <hr />
                    <div class="one">
                      <span class="red">
                        El cliente deberá asumir los costos de traslado,
                        alojamiento y servicios adicionales que pudiera
                        requerir.
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Nota: con solo sumar el promedio de costo del pasaje
                        ($700) + estadía (<$150) + viáticos ($350) esta opción
                        resulta $495 más costosa que el paquete Premium.
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Tiempo necesario para la culminación del proceso:
                        Ajustado al itinerario del viaje.
                      </span>
                    </div>
                  </div>
                </div>
                <a href="cotizaciones.php">
                  <button class="mb-5 mb-md-0">contratar ahora</button>
                </a>
              </div>

              <div class="card two">
                <div class="trending">Recomendamos</div>
                <div class="top">
                  <div class="title">premium</div>
                  <div class="price-sec">
                    <span class="price">$1250</span>
                  </div>
                </div>

                <div class="card-padding">
                  <div class="details">
                    <div class="one">
                      <span>
                        Registro de empresa en EE. UU. (LLC o Corp): $1225
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>EIN (Tax Number):</span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Incluido
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>Operational Agreement:</span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Incluido
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>Saldo de apertura $25</span>
                    </div>
                    <hr />
                    <div class="one">
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        No requiere viajar a EE. UU. No se requiere visa de EE.
                        UU.
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Manager service (incluye 2 visitar al banco al mes)
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Tiempo necesario para la culminación del proceso:
                      </span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        28 días.
                      </p>
                    </div>
                    <a href="cotizaciones.php">
                      <button class="mb-5 mb-md-0">contratar ahora</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card three">
                <div class="top">
                  <div class="title">Premium Express</div>
                  <div class="price-sec">
                    <span class="price">$1500</span>
                  </div>
                </div>

                <div class="card-padding">
                  <div class="details">
                    <div class="one">
                      <span>
                        Registro de empresa en EE. UU. (LLC o Corp): $1475
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>EIN (Tax Number):</span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Incluido
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>Operational Agreement:</span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        Incluido
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>Saldo de apertura $25r</span>
                    </div>
                    <hr />
                    <div class="one">
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        No requiere viajar a EE. UU. No se requiere visa de EE.
                        UU.
                      </p>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Manager service (incluye 2 visitar al banco al mes)
                      </span>
                    </div>
                    <hr />
                    <div class="one">
                      <span>
                        Tiempo necesario para la culminación del proceso:
                      </span>
                      <p>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-check"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          stroke-width="1"
                          stroke="#2db94d"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        >
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M5 12l5 5l10 -10" />
                        </svg>
                        10 días.
                      </p>
                    </div>
                    <a href="cotizaciones.php">
                      <button class="mb-5 mb-md-0">contratar ahora</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="contenedor p-100">
        <div class="text-center">
          <h2 class="text-center">Paquete Standard</h2>
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
        </div>

        <div class="paquete-standar">
          <div class="recaudos__registro">
            <h3>Recaudos para registro de LLC</h3>
            <p>(SOCIEDAD DE RESPONSABILIDAD LIMITADA)</p>
            <ul>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Nombre de compañía
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dirección principal de compañía en EE. UU.
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Nombre, dirección y título de la(s) persona(s) autorizada(s)
                para administrar la compañía.
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Pasaporte de la (s) persona(s) autorizada(s) para administrar la
                compañía.
              </li>
            </ul>
            <p class="text-center p-100 texto-rojo">
              El cliente deberá asumir los costos de traslado, alojamiento y
              servicios adicionales que pudiera requerir.
            </p>
          </div>

          <div class="recaudos__abrir">
            <h3>Recaudos para abrir la cuenta</h3>

            <ul>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dos referencias Bancarias (Del país donde reside o
                internacionales)
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dos referencias comerciales
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Foto de frente con fondo blanco, sosteniendo su pasaporte y, en
                una hoja blanca, la fecha de la foto, firma y el número del
                pasaporte. Esto con el propósito de resguardar la identidad del
                cliente.
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Copia de la cédula o documento de identidad
              </li>
            </ul>
            <p class="text-center p-100 texto-rojo">
              Requisito indispensable: Viajar y tener visa de EE. UU. o algún
              socio o familiar que resida en EE.UU.
            </p>
          </div>
        </div>
      </section>

      <section class="contenedor paquete-standar__imagen p-100">
        <h3>Paquetes Standard:</h3>
        <p>
          Tiempo para culminación del proceso
          <br />
          (ajustado al itinerario del viaje)
        </p>

       
        <picture>
              <source srcset="./src/img/Atenea-26.png"
          alt="imagen paquete"
          class="img-fluid" type="image/webp"/>
              <img
          loading="lazy"
          src="./src/img/Atenea-26.png"
          alt="imagen paquete"
          class="img-fluid"
        />
            </picture>
      </section>

      <section class="p-100 contenedor">
        <div class="text-center">
          <h2 class="text-center">Paquetes Premium y Premium Express</h2>
        
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
        </div>
        <div class="paquete-premium">
          <div class="recaudos__registro">
            <h3>Recaudos para registro de LLC</h3>
            <p>(SOCIEDAD DE RESPONSABILIDAD LIMITADA)</p>
            <ul>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Nombre de compañía
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dirección principal de compañía en EE. UU (En caso de ser
                suministrada por el cliente. De lo contrario, su asignación
                corres
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Pasaporte de los accionistas
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                No se requiere visa de EE. UU
              </li>
            </ul>
          </div>

          <div class="recaudos__abrir">
            <h3>Recaudos para abrir la cuenta</h3>

            <ul>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dos referencias Bancarias (Del país donde reside o
                internacionales)
              </li>
              <li class="mr-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-check"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="#6db1e4"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l5 5l10 -10" />
                </svg>
                Dos referencias comerciales.
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="contenedor paquete-premium__imagen p-100">
        <h3>Paquetes Premium y Premium Express</h3>
        <p>
          Tiempo estimado premium: 28 días
          <br />
          Premium express: 10 días
        </p>

       
        <picture>
              <source srcset="./src/img/Atenea-27.png" alt="imagen paquete" type="image/webp"/>
              <img loading="lazy" src="./src/img/Atenea-27.png" alt="imagen paquete" />
            </picture>
      </section>

      <section class="contenedor p-100">
        <div class="text-center">
          <h2 class="text-center">Características de cuentas bancarias</h2>
         
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

        
          <picture>
              <source srcset="./src/img/caracteristicas.png"
            alt="caracteristicas" type="image/webp"/>
              <img
            loading="lazy"
            class="mt-5"
            src="./src/img/caracteristicas.png"
            alt="caracteristicas"
          />
            </picture>
        </div>
      </section>

      <section class="banner p-100">
        <div class="contenido-banner">
          <h2>CREAMOS SOLUCIONES GLOBALES</h2>
          <a href="nuestros-servicios.php" class="boton">Nuestros Servicios</a>
        </div>
      </section>

      <section class="contenedor p-100">
        <div class="text-center">
          <h2 class="mb-5">Preguntas frecuentes</h2>
        </div>
        <div class="accordion">
          <input type="checkbox" id="item1" name="accordion1" />

          <label for="item1">
            <span class="numeros mr-lg-5 mr-0">01.</span>
            ¿Se requiere tener visa estadounidense como requisito indispensable?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content1" class="item">
            <p>
              No. Solo la requiere en caso de adquirir el Paquete de Servicios
              Standard y no disponer de algún socio o familiar que resida
              legalmente en EE. UU.
            </p>
          </div>

          <input type="checkbox" id="item2" name="accordion1" />

          <label for="item2">
            <span class="numeros mr-lg-5 mr-0">02.</span>
            ¿El pasaporte y la visa de EE. UU. deben estar vigentes??
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content2" class="item">
            <p>
              No es necesario que estos documentos estén vigentes para adquirir
              nuestros Paquetes de Servicios Premium y Premium Express.
            </p>
          </div>

          <input type="checkbox" id="item3" name="accordion1" />

          <label for="item3">
            <span class="numeros mr-lg-5 mr-0">03.</span>
            ¿Cuántos accionistas debe tener la compañía? ¿Alguno debe ser
            ciudadano estadounidense?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content3" class="item">
            <p>
              La compañía puede ser constituida con un solo accionista. Gracias
              a nuestros servicios, no es necesario que este sea ciudadano o
              residente de EE. UU.
            </p>
            <p>
              En caso de que decida incorporar accionistas, sean
              estadounidenses, residentes legales en EE. UU. o extranjeros,
              recomendamos realizar una evaluación inicial que le permita
              seleccionar el Paquete de Servicios ajustado a sus necesidades.
            </p>
          </div>

          <input type="checkbox" id="item4" name="accordion1" />

          <label for="item4">
            <span class="numeros mr-lg-5 mr-0">04.</span>
            ¿Se requiere algún documento notariado o apostillado en el país de
            residencia para poder realizar el proceso a distancia?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content4" class="item">
            <p>
              No se requiere ningún documento notariado o apostillado. Todo el
              proceso se realiza de forma digital, a través de los mecanismos
              que ofrece el Departamento de Estado de Florida y los organismos
              correspondientes, lo que garantiza la validez y seguridad del
              proceso.
            </p>
          </div>
          <input type="checkbox" id="item5" name="accordion1" />

          <label for="item5">
            <span class="numeros mr-lg-5 mr-0">05.</span>
            ¿Si registro una LLC en EE. UU. tendré que declarar impuestos en ese
            país?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content5" class="item">
            <p>Depende de cada caso en particular.</p>
          </div>

          <input type="checkbox" id="item6" name="accordion1" />

          <label for="item6">
            <span class="numeros mr-lg-5 mr-0">06.</span>
            ¿Con cuáles bancos trabajan? ¿Qué tipo de cuenta puedo abrir?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content6" class="item">
            <p>
              Nuestros operadores bancarios recomendados son Bank of America y
              Chase Bank, debido a la eficacia de sus servicios, rapidez en la
              atención al cliente y por estar ubicados entre los 10 mejores
              bancos de EE. UU. Nuestra recomendación es optar por una Checking
              Account (Cuenta corriente), al momento de abrir la cuenta para su
              compañía.
            </p>
          </div>

          <input type="checkbox" id="item7" name="accordion1" />

          <label for="item7">
            <span class="numeros mr-lg-5 mr-0">07.</span>
            ¿Qué recibiré, una vez que la entidad bancaria envíe la confirmación
            de la cuenta de mi compañía?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content7" class="item">
            <p>
              Lo primero que recibirá serán sus datos bancarios con su pin
              provisional. Al mismo tiempo, el banco enviará por correo postal,
              el pin de su tarjeta de débito. Posteriormente, recibirá la
              contraseña de acceso al sistema de banca en línea.
            </p>
          </div>

          <input type="checkbox" id="item8" name="accordion1" />

          <label for="item8">
            <span class="numeros mr-lg-5 mr-0">08.</span>
            ¿A partir de qué momento tengo acceso a la plataforma de
            transferencia de fondos Zelle?
            <br />
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ¿Requeriré
            un token u otro dispositivo de seguridad adicional para realizar
            transacciones?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content8" class="item">
            <p>
              Una vez que reciba los datos de su cuenta bancaria y los datos
              necesarios para acceder al sistema de banca en línea, podrá
              registrar su cuenta y hacer uso de la plataforma Zelle. Bank of
              America y Chase Bank no utilizan dispositivos de autenticación,
              por lo que podrá configurar el servicio de banca en línea para
              recibir cualquier código de validación, a través de su correo
              electrónico.
            </p>
          </div>
          <input type="checkbox" id="item9" name="accordion1" />

          <label for="item9">
            <span class="numeros mr-lg-5 mr-0">09.</span>
            ¿Cuál es el monto mínimo para abrir 9.- la cuenta bancaria?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content9" class="item">
            <p>
              Recomendamos un monto mínimo de $25 para abrir la cuenta bancaria
              de su compañía.
            </p>
          </div>
          <input type="checkbox" id="item10" name="accordion1" />

          <label for="item10">
            <span class="numeros mr-lg-5 mr-0">10.</span>
            ¿Cuál es el monto mensual por mantenimiento de cuenta? ¿Se puede
            evitar el costo de mantenimiento de cuenta?
            <i class="fa fa-chevron-down"></i>
          </label>

          <div id="content10" class="item">
            <p>
              Este monto depende de la entidad bancaria. El monto mínimo por
              mantenimiento de cuentas corporativas en el Bank of America,
              oscila entre los $12 - $29,95 mensuales. Las entidades bancarias
              suelen ofrecer exenciones del monto de mantenimiento mensual de
              cuentas cuando el cliente cumple alguno de los siguientes
              requisitos: (I)-Un monto específico referido al saldo en cortes
              diarios en cuenta. (II)-Un monto específico en depósitos directos
              mensuales en cuenta. (III)-Mantener un monto determinado en
              depósitos o inversiones, a través de otras cuentas en la entidad
              bancaria. Los montos específicos dependen del banco
            </p>
          </div>
        </div>
      </section>
    </main>

    <?php 
    require("./layout/footer.php");
    ?>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script src="/js/app.js"></script>
  </body>
</html>
