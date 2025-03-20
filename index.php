<?php include('header.php'); ?>

    <link rel="stylesheet" href="css/styles.css">
	<!--  SLIDER AUTOMATICO -->
	<div class="container-slider">
		<div id="Carousel" class="carousel slide" data-ride="carousel" data-interval="9000" data-pause="false">
			<div class="carousel-inner">
				<div class="item active">
					<div class="item-image" style="background: url(images/carrusel/1carrusel2.jpg) top right no-repeat; -webkit-background-size: cover; background-size: cover;"></div>
					<div class="carousel-caption d-none d-md-block">
						<h1><b>CRIPESO</b><br> Servicios de Consultoría<br/></h1>
                        <p> Es una empresa creada en el año 2013. Brindamos consultoría a empresas e instituciones privadas 
                            y públicas para garantizar el éxito en todas las esferas de tu organización. </p>
						<a href="about.php" class="btn btn-slider">Conócenos</a>
					</div>
				</div>
				<div class="item">
					<div class="item-image" style="background: url(images/carrusel/2carrusel2.jpg) top right no-repeat; -webkit-background-size: cover; background-size: cover;"></div>
					<div class="carousel-caption d-none d-md-block">
						<h1><b>CRIPESO</b><br> Servicios de Consultoría<br/></h1>
                        <p> Es una empresa creada en el año 2013. Brindamos consultoría a empresas e instituciones privadas 
                            y públicas para garantizar el éxito en todas las esferas de tu organización. </p>
						<a href="about.php" class="btn btn-slider">Conócenos</a>
					</div>
				</div>
	
				<div class="item">
					<div class="item-image" style="background: url(images/carrusel/2carrusel.jpg) top right no-repeat; -webkit-background-size: cover; background-size: cover;"></div>
					<div class="carousel-caption d-none d-md-block">
						<h1><b>CRIPESO</b><br> Servicios de Consultoría<br/></h1>
                        <p> Es una empresa creada en el año 2013. Brindamos consultoría a empresas e instituciones privadas 
                            y públicas para garantizar el éxito en todas las esferas de tu organización. </p>
						<a href="about.php" class="btn btn-slider">Conócenos</a>
					</div>
				</div>
			</div>
			<a class="carousel-control left" href="#Carousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control right" href="#Carousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>
	</div>

<!-- TERMINA SLIDER AUTOMATICO -->
	

	
	<!--- INICIA SECCION DE ICONOS -->
    <section class="icon-section">
        <div class="icon-item">
            <img src="images/iconos/1icon.PNG" alt="Preparación Inicial">
            <h3>PREPARACIÓN INICIAL</h3>
            <p>Primer contacto con nuestros clientes, diagnóstico preliminar, planeación del proyecto, propuesta de tareas, contrato.</p>
        </div>
        <div class="icon-item">
            <img src="images/iconos/2icon.PNG" alt="Diagnóstico y Plan de Acción">
            <h3>DIAGNÓSTICO Y PLAN DE ACCIÓN</h3>
            <p>Descubrir los hechos, análisis y síntesis, examen detallado del problema, elaborar soluciones, evaluar opciones, propuesta al cliente, planear la aplicación de medidas, identificar y proponer inversión.</p>
        </div>
        <div class="icon-item">
            <img src="images/iconos/3icon.PNG" alt="Implementación">
            <h3>IMPLEMENTACIÓN</h3>
            <p>Proceso en el que realizamos la implementación estratégica para alcanzar los objetivos y metas deseadas, así como las propuestas de ajustes y capacitación.</p>
        </div>
        <div class="icon-item">
            <img src="images/iconos/4icon.PNG" alt="Solución">
            <h3>SOLUCIÓN</h3>
            <p>Creemos el camino a seguir para dar un seguimiento efectivo, generamos la evaluación de resultados y reporte final sobre lo obtenido durante el desarrollo.</p>
        </div>
    </section>
	<!-- TERMINA SECCION DE ICONOS-->


	<!-- SECCION QUIENES SOMOS -->
	<div class="background-section">
        <div class="image"></div>
        <div class="text">
            <h2>QUIÉNES SOMOS</h2>
            <p>
                Las organizaciones de todo el mundo buscan la mejora continua, en este sentido, la innovación en esquemas organizacionales, la innovación en procesos de trabajo, la gobernanza y aprovechamiento de la información que se genera por el trabajo diario de una organización es fundamental para la acertada toma de decisiones, la generación de información primaria con sustento en metodologías y procesos robustos representará siempre una ventaja ante los competidores, el aprovechamiento de la información existente en medios digitales por medio del Big Data o el Machine Learning es parte de la revolución de los datos y de la digitalización de las organizaciones.
            </p>
            <p>
                Cripeso Servicios de Consultoría S.C. será su aliado que le ayudará a transformar su organización y crear un ecosistema de alto rendimiento en su equipo de trabajo y la forma de aprovechar la información para obtener los objetivos que persigue.
            </p>
        </div>
    </div>
	<!-- TERMINA SECCION QUIENES SOMOS -->

 
	<!-- INICIA SECCION NUESTROS SERVICIOS -->
	<div class="services-section">
        <div class="services-background">
            <svg preserveAspectRatio="xMidYMid slice" viewBox="10 10 80 80">
                <defs>
                    <style>
                        @keyframes rotate {
                            0% {
                                transform: rotate(0deg);
                            }
                            100% {
                                transform: rotate(360deg);
                            }
                        }
                        .out-top {
                            animation: rotate 20s linear infinite;
                            transform-origin: 13px 25px;
                        }
                        .in-top {
                            animation: rotate 10s linear infinite;
                            transform-origin: 13px 25px;
                        }
                        .out-bottom {
                            animation: rotate 25s linear infinite;
                            transform-origin: 84px 93px;
                        }
                        .in-bottom {
                            animation: rotate 15s linear infinite;
                            transform-origin: 84px 93px;
                        }
                    </style>
                </defs>
                <path fill="#8CBB27" class="out-top" d="M37-5C25.1-14.7,5.7-19.1-9.2-10-28.5,1.8-32.7,31.1-19.8,49c15.5,21.5,52.6,22,67.2,2.3C59.4,35,53.7,8.5,37-5Z"/>
                <path fill="#005096" class="in-top" d="M20.6,4.1C11.6,1.5-1.9,2.5-8,11.2-16.3,23.1-8.2,45.6,7.4,50S42.1,38.9,41,24.5C40.2,14.1,29.4,6.6,20.6,4.1Z"/>
                <path fill="#8CBB27" class="out-bottom" d="M105.9,48.6c-12.4-8.2-29.3-4.8-39.4.8-23.4,12.8-37.7,51.9-19.1,74.1s63.9,15.3,76-5.6c7.6-13.3,1.8-31.1-2.3-43.8C117.6,63.3,114.7,54.3,105.9,48.6Z"/>
                <path fill="#005096" class="in-bottom" d="M102,67.1c-9.6-6.1-22-3.1-29.5,2-15.4,10.7-19.6,37.5-7.6,47.8s35.9,3.9,44.5-12.5C115.5,92.6,113.9,74.6,102,67.1Z"/>
            </svg>
        </div>
        <h2>Nuestros Servicios</h2>
        <div class="services-container">
            <div class="service-card" style="background-image: url('images/servicios/1consumidores.jpg');">
                <div class="service-content" style="width:100%, text-align:center" data-width="100%">
                    <h3>Estudios sobre consumidores</h3>
                    <ul>
                        <li>Satisfacción al cliente</li>
                        <li>Perfil de consumidores</li>
                        <li>Percepción de marcas y productos</li>
                        <li>Segmentación de clientes</li>
                    </ul>
                </div>
            </div>
            <div class="service-card" style="background-image: url('images/servicios/1productos.jpg');">
                <div class="service-content">
                    <h3>Estudios sobre productos</h3>
                    <ul>
                        <li>Equidad de marca</li>
                        <li>Participación en el mercado</li>
                        <li>Introducción de nuevos productos</li>
                        <li>Lealtad de marca</li>
                    </ul>
                </div>
            </div>
            <div class="service-card" style="background-image: url('images/servicios/1datos.jpg');">
                <div class="service-content">
                    <h3>Ciencia de datos</h3>
                    <ul>
                        <li>Minería de datos y texto</li>
                        <li>Big Data</li>
                        <li>Web Scraping</li>
                        <li>Information Retrieval</li>
                        <li>Deep Learning</li>
                        <li>Procesamiento de lenguaje natural</li>
                    </ul>
                </div>
            </div>
            <div class="service-card" style="background-image: url('images/servicios/1medios.jpg');">
                <div class="service-content">
                    <h3>Medios digitales</h3>
                    <ul>
                        <li>Implementación de estructura de generación de contenidos</li>
                        <li>Automatización de Redes Sociales</li>
                        <li>Monetización de contenidos y audiencia</li>
                        <li>Monetización de redes sociales y aplicaciones de mensajería</li>
                    </ul>
                </div>
            </div>
            <div class="service-card" style="background-image: url('images/servicios/1electorales.jpg');">
                <div class="service-content">
                    <h3>Estudios Electorales</h3>
                    <ul>
                        <li>Encuestas pre electorales</li>
                        <li>Conteos rápidos</li>
                        <li>Encuestas de salida</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="services-button">
            <a href="services.php" class="btn btn-slider">Ver más</a>
        </div>
    </div>
    <!-- TERMINA SECCION NUESTROS SERVICIOS -->


    <!-- SECCION PUBLICACIONES -->
	<div class="background-section2">
        <div class="image"></div>
        <br><br>
        <div class="text">
            <h2>NUESTRAS PUBLICACIONES</h2>
            <div class="social-media">
                <div class="facebook-widget" style="width: 100%;">
                    <div class="fb-page" data-href="https://www.facebook.com/CRIPESO" data-tabs="timeline" data-width="500px" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- TERMINA SECCION PUBLICACIONES -->



    <!-- INICIA PEQUEÑA SECCION DE CONTACTO -->
	<div class="contact-section-home">
        <div class="contact-icon">
            <div class="cback">
                <div class="cback-circle fn1"></div>
                <div class="cback-circle fn2"></div>
                <div class="cback-circle cback-circle--phone">
                    <i class='phone-icon'></i>
                </div>
            </div>
        </div>
        <div class="contact-text">
            <h2>CONTÁCTANOS</h2>
            <p>Comunícate con nosotros ya que oportunamente responderemos a todas tus inquietudes: <span>449 555 1473</span></p>
        </div>
    </div>
    <!-- TERMINA PEQUEÑA SECCION DE CONTACTO -->
	
	
<?php include('footer.php'); ?>