<?php
include('db.php');

session_start();


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	
	<title>Libertador Hotels</title> 
	<link rel="stylesheet" href="./css/inicio.css">
	<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>  
<body>
	<header class="Libertador_hotels">
		<label class="nombreParte1">Libertador</label>
		<label class="nombreParte2">Hotels</label>
		<nav>
			<a class="menu" href="index.php">Inicio&nbsp;</a>
			<a class="menu" href="habitaciones.php">Habitaciones&nbsp;</a>
			<a class="menu" href="disponibilidad.php">Ver disponibilidad&nbsp;</a>
			<?php
                 if(isset($_SESSION['usuario'])){
            ?>
              <a class="menu" href="" style="border: 1px solid white; 
              border-radius: 25px; background: white; font-family: none; color: black;padding: 5px;
              font-weight: bolder;"><?php echo $_SESSION['usuario']?></a>
                 
                 <a class="menu" href="cerrarSesion.php"><img src="imagenes/CerrarSesion2.png"></a>
                 <?php }else{ ?>
                 	<a class="menu" href="login.php">Iniciar sesión</a>
                 <?php } ?>
		</nav>
    </header>
    <main>
    	<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Libertador Hotels</h4>
									<h3>Sabemos lo que amas</h3>
										<p>Bienvenido a nuestros hoteles
</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más
</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>AMANECER</h4>
									<h3>Quédate con amigos y familias</h3>
										<p>Ven y disfruta un momento precioso con nosotros</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>AMANECER</h4>
								<h3>wquiero unas vacaciones lujosas?</h3>
										<p>Obtenga alojamiento hoy</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">leer más</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Libertador
  <span>Hotels</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>Sabemos lo que amas</h5>
										<p>Ofrecer a los huéspedes vistas únicas y encantadoras desde sus habitaciones con sus comodidades excepcionales, hace que Star Hotel sea uno de los mejores en su tipo. Pruebe nuestro menú de comida, servicios increíbles y un personal amable mientras esté aquí..</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
    	<section>
    		<!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">Qué otros visitantes experimentaron
</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
								<h5>Julia Rose</h5>
								<p>Alemania</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel </p>
								<h5>Jahnatan Smith</h5>
								<p>Estados Unidos
</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
						Vale la pena volver

								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel . </p>
								<h5>Rosalind Cloer</h5>
								<p>Italia</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
	Vale la pena volver
								</h4>
								<p>es fascinantes y divertido pase momentos agradables de mis vaciones en este hotel. </p>
								<h5>Amie Bublitz</h5>
								<p>Suiza</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->
<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Horarios de Atención
</h4>
			<p class="contact-agile1"><strong>Lunes a viernes :</strong> 6:30am a 11:30pm</p>
			<p class="contact-agile1"><strong>Sábados :</strong> 6:30am a 10pm</p>
				<div>
					
				</div>
				
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Contáctenos
</h4>
			<p class="contact-agile1"><strong>Teléfono :</strong> 73445624 &nbsp;&nbsp;<strong>WhatsApp :</strong> 987 857 450</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:tusolutionweb@gmail.com">libertadorhotels@gmail.com</a></p>
			<p class="contact-agile1"><strong>Direccion :</strong> Lima, San Isidro</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62419.27796184226!2d-77.06922789617187!3d-12.09812265679767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c842bd2342fb%3A0x7e3183f45f461207!2sSan%20Isidro!5e0!3m2!1ses!2spe!4v1652242250789!5m2!1ses!2spe"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<!-- /contact -->
			<div class="copy">
		        <p>Libertador <label style="color: yellow;">Hotels </label> 2022 </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </main>
    <footer></footer>
</body>
</html>