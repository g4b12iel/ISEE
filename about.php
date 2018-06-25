<?php
	include("components/head_header.php");
	//para el inicio
	$sizeOfInit = 5;
	$init[] = $sizeOfInit;
	$init[0] = 'Es una empresa formada integramente por profesionales y capitales bolivianos, dedicada a dar servicios, brindando a sus clientes soluciones tecnólogicas eficientes y de calidad.';
	$init[1] = 'Solidamente establecida como empresa de servicios: amplió su área de actividades a la provisión de equipos, enfocando soluciones completas.';
	$init[2] = 'Contamos con presencia en las ciudades de: Cochabamba, La Paz, Santa Cruz y Oruro.';
	$init[3] = '<strong>Misión</strong><br>Proveer soluciones tecnológicas de calidad, en las áreas de tecnología de información y telecominiaciones , alcanzando un alto grado de satisfación del cliente.';
	$init[4] = '<strong>Visión</strong><br>Ser la empresa boliviana integradora de mayor importancia en las áreas tecnológicas de nuestra competencia';
	
	//para porque elegirnos
	$sizeOfWhy = 5;
	$why[0] = 'Tenemos <strong>15 años</strong> de existencia';
	$why[1] = 'Contamos con un <strong>equipo profesional técnico</strong> de más de 40 a nivel nacional.';
	$why[2] = 'Una empresa dedica a la <strong>creatividad, inovación y espiritu de servicio</strong>.';
	$why[3] = 'Años de <strong>experiencia</strong> son los elementos de una fórmula de éxitos que avalan un trabajo pionero.<br><strong>Profesionalismo, calidad y liderazgo</strong> son los principales factores que se conjugan en el grupo humano.';
	$why[4] = 'Gracias a ese esfuerzo conjunto <strong>ISE&E</strong> a obtenido un lugar de privilegio en el escenario de la tecnología de información.'; 

	//para servicios
	$sizeOfServices = 7;
	$servicesTitle[] = $sizeOfServices;
	$servicesTitle[0] = 'Servicio por contrato y/o llamada';
	$servicesTitle[1] = 'Servicio técnico 24x7';
	$servicesTitle[2] = 'Asesoramiento informático';
	$servicesTitle[3] = 'Limpieza de virus';
	$servicesTitle[4] = 'Mantenimiento de software y hardware';
	$servicesTitle[5] = 'Servicio de redes';
	$servicesTitle[6] = 'Servicio de plataformas CAS EPSON';

	$servicesContent[] = $sizeOfServices;
	$servicesContent[0] = 'descripcion 1 aqui';
	$servicesContent[1] = 'descripcion 2 aqui';
	$servicesContent[2] = 'descripcion 3 aqui';
	$servicesContent[3] = 'descripcion 4 aqui';
	$servicesContent[4] = 'descripcion 5 aqui';
	$servicesContent[5] = 'descripcion 6 aqui';
	$servicesContent[6] = 'descripcion 7 aqui';

	//para experiencia
	$sizeOfExperience = 4;
	$experienceTitle[] = $sizeOfExperience;
	$experienceTitle[0] = 'Desarrollo de Software';
	$experienceTitle[1] = 'Servicio de hosting';
	$experienceTitle[2] = 'Experiencia de Usuario';
	$experienceTitle[3] = 'Desarrollo';
	$experiencePercentage[] = $sizeOfExperience;
	$experiencePercentage[0] = 40;
	$experiencePercentage[1] = 60;
	$experiencePercentage[2] = 80;
	$experiencePercentage[3] = 30;

	//para nuestro equipo
	$sizeOfTeam = 4;
	$teamName[] = $sizeOfTeam;
	$teamName[0] = 'Jennifer';
	$teamName[1] = 'Johne Doe';
	$teamName[2] = 'Christean';
	$teamName[3] = 'Kerinele rase';
	$teamCharge[] = $sizeOfTeam;
	$teamCharge[0] = 'Diseñadora';
	$teamCharge[1] = 'Programador';
	$teamCharge[2] = 'CEO';
	$teamCharge[3] = 'Gerente';
?>
<!-- end header -->
	<section id="inner-headline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="pageTitle">Quienes somos</h2>
				</div>
			</div>
		</div><!-- fin: container -->
	</section>

	<section id="content">
		<section class="section-padding">
			<div class="container">
				<div class="row showcase-section">
					<div class="col-md-6">
						<div class="about-text">
							<h3>ISE&E S.R.L.</h3>
							<?php
								for ($i = 0; $i<$sizeOfInit; $i++) {
									echo'<p>'.$init[$i].'</p>';
								}
							?>
						</div>
					</div>
					<div class="col-md-6">
						<img src="img/presentacion.jpg" alt="showcase image">
					</div>
				</div>
			</div><!-- fin: container -->
		</section>
		<div class="container">
			<div class="about">
				<div class="row">

					<div class="col-md-4">
						<!-- Heading and para -->
						<div class="block-heading-two">
							<h3><span>¿Por qué elegirnos?</span></h3>
						</div>
						<?php
							for ($i=0; $i<$sizeOfWhy; $i++) {
								echo '<p>'.$why[$i].'</p>';
							}
						?>
					</div>

					<div class="col-md-4">
						<div class="block-heading-two">
							<h3><span>Nuestros servicios</span></h3>
						</div>		
						<!-- Accordion starts -->
						<div class="panel-group" id="accordion-alt3">
							<!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
							<?php
								for ($i=0; $i<$sizeOfServices; $i++) {
									echo '<div class="panel"><!-- Panel heading -->
									<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapse'.$i.'-alt3">
										<i class="fa fa-angle-right"></i>'.$servicesTitle[$i].'
										</a>
									</h4>
									</div>
									<div id="collapse'.$i.'-alt3" class="panel-collapse collapse"><!-- Panel body -->
									<div class="panel-body">
										'.$servicesContent[$i].'
									</div>
									</div>
								</div>';
								}
							?>
						</div><!-- fin: panel-group -->
						<!-- Accordion ends -->	
					</div><!-- fin: col-md-4 -->

					<div class="col-md-4">
						<div class="block-heading-two">
							<h3><span>Nuestra Experiencia</span></h3>
						</div>	
						<?php
							for ($i=0; $i<$sizeOfExperience; $i++) {
								echo '<h6>'.$experienceTitle[$i].'</h6>
								<div class="progress pb-sm"><!-- White color (progress-bar-white) -->
									<div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="'.$experiencePercentage[$i].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$experiencePercentage[$i].'%">
										<span class="sr-only">'.$experiencePercentage[$i].'% Complete (success)</span>
									</div>
								</div>';
							}
						?>
					</div><!-- fin: col-md-4 -->
				</div>
				<br>
				<!-- Our Team starts -->
				<!-- Heading -->
				<div class="block-heading-six">
					<h4 class="bg-color">Nuestro Equipo</h4>
				</div>
				<br>
				<!-- Our team starts -->		
				<div class="team-six">
					<div class="row">
					<?php
						$count =1;
						for ($i=0; $i<$sizeOfTeam; $i++) {
							echo 
							'<div class="col-md-3 col-sm-6">
							<!-- Team Member -->
							<div class="team-member">
								<!-- Image -->
								<img class="img-responsive" src="img/team/'.$count.'.jpg" alt="">
								<!-- Name -->
								<h4>'.$teamName[$i].'</h4>
								<span class="deg">'.$teamCharge[$i].'</span> 
							</div>
							</div>';
							$count++;
						}
					?>
					</div>
				</div><!-- fin: team-six -->
				<!-- Our team ends -->
			</div>
		</div>
	</section><!-- content -->
<?php
	include("components/javascript_footer.php");
?>