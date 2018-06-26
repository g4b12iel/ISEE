<?php
	//para nuestro equipo
	$teamName[0] = 'Jennifer';
	$teamName[1] = 'Johne Doe';
	$teamName[2] = 'Christean';
	$teamName[3] = 'Kerinele rase';

	$teamCharge[0] = 'Diseñadora';
	$teamCharge[1] = 'Programador';
	$teamCharge[2] = 'CEO';
	$teamCharge[3] = 'Gerente';
?>
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
						for ($i=0; $i<sizeOf($teamName); $i++) {
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