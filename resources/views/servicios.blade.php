@extends('template.master')
@section('contenido_central')

<!-- Masthead-->
<header class="masthead2">
	<div class="container">
		<div class="masthead2-heading text-uppercase">Servicios</div>
		<div class="masthead2-subheading">Tenemos una gran gama de soluciones para llevar al máximo el nivel tu compañia</div>
		
	</div>
</header>


<!-- ======= Servicios ======= -->
<section id="featured-members" class="featured-members">
	<div class="container">

		<div class="row content">
			<div class="col-lg-6">
				<img src="{!! asset('estilo/assets/img/work.jpg')!!}" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-3 pt-lg-0">
				<h3>Servicios en Turing-IA</h3>
				<p class="fst-italic">
					Proporcionamos a nuestros clientes una gama de productos y servicios relacionados con el analisis de datos, mediante el uso de tecnologias como Tableau, Salesforce, PMI, Scrum.
				</p>
				<h3>Expertos en</h3>
				<ul>
					<li><i class="fas fa-check"></i> Tableau</li>
					<li><i class="fas fa-check"></i> Business Intelligence.</li>
					<li><i class="fas fa-check"></i> Business Analyst</li>
					<li><i class="fas fa-check"></i> Data Analyst</li>
					<li><i class="fas fa-check"></i> Machine Learning</li>
					<li><i class="fas fa-check"></i> Inteligencia Artificial</li>
				</ul>
			</div>
		</div>

		<div class="row content">
			<div class="col-lg-6 order-1 order-lg-2">
				<img src="{!! asset('estilo/assets/img/equipo.png')!!}" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 order-2 order-lg-1 pt-3 pt-lg-0">
				<h3>Implementación de Proyectos (Business Analyst)</h3>
				<p >
					Nuestra metodología de servicios se encuentra orientada en los estándares del Project Management Institute (PMI) ® e International Project Management Association (IPMA). Esto nos permite contar con las competencias para coordinar equipos de trabajo en el inicio, planeación, construcción, monitoreo y control de las actividades y recursos involucrados en un proyecto a partir de los objetivos y requerimientos de nuestro cliente.
				</p>
				
			</div>
		</div>

		<div class="row content">
			<div class="col-lg-6">
				<img src="{!! asset('estilo/assets/img/aplicaciones.jpg')!!}" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-3 pt-lg-0">
				<h3>DESARROLLO DE APLICACIONES</h3>
				<p>En un mundo moderno, con la cantidad de problemas y su complejidad cada vez es mayor, el desarrollo de aplicaciones, una herramienta para obtener soluciones precisas, dándole tareas repetitivas a la computadora y logrando así la "automatización" de procesos que todavía requieren la intervención de las personas en tareas repetitivas.</p>
				
			</div>
		</div>

		<div class="row content">
			<div class="col-lg-6 order-1 order-lg-2">
				<img src="{!! asset('estilo/assets/img/capacitacion.jpg')!!}" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 order-2 order-lg-1 pt-3 pt-lg-0">
				<h3>Capacitación</h3>
				<p class="fst-italic">
					Nuestra gama de cursos de Tableau incluye:
				</p>
				<ul>
					<li><i class="fas fa-check"></i> Tableau Prep Tableau</li>
					<li><i class="fas fa-check"></i> Desktop Visual Analytics</li>
					<li><i class="fas fa-check"></i> Tableau Server</li>
					<li><i class="fas fa-check"></i> Data Analyst</li>
					<li><i class="fas fa-check"></i> Machine Learning</li>
					<li><i class="fas fa-check"></i> Inteligencia Artificial</li>
				</ul>
				
			</div>
		</div>

	</div>
</section><!-- End Featured Members Section -->


@endsection()
