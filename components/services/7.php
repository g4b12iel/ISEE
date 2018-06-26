<?php
  //esto se puede immplementar con bases de datos luego
  $filterImage= [5, 4, 1, 2, 3, 3, 4, 5, 5, 5, 1, 4, 3, 4, 5, 3, 4, 3, 1, 3, 1, 4, 3, 4, 5, 2, 5, 3, 4, 2, 2, 3, 1, 2, 4, 3, 5, 2, 3, 4, 2, 4, 3, 5, 2, 2, 2, 1, 5, 3, 3, 1, 1, 1, 5, 1, 2, 4,1];

?>

<section id="content">
		<div class="container content">		
        <div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>P&aacute;ginas Web en servidor</h3>
                  <p>Una p&aacute;gina en Internet debe almacenarse en un servidor que cumpla con una serie de requerimientos m&iacute;nimos, ISE&E SRL le ofrece la funcionalidad de su infraestructura de alojamiento.
                  Alojamiento de sitios Web (Hosting),creaci&oacute;n y administraci&oacute;n de correos externos.</p>
								</div>  
							</div>
					</div> 

        <section id="gallery-1" class="content-block section-wrapper gallery-1">

			<div class="editContent">
	            <ul class="filter">            
	                <li class="active"><a href="#" data-filter="*">Todos</a></li>
	                <li><a href="#" data-filter=".filter1">Para empresa</a></li>
	                <li><a href="#" data-filter=".filter2">Creativos</a></li>
	                <li><a href="#" data-filter=".filter3">Naturalaleza</a></li>
	                <li><a href="#" data-filter=".filter4">Pyme</a></li>
	                <li><a href="#" data-filter=".filter5">Compañia</a></li>
	            </ul>
			</div>
            <!-- /.gallery-filter -->
            <div class="row">
                <div id="isotope-gallery-container">
                  <?php
                    for ($i=1; $i<= 58; $i++) {
                      echo 
                     '<div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter'.$filterImage[$i].'">
                      <div class="gallery-item">
                          <div class="gallery-thumb">
                              <img src="img/plantilla/'.$i.'.jpg" class="img-responsive" alt="1st gallery Thumb">
                              <div class="image-overlay"></div>
                              <a href="img/plantilla/'.$i.'.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                              <a  class="gallery-link"><i class="fa fa-link"></i></a>
                          </div>
                          <div class="gallery-details">
                            <div class="editContent">
                                <h5>'.$i.' gallery Item</h5>
                            </div>
                            <div class="editContent">
                                <p>Descripción aqui.</p>
                            </div>
                          </div>
                      </div>
                      </div>'; 
                    }
                     
                  ?>
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter1 filter2">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/1.jpg" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/1.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>1st gallery Item</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->

                    <!-- /.gallery-item-wrapper -->
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter3 filter4">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/2.jpg" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/2.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>2nd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /.gallery-item-wrapper -->
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter5 filter1">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/3.jpg" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/3.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>3rd gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /.gallery-item-wrapper -->
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter2 filter3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/4.jpg" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/4.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>4th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /.gallery-item-wrapper -->
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter3">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/5.jpg" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/5.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>5th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /.gallery-item-wrapper -->
                    <!-- <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper filter1 filter2">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="img/works/6.jpg" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="img/works/6.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>6th gallery Item</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Nullam id dolor id nibh ultricies vehicula.</p>
                            	</div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>
                <!-- /.isotope-gallery-container -->
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->
  	<!-- End  -->			
    </div>
</section>