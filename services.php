<?php
    include("components/head_header.php");
    $service= 1;// valor por defecto
    $service=($_GET['service']); // importante para cargar las paginas
?>
<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php
						switch ($service) {
								case 1:
										echo '<h2 class="pageTitle">Integral en Computación</h2>';
										break;
								case 2:
										echo '<h2 class="pageTitle">Seguridad en redes</h2>';
										break;
								case 3:
										echo '<h2 class="pageTitle">Mantenimientos</h2>';
										break;
								case 4:
										echo '<h2 class="pageTitle">Telecomunicaciones</h2>';
										break;
								case 5:
										echo '<h2 class="pageTitle">Centro autorizado EPSON</h2>';
										break;
								case 6:
										echo '<h2 class="pageTitle">Capacitación a clientes</h2>';
										break;
								case 7:
										echo '<h2 class="pageTitle">Paginas web</h2>';
										break;		
								default:
										echo '<h2 class="pageTitle">Integral en Computación</h2>';
						}
				?>
			</div>
		</div>
	</div>
	</section>
    <?php
        // este if por si el servicio es diferente del planeado 
        if($service < 0 || $service > 7){
            $service=1;
        }    
        include('components/services/'.$service.'.php');
    ?>
<?php
	include("components/javascript_footer.php");
?>