<!DOCTYPE html>
<html lang="en">
<?php
require("./layout/header.php");

?>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light pb-md-0">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <picture>
              <source srcset="./src/icons/Logo Atenea 1.svg" alt="logo" type="image/webp"/>
               <img src="./src/icons/Logo Atenea 1.svg" class="logo" alt="logo" />
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
              <li class="nav-item active">
                <a class="nav-link" href="./index.php"
                  >Inicio <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./nuestros-servicios.php"
                  >Nuestros Servicios</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./cotizaciones.php">Cotizaciones</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section class="hero">
      <div class="contenedor contenido-hero">
        <h1>
          Constituya su empresa <br />
          <span class="line">en ee.uu.</span><br />
          <span class="fondo-azul">y obtenga zelle</span>
        </h1>
        <a class="boton" href="./cotizaciones.php ">Cotizar</a>
      </div>
    </section>

    <main class="p-100 bg-secundario">
      <div class="contenedor">
        <div class="cotiza-ahora">
          <h2 class="texto-principal text-center text-md-left">
            ¿Quiénes Somos?<br />
            <picture>
              <source srcset="./src/icons/Logo Atenea 1.svg" alt="logo" type="image/webp"/>
               <img loading='lazy'
              src="./src/icons/Linea 2.svg"
              class="decorador-left pb-5"
              alt="linea"
            />
            </picture>
            
          </h2>
          <a
            href="https://api.whatsapp.com/send?phone=+584141355691"
            class="boton fixed"
            target="_blank"
            ><svg
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
            ¡Cotiza Ahora!</a
          >
        </div>

        <div class="quienes-somos">
          <div class="quienes-somos__texto">
            <p class="mb-5">
              <span class="bold">ATENEA GLOBAL SERVICES</span>, es una empresa
              conformada por un equipo de profesionales con más de
              <span class="bold">30 años de experiencia</span>, en las áreas de
              finanzas, práctica jurídica y gerencia de riesgos y seguros.
            </p>

            <p class="mb-5">
              Adicionalmente, la empresa cuenta con un equipo de profesionales
              multidisciplinarios, dedicados a la
              <span class="bold">consultoría empresarial</span> en las áreas
              <span class="bold">administrativa, contable y jurídica.</span>
            </p>

            <p>
              <span class="bold"
                >ATENEA ofrece servicios globales a emprendedores y medianos
                empresarios,</span
              >
              con el propósito de facilitar su gestión.
            </p>

            <p>
              Brindamos servicios eficientes y confiables, atención
              personalizada y acompañamiento continuo para apoyarle a lograr el
              <span class="bold">éxito de sus proyectos.</span>
            </p>
          </div>
          <div class="quienes-somos__imagen">
           
            <picture>
              <source srcset="./src/img/Quiénes Somos 1.png"
              alt="Quienes somos"
              class="img-fluid" type="image/webp"/>
              <img loading='lazy'
              src="./src/img/Quiénes Somos 1.png"
              alt="Quienes somos"
              class="img-fluid"
            />
            </picture>
          </div>
        </div>
      </div>
    </main>

    <section class="contenedor text-center p-100">
      <h2 class="titulos">
        NUESTRO EQUIPO HA BRINDADO SERVICIOS <br />
        A ORGANIZACIONES COMO:
      </h2>
     
      <picture>
              <source srcset="./src/icons/Linea (centro).svg" alt="linea" type="image/webp"/>
              <img src="./src/icons/Linea (centro).svg" alt="linea" class="decorador" />
            </picture>
      <div class="servicios">
        <div class="servicio">
          <a href="https://tusambil.com/" target="_blank">
            <picture>
              <source srcset="./src/img/sambil.png"
              alt="sambil"
              class="servicio__imagen" type="image/webp"/>
              <img loading='lazy'
              src="./src/img/sambil.png"
              alt="sambil"
              class="servicio__imagen"
            />
            </picture>
          </a>
        </div>
        <div class="servicio">
          <a href="https://www.grupoamper.com/" target="_blank">
            
            <picture>
              <source srcset="./src/img/amper.png"
              alt="amper"
              class="servicio__imagen" type="image/webp"/>
              <img loading='lazy'
              src="./src/img/amper.png"
              alt="amper"
              class="servicio__imagen"
            />
            </picture>
          </a>
        </div>
        <div class="servicio">
          <a href="https://www.mastercard.co.ve/es-ve.html" target="_blank">
            <picture>
              <source srcset="./src/img/mastercard.png"
              alt="mastercard"
              class="servicio__imagen"type="image/webp"/>
              <img loading='lazy'
              src="./src/img/mastercard.png"
              alt="mastercard"
              class="servicio__imagen"
            />
            </picture>
          </a>
        </div>
        <div class="servicio">
          <a href="https://casiolandia.com/" target="_blank">
            <picture>
              <source srcset="./src/img/casiolandia.png"
              alt="casiolandia"
              class="servicio__imagen"type="image/webp"/>
              <img loading='lazy'
              src="./src/img/casiolandia.png"
              alt="casiolandia"
              class="servicio__imagen"
            />
            </picture>
          </a>
        </div>
        <div class="servicio">
          <a href="https://mmc.com" target="_blank">
          
            <picture>
              <source srcset="./src/img/marsh.png"
              alt="marsh"
              class="servicio__imagen" type="image/webp"/>
              <img loading='lazy'
              src="./src/img/marsh.png"
              alt="marsh"
              class="servicio__imagen"
            />
            </picture>
          </a>
        </div>
        <div class="servicio">
          <a href="https://home.panatech.io/landing" target="_blank">
            <picture>
              <source srcset="./src/img/pana.png" alt="pana" class="servicio__imagen" type="image/webp"/>
              <img loading='lazy' src="./src/img/pana.png" alt="pana" class="servicio__imagen" />
            </picture>
          </a>
        </div>
      </div>
      <div class="imagen-flotada">
        <picture>
              <source srcset="./src/img/Atenea-03.png"
          class="float-right plant"
          alt="imagen" type="image/webp"/>
              <img  loading='lazy'
          src="./src/img/Atenea-03.png"
          class="float-right plant"
          alt="imagen"
        />
            </picture>
      </div>
    </section>

    <section class="bg-primario p-100">
      <div class="contenedor text-center">
        <h2 class="titulos">
          DECENAS DE CLIENTES TIENEN PRESENCIA FINANCIERA <br />
          EN ESTADOS UNIDOS, GRACIAS A NUESTROS SERVICIOS:
        </h2>

        <div class="clientes">
          <div class="cliente">
            <div class="cliente__imagen pb-5">
              <picture>
              <source srcset="./src/img/pana.png"
                alt="imagen pana"
                class="img-fluid" type="image/webp"/>
              <img  loading='lazy'
                src="./src/img/pana.png"
                alt="imagen pana"
                class="img-fluid"
              />
            </picture>
            </div>
            <p>
              “Excelente servicio. Gracias a estas herramientas, logramos
              brindarles a nuestros clientes, medios de pago más eficientes”
            </p>
          </div>
          <div class="cliente">
            <div class="cliente__imagen pb-5">
              <picture>
              <source srcset="./src/img/licarch.png"
                alt="imagen licarch"
                class="img-fluid subir-tamaño" type="image/webp"/>
              <img  loading='lazy'
                src="./src/img/licarch.png"
                alt="imagen licarch"
                class="img-fluid subir-tamaño"
              />
            </picture>
            </div>
            <p>
              “Sin este esquema no hubiéramos logrado tener un zelle corporativo
              con el que poder manejar las transacciones”
            </p>
          </div>

          <div class="cliente">
            <div class="cliente__imagen pb-5">
              <picture>
              <source srcset="./src/img/alimentos.png"
                alt="imagen alimentos"
                class="img-fluid subir-tamaño" type="image/webp"/>
              <img  loading='lazy'
                src="./src/img/alimentos.png"
                alt="imagen alimentos"
                class="img-fluid subir-tamaño"
              />
            </picture>
            </div>
            <p>
              “Muy confiables y rápidos. Lograron solucionarnos los problemas
              que teníamos para manejar las transacciones a la hora de importar”
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container p-100">
      <div class="text-center">
        <h2 class="text-center">Nuestros servicios</h2>
        <img  loading='lazy'
          src="./src/icons/Linea (centro).svg"
          alt="linea"
          class="decorador"
        />

        <p class="pt-5">
          <span class="bold">ATENEA global services</span>, ofrece servicios de
          consultoría empresarial, orientados a satisfacer <br />
          los requerimientos de los clientes de forma global, en las siguientes
          áreas:
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 mt-5">
          <div class="list-group" id="list-tab" role="tablist">
            <a
              class="list-group-item list-group-item-action active"
              id="list-home-list"
              data-toggle="list"
              href="#list-home"
              role="tab"
              aria-controls="home"
              onclick="changeGerencial();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-22.png"
                alt="icono"
                class="iconos-list"
                id="icono-gerencial"
              />

              Empresarial</a
            >
            <a
              class="list-group-item list-group-item-action"
              id="list-profile-list"
              data-toggle="list"
              href="#list-profile"
              role="tab"
              aria-controls="profile"
              onclick="changeJuridico();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-14.png"
                alt="icono"
                class="iconos-list"
                id="icono-juridico"
              />Jurídica
            </a>
            <a
              class="list-group-item list-group-item-action"
              id="list-messages-list"
              data-toggle="list"
              href="#list-messages"
              role="tab"
              aria-controls="messages"
              onclick="changeAdmin();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-15.png"
                alt="icono"
                class="iconos-list"
                id="icono-admin"
              />Administrativa</a
            >
            <a
              class="list-group-item list-group-item-action"
              id="list-settings-list"
              data-toggle="list"
              href="#list-settings"
              role="tab"
              aria-controls="settings"
              onclick="changeContable();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-16.png"
                alt="icono"
                class="iconos-list"
                id="icono-contable"
              />Contable</a
            >

            <a
              class="list-group-item list-group-item-action"
              id="list-settings-list"
              data-toggle="list"
              href="#financieros"
              role="tab"
              aria-controls="settings"
              onclick="changeFinanciera();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-17.png"
                alt="icono"
                class="iconos-list"
                id="icono-financiera"
              />Seguros</a
            >

            <a
              class="list-group-item list-group-item-action"
              id="list-settings-list"
              data-toggle="list"
              href="#tramites"
              role="tab"
              aria-controls="settings"
              onclick="changeTramite();"
            >
              <img  loading='lazy'
                src="./src/img/Atenea-13.png"
                alt="icono"
                class="iconos-list"
                id="icono-tramite"
              />Trámites
            </a>
          </div>
        </div>
        <div class="col-md-6 mt-5 offset-md-2">
          <div class="tab-content" id="nav-tabContent">
            <div
              class="tab-pane fade show active"
              id="list-home"
              role="tabpanel"
              aria-labelledby="list-home-list"
            >
              <h2 class="list-title text-center text-md-left">Empresarial</h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal">Planes de Negocio.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Productos financieros nacionales e internacionales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Manuales administrativos organizacionales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Manuales de procedimientos.</span>
                </li>
              </ul>
            </div>
            <div
              class="tab-pane fade"
              id="list-profile"
              role="tabpanel"
              aria-labelledby="list-profile-list"
            >
              <h2 class="list-title text-center text-md-left">Jurídica</h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Asesoría y registro de empresas en Venezuela, EE. UU. y
                    República Dominicana.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Actas de asambleas.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Marcas y patentes.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Contratos mercantiles y laborales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Resolución de conflictos mercantiles, tributarios y
                    laborales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Planificación fiscal.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Sucesiones.</span>
                </li>
              </ul>
            </div>
            <div
              class="tab-pane fade"
              id="list-messages"
              role="tabpanel"
              aria-labelledby="list-messages-list"
            >
              <h2 class="list-title text-center text-md-left">
                Administrativa
              </h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal">Nómina.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Actualización mensual de los portales de entes
                    gubernamentales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Notificación o realización de pagos mensuales en los entes
                    gubernamentales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Liquidación de prestaciones sociales, cálculo de
                    utilidades, entre otros.</span
                  >
                </li>
              </ul>
            </div>
            <div
              class="tab-pane fade"
              id="list-settings"
              role="tabpanel"
              aria-labelledby="list-settings-list"
            >
              <h2 class="list-title text-center text-md-left">Contable</h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal">Contabilidad LLC.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Declaraciones de Impuestos anuales.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Contabilidad Local.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Declaración de IVA.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Declaración de ISLR anual.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal">Retenciones.</span>
                </li>
              </ul>
            </div>
            <div
              class="tab-pane fade"
              id="financieros"
              role="tabpanel"
              aria-labelledby="list-settings-list"
            >
              <h2 class="list-title text-center text-md-left">Seguros</h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal">Gerencia de riesgos.</span>
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Programas de seguros de salud, patrimoniales y
                    vehículos.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Evaluación y diagnóstico de coberturas, sumas aseguradas y
                    deducibles.</span
                  >
                </li>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Resolución de conflictos por pago de siniestros.
                  </span>
                </li>
              </ul>
            </div>

            <div
              class="tab-pane fade"
              id="tramites"
              role="tabpanel"
              aria-labelledby="list-settings-list"
            >
              <h2 class="list-title text-center text-md-left">Trámites</h2>
              <ul>
                <li class="mb-3">
                  <span class="texto-normal"
                    >Inscripciones en los entes gubernamentales:</span
                  >
                  <ul>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Instituto Venezolano de los Seguros
                        Sociales(IVSS).</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Fondo de Ahorro Obligatorio para la Vivienda
                        (FAOV).</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Instituto Nacional de Capacitación y Educación
                        Socialista (Inces).</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Ministerio del Poder Popular para el Proceso Social de
                        Trabajo (MPPPST).</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Licencia de Industria y Comercio.</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Servicio Autónomo de la Propiedad Intelectual
                        (SAPI).</span
                      >
                    </li>
                    <li class="mb-3">
                      <span class="texto-normal"
                        >Servicio Nacional de Contrataciones (RNC).</span
                      >
                    </li>
                  </ul>
                </li>

                <li class="mb-3">
                  <span class="texto-normal"
                    >Permisos ante los entes gubernamentales en general.</span
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="imagen-flotada">
          <img  loading='lazy'
            src="./src/img/Atenea-23.png"
            class="float-right boy"
            alt="imagen"
          />
        </div>
      </div>
    </section>

    <section class="banner">
      <div class="contenido-banner">
        <h2>CREAMOS SOLUCIONES GLOBALES</h2>
        <a href="./nuestros-servicios.php" class="boton">Nuestros Servicios</a>
      </div>
    </section>

    <section class="contacto p-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Contacto</h2>

            <p class="my-5">¡Agenda tu cita con nosotros!</p>

            <li class="pb-4">
             
              <picture>
              <source srcset="./src/img/Contacto-03.png" alt="telefono" class="tel" type="image/webp"/>
              <img  loading='lazy' src="./src/img/Contacto-03.png" alt="telefono" class="tel" />
            </picture>
              (+58) 414 135 56 91
            </li>

            <li>
            
              <picture>
              <source srcset="./src/img/Contacto-04.png" alt="correo" class="tel" type="image/webp"/>
              <img  loading='lazy' src="./src/img/Contacto-04.png" alt="correo" class="tel" />
            </picture>
              ateneaglobalservices@gmail.com
            </li>
            <picture>
              <source srcset="./src/img/Atenea-04.png"
              alt="imagen"
              class="girl d-none d-md-block" type="image/webp"/>
              <img  loading='lazy'
              src="./src/img/Atenea-04.png"
              alt="imagen"
              class="girl d-none d-md-block"
            />
            </picture>
          </div>
          <div class="col-md-5 offset-md-1">
            <form class="formulario-contacto needs-validation" action="correo.php" method="POST" id="form" novalidate>
              <h2 class="text-center formulario mb-5 blue">Formulario</h2>
              <div class="form-group pb-2">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  id="name"
                  name="name"
                  placeholder=" Nombre"
                  required
                />
                <div class="invalid-feedback">El nombre es obligatorio</div>
                <div class="valid-feedback">Correcto</div>
              </div>
              <div class="form-group pb-2">
                <input
                  type="tel"
                  class="form-control"
                  id="telefono"
                  name="telefono"
                  placeholder="Telefono"
                  required
                />
                <div class="invalid-feedback">El correo es obligatorio</div>
                <div class="valid-feedback">Correcto</div>
              </div>
              <div class="form-group pb-2">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder=" Correo"
                  required
                />
                <div class="invalid-feedback">El correo es obligatorio</div>
                <div class="valid-feedback">Correcto</div>
              </div>
              <div class="form-group">
                <textarea
                id="service"
                name="service"
                  class="form-control"
                  placeholder=" Por favor, envienos sus comentarios"
                  required
                ></textarea>
                <div class="invalid-feedback">El mensaje es obligatorio</div>
                <div class="valid-feedback">Correcto</div>
              </div>
              <div class="text-right">
                <input
                  type="submit"
                  class="btn px-4 py-2 btn-primary text-uppercase rounded-pill"
                  value="Enviar"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="mt-5 ml-md-5">
        <picture>
              <source srcset="./src/img/Atenea-03.png" class="plant" alt="imagen"type="image/webp"/>
              <img  loading='lazy' src="./src/img/Atenea-03.png" class="plant" alt="imagen" />
            </picture>
      </div>
    </section>

<?php 
    require("./layout/footer.php");
?>

</body>
</html>
