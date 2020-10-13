<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital de Clínicas de Ananindeua</title>
	<!-- <link rel="shortcut icon" href="img/favicon.png" /> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<header>
		<div id="header-top" class="bg-light py-2 d-none d-md-block">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<img src="images/logo-hca.png" style="width: 188px" alt="LOGO HCA">
					</div>
					<div class="col-md-8 text-center">

						<ul class="list-box-icons">
						<!-- 	<li>
								<div class="box-icons-top">
									<div class="icon">
										<i class="far fa-clock"></i>
									</div>
									<div class="text">
										<p>PRONTO ATENDIMENTO ADULTO 24 HORAS</p>
									</div>
								</div>
							</li> -->
							<li>
								<div class="box-icons-top">
									<div class="icon">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="text">
										<p>(91) 3255-9001</p>
										<p>contato@hca.com.br</p>
									</div>
								</div>
							</li>
							<li>
								<div class="box-icons-top">
									<div class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="text">
										<p>Rua Dois de Junho, 650</p>
										<p>Águas Brancas - Ananindeua, PA</p>
									</div>
								</div>
							</li>
						</ul>		
					</div>
					<div class="col-md-2">
						<ul class="list-socials">
							<li>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-linkedin"></i>
								<i class="fab fa-instagram-square"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary_">
			<div class="container">
				<a class="navbar-brand" href="#"><img class="d-block d-md-none" src="images/logo-hca-pb.png" style="width: 100px" alt="LOGO HCA"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="main_nav">	
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link scroll" href="#header-top">Inicial</a></li>

						<li class="nav-item dropdown">
							<!-- <a class="nav-link scroll" href="#institucional">Institucional</a> -->
							<a class="nav-link dropdown-toggle" href="#" id="nd-inst" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HCA</a>
							<div class="dropdown-menu" aria-labelledby="nd-inst">
								<a class="dropdown-item" href="#sobre-nos">Sobre</a>
								<a class="dropdown-item" href="#futuras-instalacoes">Futuras Instalações</a>
								<a class="dropdown-item" href="#">Administração</a>
								<a class="dropdown-item" href="#">História</a>
								<a class="dropdown-item" href="#">Editais</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link scroll" href="#especialidades">Especialidades</a></li>
						<!-- <li class="nav-item"><a class="nav-link scroll" href="#corpo-clinico">Corpo Clínico</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link scroll" href="#maternidade">Maternidade</a></li> -->
						<!-- <li class="nav-item"><a class="nav-link scroll" href="#mulher">Mulher</a></li> -->
						<li class="nav-item"><a class="nav-link scroll" href="#convenios">Convênios</a></li>
						<li class="nav-item"><a class="nav-link " href="#exames">Exames</a></li>
						<li class="nav-item"><a class="nav-link " href="#agendamento">Agendamento</a></li>
						<li class="nav-item"><a class="nav-link scroll" href="#contato">Contato</a></li>
					</ul>
				</div> <!-- navbar-collapse.// -->
			</div> <!-- container.// -->
		</nav>
	</header>

	<div id="indicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#indicators" data-slide-to="0" class="active"></li>
			<li data-target="#indicators" data-slide-to="1"></li>
			<!-- <li data-target="#indicators" data-slide-to="2"></li> -->
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images/banner-carousel1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/banner-carousel2.jpg" alt="Second slide">
			</div>
		<!-- 	<div class="carousel-item">
				<img class="d-block w-100" src="images/bg-sliders-1.jpg" alt="Third slide">
			</div> -->
		</div>
		<a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- MENU-LIST-SERVICES -->
	<section>
		<ul class="list-fast-service">
			<li>
				<div class="box-service" style="background-color: #2196F3">
					<h3>PACIENTES E VISITANTES</h3>
					<p>Informações gerais sobre horários, internamentos, serviços e documentos necessários.</p>
					<button class="btn btn-outline-light">SAIBA MAIS</button>
				</div>
			</li>
			<li>
				<div class="box-service" style="background-color: #1E88E5">
					<h3>ESPECIALIDADES</h3>
					<p>Atendimento a diversas especialidades da medicina. Confira a lista e agende sua consulta.</p>
					<button class="btn btn-outline-light">CONSULTE</button>
				</div>
			</li>
			<li>
				<div class="box-service" style="background-color: #1976D2">
					<h3>CONVÊNIOS ACEITOS</h3>
					<p>Confira aqui a lista de convênios médicos com a qual o Hospital Sugisawa tem parceria.</p>
					<button class="btn btn-outline-light">INFORME-SE</button>
				</div>
			</li>
			<li>
				<div class="box-service" style="background-color: #1565C0">
					<h3>SAC</h3>
					<p>Não encontrou o que procurava em nosso site? Entre em contato e tire todas as suas dúvidas.</p>
					<button class="btn btn-outline-light">FALE CONOSCO</button>
				</div>
			</li>
		</ul>
	</section>
	<!-- SOBRE-NOS -->
	<section id="sobre-nos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>SOBRE A INSTITUIÇÃO</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-12 col-lg-4">
					<img src="images/sobre-nos_3.jpg" class="img-fluid" alt="SOBRE NOS">
				</div>
				<div class="col-12 col-lg-4">
					<p>A construção do Hospital de Caridade da Irmandade da Santa Casa de Misericórdia de Curitiba teve início em 1866, bem antes de sua inauguração. E, embora na época fosse considerado um grande hospital, tinha apenas 160 leitos.</p>
					<p>Em 1880, o local foi aberto ao público oficialmente como o primeiro hospital da capital paranaense. Magistralmente, consagrado pelo então imperador Dom Pedro II. Nessa época, o Brasil também vivia o começo de muitas mudanças, como o fim da escravidão e a modernização das cidades.</p>
					<div class="text-center">						
						<button class="btn btn-primary btn-sm">Saiba mais</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- VIDEO-INSTITUCIONAL -->
	<section id="futuras-instalacoes">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>FUTURAS INSTALAÇÕES</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">

				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras1.jpeg" alt="IMAGE"></div>
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras2.jpeg" alt="IMAGE"></div>
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras3.jpeg" alt="IMAGE"></div>
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras4.jpeg" alt="IMAGE"></div>
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras5.jpeg" alt="IMAGE"></div>
						<div class="col-md-6 col-6"><img class="img-fluid mb-2" src="images/futuras6.jpeg" alt="IMAGE"></div>
					</div>
				</div>
				<div class="col-md-6">
					<p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Delectus, vel sequi quae maiores quaerat? Veritatis corporis tempora sint, ipsam labore accusamus, reprehenderit ducimus, quam incidunt ullam cupiditate voluptas ex perspiciatis! Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Delectus, vel sequi quae maiores quaerat? Veritatis corporis tempora sint, ipsam labore accusamus, reprehenderit ducimus, quam incidunt ullam cupiditate voluptas ex perspiciatis!</p>
					<p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Delectus, vel sequi quae maiores quaerat? Veritatis corporis tempora sint, ipsam labore accusamus, reprehenderit ducimus, quam incidunt ullam cupiditate voluptas ex perspiciatis! Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Delectus, vel sequi quae maiores quaerat? Veritatis corporis tempora sint, ipsam labore accusamus, reprehenderit ducimus, quam incidunt ullam cupiditate voluptas ex perspiciatis!</p>
				</div>


			</div>
		</div>
	</section>


	<!-- SERVIÇOS -->
	<section id="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>SERVIÇOS</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col col-md-10">
					<ul class="list-services">

						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Cirurgia Laparoscópica</p>
							</div>
						</li>

						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Endoscopia</p>
							</div>
						</li>

						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Exames Cardiológicos</p>
							</div>
						</li>
						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Fisioterapia</p>
							</div>
						</li>

						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Laboratório de Análises Clínicas</p>
							</div>
						</li>
						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Raio X</p>
							</div>
						</li>

						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Tomografia Computadorizada</p>
							</div>
						</li>
						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Ultrassonografia</p>
							</div>
						</li>
						<li>
							<div class="box-service">
								<div>
									<i class="far fa-file-alt"></i>
								</div>
								<p>Solicitação de prontuários</p>
							</div>
						</li>				

						<li>
							<div class="box-service">
								<div>
									<i class="fas fa-university"></i>
								</div>
								<p>Convênios Credenciados</p>
							</div>
						</li>

						<li>
							<div class="box-service">
								<div>	
									<i class="far fa-file-alt"></i>
								</div>
								<p>Internamento</p>
							</div>
						</li>
						<li>
							<div class="box-service">
								<div>
									<i class="fas fa-info"></i>
								</div>
								<p>Informações Gerais</p>
							</div>
						</li>

					</ul>
				</div>	

			</div>

		</div> <!-- ./container -->
	</section>


	<!-- NOTICIAS -->
	<section id="noticias">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>NOTÍCIAS</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">

				<div class="col-md-12">
					<div class="wrap-notices">
						<div class="">
							
							<div class="box-blog">
								<div class="date-post">
									<span>08</span>
									<hr>
									<span>Aug</span>
								</div>
								<div class="content-post">
									<p class="category">JORNALISMO</p>
									<img src="https://via.placeholder.com/280x100?text=IMAGEM PARA NOTICIA">
									<p class="title"> Quos dolorum optio beatae sit. Similique earum vero dol...</p>
									<p class="content"> Doloremque tempore et qui velit commodi. Possimus omnis unde qui eos. Totam quas iure repudiandae qu...</p>
									<a href="#" class="btn btn-success btn-sm" tabindex="0">Leia mais...</a>
								</div>
							</div>

						</div>

						<div class="">
							
							<div class="box-blog">
								<div class="date-post">
									<span>08</span>
									<hr>
									<span>Aug</span>
								</div>
								<div class="content-post">
									<p class="category">JORNALISMO</p>
									<img src="https://via.placeholder.com/280x100?text=IMAGEM PARA NOTICIA">
									<p class="title"> Quos dolorum optio beatae sit. Similique earum vero dol...</p>
									<p class="content"> Doloremque tempore et qui velit commodi. Possimus omnis unde qui eos. Totam quas iure repudiandae qu...</p>
									<a href="#" class="btn btn-success btn-sm" tabindex="0">Leia mais...</a>
								</div>
							</div>

						</div>

						<div class="">
							
							<div class="box-blog">
								<div class="date-post">
									<span>08</span>
									<hr>
									<span>Aug</span>
								</div>
								<div class="content-post">
									<p class="category">JORNALISMO</p>
									<img src="https://via.placeholder.com/280x100?text=IMAGEM PARA NOTICIA">
									<p class="title"> Quos dolorum optio beatae sit. Similique earum vero dol...</p>
									<p class="content"> Doloremque tempore et qui velit commodi. Possimus omnis unde qui eos. Totam quas iure repudiandae qu...</p>
									<a href="#" class="btn btn-success btn-sm" tabindex="0">Leia mais...</a>
								</div>
							</div>

						</div>

						<div class="">
							
							<div class="box-blog">
								<div class="date-post">
									<span>08</span>
									<hr>
									<span>Aug</span>
								</div>
								<div class="content-post">
									<p class="category">JORNALISMO</p>
									<img src="https://via.placeholder.com/280x100?text=IMAGEM PARA NOTICIA">
									<p class="title"> Quos dolorum optio beatae sit. Similique earum vero dol...</p>
									<p class="content"> Doloremque tempore et qui velit commodi. Possimus omnis unde qui eos. Totam quas iure repudiandae qu...</p>
									<a href="#" class="btn btn-success btn-sm" tabindex="0">Leia mais...</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ESPECIALIDADES -->
	<section id="especialidades">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-title">
						<h2>ESPECIALIDADES</h2>
						<hr>
					</div>
					<h3>Conheças as especialidades que temos para você</h3>
					<p>O Hospital de Clínicas de Ananindeua conta com uma ampla variedade de especialistas.
					</p>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<ul class="list-itens-especialidades">
					<li> 
						<img src="images/heart-rate.png" alt="ICON"> 
						<p>Angiologia Coronária</p>
					</li>
					<li> 
						<img src="images/stethoscope.png" alt="ICON"> 
						<p>Clínica Geral</p>
					</li>
					<li> 
						<img src="images/doctor.png" alt="ICON"> 
						<p>Cirurgia Geral e Oncológica</p>
					</li>
					<li> 
						<img src="images/microscope.png" alt="ICON"> 
						<p>Endocrinologia</p>
					</li>
					<li> 
						<img src="images/urinary-tract.png" alt="ICON"> 
						<p>Gastroenterologia</p>
					</li>
					<li> 
						<img src="images/sperm.png" alt="ICON"> 
						<p>Ginecologia</p>
					</li>
					<li> 
						<img src="images/pharmacist.png" alt="ICON"> 
						<p>Urologia</p>
					</li>

					<!--  -->
					<li> 
						<img src="images/blood-type.png" alt="ICON"> 
						<p>Cateterismo Cardiológico</p>
					</li>
					<!--  -->
					<li> 
						<img src="images/anatomy.png" alt="ICON"> 
						<p>Arteriografia Membros Inferiores</p>
					</li>
					<li> 
						<img src="images/heart-attack.png" alt="ICON"> 
						<p>Angioplastia Periférica</p>
					</li>
					<li> 
						<img src="images/brain.png" alt="ICON"> 
						<p>Neurocirurgia (Tratamento p/ Dor)</p>
					</li>
					<li> 
						<img src="images/throat.png" alt="ICON"> 
						<p>Buco Maxilo</p>
					</li>
					<li> 
						<img src="images/x-ray.png" alt="ICON"> 
						<p>Hemodinâmica</p>
					</li>

				</ul>
			</div>
		</div>
	</section>

	<!-- CORPO CLINICO -->
<!-- 	<section id="corpo-clinico">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>CORPO CLÍNICO</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquid blanditiis at, illum corporis reiciendis ipsum magnam, voluptates totam tenetur non, deserunt ad, incidunt quidem culpa accusantium doloremque vel? Possimus!</p>
			</div>
		</div>
	</section>
-->

<!-- MATERNIDADE -->
<!-- 	<section id="maternidade">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>MATERNIDADE</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquid blanditiis at, illum corporis reiciendis ipsum magnam, voluptates totam tenetur non, deserunt ad, incidunt quidem culpa accusantium doloremque vel? Possimus!</p>
			</div>
		</div>
	</section> -->

	<!-- MULHER -->
<!-- 	<section id="mulher">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>MULHER</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae aliquid blanditiis at, illum corporis reiciendis ipsum magnam, voluptates totam tenetur non, deserunt ad, incidunt quidem culpa accusantium doloremque vel? Possimus!</p>
			</div>
		</div>
	</section> -->

	<!-- CONVENIOS -->
	<section id="convenios">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>CONVÊNIOS</h2>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-12">					
					<p class="text-center">Atendemos os seguintes planos de saúde:</p>
				</div>				
			</div>
			<div class="row justify-content-md-center">
				<div class="col-md-8 text-center">
					<img class="img-fluid img-convenio" src="images/logo-sus.png" alt="">
					<img class="img-fluid img-convenio" src="images/logo-iasep.png" alt="">
				</div>
			</div>
		</div>
	</section>


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15954.68619136854!2d-48.38204842910925!3d-1.3737575999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a4f56135ecd83b%3A0xfbae46d92ee64b8e!2sHospital%20das%20Cl%C3%ADnicas%20de%20Ananindeua!5e0!3m2!1spt-BR!2sbr!4v1601684530895!5m2!1spt-BR!2sbr" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	<footer id="contato">
		<div class="container">		
			<div class="row">
				<div class="col-md-3">
					<img src="images/logo-hca-pb.png" alt="">
					<h5>Contato</h5>
					<address>						
						<i class="fas fa-phone"></i> (91) 98839-2565<br/>
						<i class="fas fa-phone"></i> (91) 98839-2565<br/>
						<i class="fas fa-envelope"></i> contato@hca.com.br<br/>
						<i class="fas fa-map-marker-alt"></i> Rua Dois de Junho, 650.<br/>
						Águas Brancas, Ananindeua/PA.
					</address>
				</div>
				<div class="col-md-3">
					<h5>Atendimento</h5>
					<p><i class="fas fa-history"></i> Segunda - Sexta: 08:00 às 18:00</p>
					<h5>Redes Sociais</h5>					
					<ul>
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></i></a></li>
						<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<form action="">
						<div class="row">							
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="nome" placeholder="Seu nome *">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="email" placeholder="Seu e-mail *">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Sua mensagem *"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center mb-2">
								<input type="submit" class="btn btn-light" value="Enviar Mensagem">
							</div>	
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-6">
						<p class="text-left">® Todos os direitos reservados a Hospital de Clínicas de Ananindeua.</p>
					</div>
					<div class="col-6">
						<p class="text-right">Desenvolvido por Dellano Sites.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js "></script>
	<script src="js/script.js"></script>	
</body>
</html>