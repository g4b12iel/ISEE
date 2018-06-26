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
				<h2 class="pageTitle">Servicios</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<div class="container content">		
        <!-- Service Blcoks -->
            <div class="row"> 
                <div class="col-md-12">
                    <div class="about-logo">
                        <h3>Servicio Integral en Computaci&oacute;n</h3>
                        <p>Somos una empresa seria y comprometida con sus clientes, brindamos los mejores servicios de calidad, contamos con mas de 15 años de existencia. <a href="contact.php">Contactenos y realize su consulta aqui.</a></p>
                    </div>  
                </div>
            </div>
						 
		<!-- <div class="row">
            <div class="skill-home"> <div class="skill-home-solid clearfix"> 
            
            <div class="col-md-3 text-center">
            <span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
            <h3>Diseño Web</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
            </div>
            <div class="col-md-3 text-center"> 
            <span class="icons c2"><i class="fa fa-users"></i></span> <div class="box-area">
            <h3>E-Commerce</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
            </div>
            <div class="col-md-3 text-center"> 
            <span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
            <h3>Calidad</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p></div>
            </div>

            <div class="col-md-3 text-center"> 
                <span class="icons c4"><i class="fa fa-globe"></i></span> 
                <div class="box-area">
                    <h3>Aplicaciones moviles</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                </div>
            </div>

            <div class="col-md-3 text-center"> 
                <span class="icons c4"><i class="fa fa-globe"></i></span> 
                <div class="box-area">
                    <h3>Aplicaciones moviles</h3> <p>Lorem ipsum dolor sitamet, consec tetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident</p>
                </div>
            </div>                

            </div></div>
		</div>  -->
		<!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-laptop"></i>
                <div class="info-blocks-in">
                    <h3>Equipos de computo</h3>
                    <p>Mantenimiento preventivo y correctivo a equipos de computo</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-print"></i>
                <div class="info-blocks-in">
                    <h3>Impresoras y perif&eacute;ricos</h3>
                    <p>Mantenimiento preventivo y correctivo a impresoras y perif&eacute;ricos</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Redes</h3>
                    <p>Soporte t&eacute;cnico y administraci&oacute;n de redes</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-desktop"></i>
                <div class="info-blocks-in">
                    <h3>Aplicaciones de escritorio</h3>
                    <p>Servicio de soporte on site en aplicaciones de escritorio</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-umbrella"></i>
                <div class="info-blocks-in">
                    <h3>Antivirus</h3>
                    <p>Servicio de Configuraci&oacute;n, Instalaci&oacute;n antivirus, antispyware, firewall, Troyanos, Spywares</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-table"></i>
                <div class="info-blocks-in">
                    <h3>Inventarios</h3>
                    <p>Inventarios y otros requerimientos especiales del cliente</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-signal"></i>
                <div class="info-blocks-in">
                    <h3>Escalamiento</h3>
                    <p>Escalamiento de equipos de computo</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-star-half-o"></i>
                <div class="info-blocks-in">
                    <h3>Hardware y Software</h3>
                    <p>Soluci&oacute;n a incidentes o requerimientos internos del cliente en Hardware y Software</p>
                </div>
            </div>

            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-check-square-o"></i>
                <div class="info-blocks-in">
                    <h3>Contratos de mantenimiento de redes</h3>
                    <p>Contratos de mantenimiento preventivo y correctivo a redes ya estructuradas</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks --> 
        <!-- Info Blcoks -->
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-truck"></i>
                <div class="info-blocks-in">
                    <h3>Disponibilidad</h3>
                    <p>Soluciones de alta disponibilidad</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-sitemap"></i>
                <div class="info-blocks-in">
                    <h3>An&aacute;lisis y modelado</h3>
                    <p>An&aacute;lisis y modelado de informaci&oacute;n</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Redes</h3>
                    <p>Dise&ntilde;o, Instalaci&oacute;n e Implementaci&oacute;n de redes en distintas plataformas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-star-o"></i>
                <div class="info-blocks-in">
                    <h3>LAN y WAN</h3>
                    <p>Dise&ntilde;o e Implementaci&oacute;n de redes LAN y WAN</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-globe"></i>
                <div class="info-blocks-in">
                    <h3>Dominios</h3>
                    <p>Administraci&oacute;n de Dominios sobre distintas plataformas</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Servidores</h3>
                    <p>Instalaci&oacute;n y Configuraci&oacute;n de servidores correos, antivirus, Proxys, web aplicaciones</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>DNS</h3>
                    <p>Configuraci&oacute;n DNS</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-html5"></i>
                <div class="info-blocks-in">
                    <h3>Sitios Web</h3>
                    <p>Administraci&oacute;n de sitios Web sobre distintas plataformas</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-hdd-o"></i>
                <div class="info-blocks-in">
                    <h3>Cableado estructurado</h3>
                    <p>Cableado estructurado</p>
                </div>
            </div>
        </div>
        <!-- End Info Blcoks -->
        <!-- <div class="row service-v1 margin-bottom-40">
            <div class="col-md-4 md-margin-bottom-40">
               <img class="img-responsive" src="img/service1.jpg" alt="">   
                <h3>Servicio Integral en Computaci&oacute;n</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="img/service2.jpg" alt="">            
                <h3>Consultor de fiar</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
            <div class="col-md-4 md-margin-bottom-40">
              <img class="img-responsive" src="img/service3.jpg" alt="">  
                <h3>Retroalimentación</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus</p>        
            </div>
        </div> -->
        <!-- End Service Blcoks -->   
    </div>
  </section>
<?php
	include("components/javascript_footer.php");
?>