@extends('template.master')
@section('contenido_central')

<!-- Contacto Mapa -->

<section id="contact-us" class="contact-us">
  <div class="container">

    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-start">  
          <a class="nav-link" href="#">CONTÁCTANOS</a>
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