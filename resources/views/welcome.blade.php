@extends('template.master')
@section('contenido_central')





<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Bienvenidos</div>
        <div class="masthead-heading text-uppercase">Turing-IA</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="acc_servicios">¿QUÉ REALIZAMOS?</a>
    </div>
</header>

<div class="ml-12">
    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
        <br/>
    </div>
</div>


<!-- Abrir BD-->
<div class="container px-5">
    <div class="row gx-5 justify-content-start">
        <div class="col-xl-12">
            
            <a class="btn btn-secondary  text-uppercase" href="departments">Departments Base de Datos</a>
        </div>
    </div>
</div>
<!-- QUE REALIZAMOS-->
<div class="container px-5">
    <div class="row gx-5 justify-content-start">
        <div class="col-xl-12">
            <div class="h1 fs-1 text-titulos mb-4">Contribuimos con su empresa para mejorar la toma de decisiones a través de sus datos.</div>
            <a class="btn btn-secondary  text-uppercase" href="#">Más Información</a>

        </div>
    </div>
</div>



<!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-0">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">LA MANERA IDEAL PARA MANEJAR TUS DATOS</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Somos una empresa Consultora de Big Data en México, desde hace 13 años proporcionamos servicios en Business Analytics mediante Knowledge Discovery in Database (KDD).</p>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{!! asset('estilo/assets/img/cdmxnoche.png')!!}" alt="..." /></div>
                    </div>
                </div>
            </div>
        </section>

<!-- TECNOLOGIAS QUE UTILIZAMOS-->




<p>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">  
                <a class="nav-link" href="#">TECNOLOGIAS QUE UTILIZAMOS</a>
            </div>

        </div>
    </div>
</p>


<div class="py-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{!! asset('estilo/assets/img/logos/tableau_logo.png')!!}" alt="..."  /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{!! asset('estilo/assets/img/logos/salesforce.png')!!}" alt="..."  /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{!! asset('estilo/assets/img/logos/pmi.png')!!}" alt="..."  /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="{!! asset('estilo/assets/img/logos/scrum.svg')!!}" alt="..."  /></a>
            </div>
        </div>
    </div>
</div>

<!-- LO QUE TE OFRECEMOS-->

<div class="container px-4 px-lg-5">
    <div class="content-section-heading text-center">
        <h2 class="mb-5">LO QUE TE OFRECEMOS</h2>
    </div>
    <div class="row gx-0">
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">IMPLEMENTACIÓN DE PROYECTOS (BUSINESS ANALYST)</h4>

                        <p class="mb-0">Nuestra metodología de servicios se encuentra orientada en los estándares del Project Management Institute (PMI) ® e International Project Management Association (IPMA)</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/equipo.png')!!}" alt="..." />
            </a>
        </div>
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">DESARROLLO DE APLICACIONES</h4>

                        <p class="mb-0">En un mundo moderno, con la cantidad de problemas y su complejidad cada vez es mayor, el desarrollo de aplicaciones, una herramienta para obtener soluciones precisas.</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/aplicaciones.jpg')!!}" alt="..." />
            </a>
        </div>
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">CAPACITACIÓN</h4>

                        <p class="mb-0">Nuestra gama de cursos de Tableau incluye: Tableau Prep Tableau Desktop Visual Analytics Tableau Server Adicionalmente ofrecemos cursos sobre: Business Intelligence, Data Mining, Big Data, Data to Insight.</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/capacitacion.jpg')!!}" alt="..." />
            </a>
        </div>
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">WORKSHOP (BLUE PRINT)</h4>

                        <p class="mb-0">Su estrategia debe abarcar la gestión de personas, procesos y cambios, incluida la identificación de casos de uso comercial inmediatos, la definición de roles, responsabilidades, el establecimiento de medidas para evaluar el éxito y el impacto.</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/work.jpg')!!}" alt="..." />
            </a>
        </div>
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">VENTA DE SOFTWARE</h4>

                        <p class="mb-0">Nos dedicamos a la venta de licencias de software, podemos recomendarle los sistemas que de acuerdo a sus necesidades son más adecuados.</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/software.png')!!}" alt="..." />
            </a>
        </div>
        <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
                <div class="caption">
                    <div class="caption-content">
                        <h4 class="my-3">VENTA DE HARDWARE</h4>

                        <p class="mb-0">Trabajamos con los mejores proveedores de México y tenemos la capacidad de cubrir cualquier necesidad que tenga de hardware. Redes, computadoras, impresoras y accesorios.</p>
                    </div>
                </div>
                <img class="img-fluid" src="{!! asset('estilo/assets/img/hardware.jpg')!!}" alt="..." />
            </a>
        </div>
    </div>
</div>


 <!-- Contacto Mapa -->

<section id="contact-us" class="contact-us">
      <div class="container">

        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">  
                <a class="nav-link" href="{!! asset('acc_contacto') !!}">CONTÁCTANOS</a>
            </div>

        </div>
    </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.33735354652!2d-99.1738818855455!3d19.397824686904052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff6dbd8206fb%3A0x85504897333053ab!2sAv.%20Insurgentes%20Sur%20601%2C%20N%C3%A1poles%2C%20Benito%20Ju%C3%A1rez%2C%2003810%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1658449768024!5m2!1ses-419!2smx" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <h4>Ubicación:</h4>
                <p>Av. Insurgentes Sur 601,Nápoles, Benito Juárez, 03810 Ciudad de México, CDMX</p>
              </div>

              <div class="email">
                <i class="fas fa-mail-bulk"></i>
                <h4>Email:</h4>
                <p>contacto@turing-ia.com</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone-alt"></i>
                <h4>Llamanos:</h4>
                <p>+52 (722) 533-6638</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

        {!! Form::open(['url'=>'/enviar_correo','role'=>'form','enctype'=>'multipart/form-data']) !!}
        
        <div class="form-row">
          <div class="col-md-6 form-group">
            {!! Form::label ('destinatario','Para:',['class'=>'control-label']) !!}
            {!! Form::text ('destinatario',null,['placeholder'=>'Ingresa la dirección del Destino','required','class'=>'form-control'])!!}
          </div>
          <div class="col-md-6 form-group">
            {!! Form::label ('asunto','Asunto:',['class'=>'control-label']) !!}
            {!! Form::text ('asunto',null,['placeholder'=>'Asunto','required','class'=>'form-control'])!!}
          </div>
        </div>
        <div class="text-center ">
          {!! Form::label ('contenido_mail','Contenido:',['class'=>'control-label']) !!}
          {!! Form::textarea ('contenido_mail',null,['placeholder'=>'Contenido','required','class'=>'form-control'])!!}
        </div>
        <br />
        <div class="text-center">{!! Form::submit('Enviar Correo',['class'=>'btn btn-secondary'])!!}
        </div>
        {!! Form::Close()!!}
        <br />
        <br />

      </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->




@endsection()


