@extends('template.master')
@section('contenido_central')

<!-- Masthead-->
<header class="masthead3">
	<div class="container">
		<div class="masthead3-heading text-uppercase">Nosotros</div>
		<div class="masthead3-subheading">Somos consultores de Big Data</div>
		
	</div>
</header>


<!-- Basic features section-->
<section class="bg-light">
	<div class="container px-0">
		<div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
			<div class="col-12 col-lg-5">
				<h2 class="display-4 lh-1 mb-4">Turing-IA, tu mejor opción</h2>
				<p class="lead fw-normal text-muted mb-5 mb-lg-0">Somos una empresa Consultora de Big Data en México, desde hace 13 años proporcionamos servicios en Business Analytics mediante Knowledge Discovery in Database (KDD). Somos un grupo de especialistas en proyectos de Business Analytics con más de 13 años de experiencia. realizando análisis descriptivos, predictivos y prescriptivos.</p>
			</div>
			<div class="col-sm-8 col-md-6">
				<div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="{!! asset('estilo/assets/img/nosotros.jpg')!!}" alt="..." /></div>
			</div>
		</div>
	</div>
</section>


<!-- ======= Members Section ======= -->
<section id="members" class="members">
	<div class="container">

		<div class="row">

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="member">
					<div class="member-img">
						<img src="{!! asset('estilo/assets/img/team/5.jpg')!!}" class="img-fluid" alt="">
						<div class="social">
							<a  href="https://api.whatsapp.com/send?phone=527225336638&text=Hola%21%20Quisiera%20más%20información." target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>

							<a  href="https://www.linkedin.com/company/turing-inteligencia-artificial/?originalSubdomain=mx" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>

							<a  href="https://www.instagram.com/ia_turing/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>

							<a  href="https://twitter.com/IaTuring" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>

							<a c href="https://www.facebook.com/Turing-Inteligencia-Artificial-106802521718296" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4>Persona 1</h4>
						<span>Certificados por (Tableau Plataform®)</span>
						<p>Ayudamos en la toma de decisiones en todos los niveles de la empresa, comprender mejor los resultados de negocio, anticiparse a ellos, darles forma mediante la identificación de tendencias, modelos estadísticos, anomalías; analizarlos, comparar los casos “what-if” y predecir las amenazas, oportunidades potenciales, así como planificar, presupuestar y prever los recursos</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="member">
					<div class="member-img">
						<img src="{!! asset('estilo/assets/img/team/4.jpg')!!}" class="img-fluid" alt="">
						<div class="social">
							<a  href="https://api.whatsapp.com/send?phone=527225336638&text=Hola%21%20Quisiera%20más%20información." target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>

							<a  href="https://www.linkedin.com/company/turing-inteligencia-artificial/?originalSubdomain=mx" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>

							<a  href="https://www.instagram.com/ia_turing/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>

							<a  href="https://twitter.com/IaTuring" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>

							<a c href="https://www.facebook.com/Turing-Inteligencia-Artificial-106802521718296" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4>Persona 2</h4>
						<span>SCRUM</span>
						<p>Profesionales con conocimientos y competencias acreditadas De todas las formas que existen para poder desarrollar software, únicamente de manera colaborativa es como se logra. Es por eso que aplicamos la metodología Scrum para llevar más allá tus objetivos</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="member">
					<div class="member-img">
						<img src="{!! asset('estilo/assets/img/team/5.jpg')!!}" class="img-fluid" alt="">
						<div class="social">
							<a  href="https://api.whatsapp.com/send?phone=527225336638&text=Hola%21%20Quisiera%20más%20información." target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>

							<a  href="https://www.linkedin.com/company/turing-inteligencia-artificial/?originalSubdomain=mx" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>

							<a  href="https://www.instagram.com/ia_turing/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>

							<a  href="https://twitter.com/IaTuring" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>

							<a c href="https://www.facebook.com/Turing-Inteligencia-Artificial-106802521718296" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>						</div>
					</div>
					<div class="member-info">
						<h4>Persona 3</h4>
						<span>Data Driven</span>
						<p>Tomamos decisiones estratégicas basadas en la interpretación y el análisis de datos. Es decir, se trata de ver la manera cómo se estructuran y organizan los datos con el fin de aplicarlos a su negocio y mejorar sus estrategias.</p>
					</div>
				</div>
			</div>

		</div>

	</div>
</section><!-- End Members Section -->

@endsection()
