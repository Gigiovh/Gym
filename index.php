<!--COISAS A FAZER E PERGUNTAR!!!
COMO MUDAR OS ICONS
FAZER O PHP E A PARTE DE LIGAÇÃO DA PÁGINA DE CONTATO.-->
<?php
  require_once 'conect.php';
?>

<?php

    if(isset($_POST['submit']))
    {
        //print_r('Email:' . $_POST['email']);
        //print_r('<br>');
        //print_r('Usuario:' .$_POST['usuario']);
        //print_r('<br>');
        //print_r('Senha:' .$_POST['senha']);

        include_once('conect.php');

        $email = $_POST['email'];
        $Nome = $_POST['Nome'];
		$tipo = $_POST['tipo'];
        $Comentario = $_POST['Comentario'];
		$PCD = $_POST['PCD'];
        $Tel = $_POST['Tel'];
        $senha = $_POST['senha'];
        
        
        $result = mysqli_query($conexao, "INSERT INTO tb_cadastro(email,senha,Nome,Comentario,PCD,Tel,tipo) VALUES('$email','$senha','$Nome','$Comentario','$PCD','$Tel','$tipo')");
    }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Magym Boo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="./images/esfera-removebg-preview.png" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <!--PHP-->
 
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img src="./images/loho.png " alt="logo" style="height: 70px; margin-top: 0px;"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  	<!--Menu-->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Serviços</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Sobre nós</span></a></li>
	          <li class="nav-item"><a href="#produtos" class="nav-link"><span>Loja</span></a></li>
	          <li class="nav-item"><a href="#hotel-section" class="nav-link"><span>Podcast</span></a></li>
	          <li class="nav-item"><a href="#planos" class="nav-link"><span>Planos</span></a></li>
	          <li class="nav-item"><a href="#espaço" class="nav-link"><span>Espaço</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Cadastro</span></a></li>
			  <li class="nav-item"><a href="./caminhoLogin.php" class="nav-link"><span>Login</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section id="home-section" class="hero" style="background-color: #000; ">

		<!-- Imagem de bolha -->
	  	<img src="images/cir.avif" class="svg-blob" alt="Colorlib Free Template">
		  <div class="home-slider owl-carousel"><!-- Carrosel de imagens-->
	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url(images/banner.png); height: 500px;" id="imgMenu"><!-- Imagem do slide -->
	          			<div class="overlay"></div>
	          		</div>
	          		<div class="bg-primary">
		          		<div class="vr"></div><!-- Imagem do slide -->
	          		</div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading pl-5"  style=" color: #ffffffd5;">desde 2023 ღ </span>
			            <h1 class="mb-4 mt-3"style=" color: #ffffffd5;">Magym Boo</h1>
			            <p style=" color: #ffffffd5;">A primeira academia furista e acessível para pessoas com PCD's .</p><!-- Texto dos slides -->
			            
			            <p><a href="#about-section" class="btn btn-primary px-5 py-3 mt-3">Saiba Mais  <span class="ion-ios-arrow-forward"></span></a></p>
						<!-- Botão -->
		            </div>
		          </div>
	        	</div>
	        </div>
			
	      </div>

	      <div class="slider-item"><!-- slide -->
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last">
	          		<div class="img" style="background-image:url(images/banne-removebg-preview-removebg-preview.png);height: 500px;" id="imgMenu">
	          			<div class="overlay"></div>

	          		</div><!-- Imagem do slide -->
					
	          		<div class="vr"></div><!-- Título do container -->
	          	</div>
				  <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
					<div class="text">
						<span class="subheading pl-5"  style=" color: #ffffffd5;">desde 2023 ღ  </span>
					  <h1 class="mb-4 mt-3"style=" color: #ffffffd5;">Magym Boo</h1>
					  <p style=" color: #ffffffd5;">A primeira academia furista e acessível para pessoas com PCD's .</p><!-- Texto dos slides -->
					  
					  <p><a href="#about-section" class="btn btn-primary px-5 py-3 mt-3">Saiba Mais <span class="ion-ios-arrow-forward"></span></a></p>
					  <!-- Botão -->
				  </div>
				</div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
 <!-- Tópicos de serviço -->
    </section>
		
		<section class="ftco-section ftco-services-2" id="services-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Força  &amp; Resultado</span>
            <h2 class="mb-4">Nossos Serviços</h2>
            <p>A academia Magym oferece nossos serviços para você, contemos:</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><img src="images/iconm.png" alt="" style="height: 80px; width: auto;"></span></div>
              <div class="media-body">
				<!--Texto abaixo dos ícones-->
                <h3 class="heading mb-3">Equipamentos</h3>
                <p>Equipamentos qualificados, que te ajudam no seu resultado</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><img src="images/pt-removebg-preview.png" style="height: 140px; width: auto;"></div>
              <div class="media-body">
				<!--Texto abaixo dos ícones-->
                <h3 class="heading mb-3">Instrutores</h3>
                <p>Instrutores excepcionais que auxiliam a alcançar seu objetivo</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><img src="images/suplemento.png" alt="suplemento" style="height: 80px; width: auto;"></span></div>
              <div class="media-body">
				<!--Texto abaixo dos ícones-->
                <h3 class="heading mb-3"> Suplementos</h3>
                <p>Suplementos ricos em proteína e sais minerais, que ajudam seu corpo </p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon justify-content-center align-items-center d-flex"><img src="images/pcd-removebg-preview.png" style= "height: 80px; width: auto;"></div>
              <div class="media-body">
				<!--Texto abaixo dos ícones-->
                <h3 class="heading mb-3">Acessibilidade</h3>
                <p>Parelhos acessíveis para pessoas com PCD's</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
<!-- Propagandazinha / escrita 
 História-->
		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/maroma.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 px-lg-5 py-md-5 bg-darken" style="background-color: #000;">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-5 p-lg-0">
			          	<span class="subheading">- Desde 2023 -</span>
			            <h2 class="mb-4">Sobre nós</h2>
			            <p>A MAGYM : é uma academia tecnológica, que contém os melhores aparelhos para você ter um corpo definido e saudável.  </p>
			            <p>Ademais, a academia tem parceria com diversas empresas de suplementos para te ajudar no seu treino. fundada em 2023, pelos profissionais: Igor, Gustavo, Kauan e Bruno</p>
			            <p>Eles que têm um shape definido viram a dificuldade de pessoas para encontrar um academia acessível e capacitada, dessa forma decidiram criar a sua, com preços baratos divididos em seus 3 planos( God, Blue, Sanjin) ela é considerada a melhor do país, visitada por pessoas de alto reconhecimento como o leo Stronda</p>
			            <p><a href="#" class="btn btn-primary py-3 px-4">Doe pela causa</a> <a href="#" class="btn btn-white py-3 px-4">Seja um Patrocinador</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<!-- Banner -->
    <section class="ftco-intro img" id="destination-section" style="background-image: url(images/linhas.jpg); opacity: 0.92;" >
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Receitinhas<span style="color: #f83159;">BOO</span> </h2>
						<p>Prescisa unir seus suplementos na sua alimentação?</p>
						<p class="mb-0"><a href="destination.html" class="btn btn-white px-4 py-3" style="box-shadow: #6610f2 0px 10px 20px, #a577ee 0px 6px 6px;">Veja nossas receitas Fitness</a></p>
					</div>
				</div>
			</div>
		</section>
<!-- valor dos locais
 ideia: Página de produtos -->
    <section class="ftco-section" id="produtos">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Loja de produtos Magym</span>
            <h2 class="mb-4">Os melhores suplementos alimentares</h2>
            <p>O shape vem, mas o pré treino torna o processo mais rápido</p>
          </div>
        </div>
    		<div class="row">
				<!-- container slide --> 
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
    						<div class="vr"><span>Sale</span></div>
		    				<img src="images/huger-suplemento.webp" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">R$:80,00</span>R$:69,93</h4>
	    					<span>Pré treino</span>
	    					<h3>Huger</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(80)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/huger-suplemento.webp" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/creatina.png" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:130,00</h4>
	    					<span>Creatina</span>
	    					<h3>Creatina Glutamina</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(450)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/creatina.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				<!-- container de 1 produto --> 
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/whey suquinho.webp" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:12,00</h4>
	    					<span>Suplemento Alimentar</span>
	    					<h3>Whey Growth</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(100)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/whey suquinho.webp" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>

				<!-- container produto --> 
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/diabo.png" class="img-fluid" alt="Colorlib Template">
	    				</div>
					
	    				<div class="text">
	    					<h4 class="price">R$:140,00</h4>
	    					<span>Creatina</span>
	    					<h3>Diabo Verde</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(90)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/diabo.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				<!-- container produto --> 
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/x.webp" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:200,00</h4>
	    					<span>Pré treino</span>
	    					<h3>XTreme</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(150)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/x.webp" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				<!-- container produto --> 
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/arnold.png" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:160,00</h4>
	    					<span>Pré treino</span>
	    					<h3><a href="">Arnold Pump</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span><!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/arnold.png" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<!-- Propaganda/ banner
 Ideia: Propaganda de podcast -->
		<section class="ftco-intro img" id="hotel-section" style="background-image: url(images/teia.jpg); opacity: 0.9;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2 style="font-size: 60px; color: #fff; opacity: 1;"><b>Magym Cast</b></h2>
						<p style="font-family: 40px; opacity: 1; ">Nossa academia conta também com um podcast, dando dicas sobre o ramo Fitness</p>
						<button id="podcast" onmousedown="audio.play()">Escute o novo Podcast</button>
						
					</div>
				</div>
			</div>
		</section>
<!-- valor dos hotéis
 Ideia: Valor dos Planos -->
		<section class="ftco-section">
    	<div class="container" id="planos">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Nossas Ofertas</span>
            <h2 class="mb-4" style="font-size: 50px;">Planos</h2>
            <p>Veja os planos que a Magym tem a oferecer</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
    						<div class="vr"><span>Sale</span></div>
		    				<img src="images/modelo.jpg" class="img-fluid" alt="Colorlib Template" style="height:350px ; width: auto;">
	    				</div>
	    				<div class="text">
	    					<h4 class="price"><span class="old-price mr-2">R$:89,00</span>R$:79,00</h4>
	    					<span>Plano Saiyadin</span>
	    					<h3 style="color: #ffffffdd; font-size: 18px;">Acesso a todos os aparelhos, 10% de desconto no plano para pessoas com PCD's.</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
									<!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(770)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/modelo.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
				<!--Container de preço God-->
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img" >
		    				<img src="images/br.webp" class="img-fluid" alt="Colorlib Template" style="height: 350px; width: auto;">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:109,00</h4>
	    					<span>Plano God</span>
	    					<h3 style="color: #ffffffdd; font-size: 18px;">Acesso a todos os aparelhos, 15% de desconto no plano para pessoas com PCD's. Além de desconto nos suplementos</h3>
	    					<div class="star d-flex clearfix"> <!--Estrelas de avaliação-->
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(900)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="./images/apr.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-4 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/ciban.jpg" class="img-fluid" alt="Colorlib Template"style="height: 350px; width: 380px;">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">R$:169,00</h4>
	    					<span>Plano Blue</span>
	    					<h3 style="color: #ffffffdd; font-size: 18px;">Acesso a todos os aparelhos e  aulas 20% de desconto no plano para pessoas com PCD's. Além de brindes mensais.</h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span><!--Estrelas de avaliação-->
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#say">(1200)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="./images/ciban.jpg" class="icon image-popup d-flex justify-content-center align-items-center" >
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
		</section>

<!--O que os clientes acham do estabelencimento-->

    <section class="ftco-section testimony-section" style="background-color: #130429;" id="say">
    	<img src="images/xinhaa.png" class="svg-blob" alt="Colorlib Free Template">
    	<img src="images/yellow.png" class="svg-blob-2" alt="Colorlib Free Template">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Veja o que os nossos clientes acharam do estabelecimento</span>
            <h2 class="mb-4" style="color:#ffc107; height: 50px;">FeedBacks</h2><br>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/personagem\ de\ db.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4" style="color:#ffffffd5;">Academia digna de um DEUS!</p>
                    <p class="name" style="color:#f83159;">BEERUS</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/verde.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4" style="color:#ffffffd5;">Ótima academia com aparelhos tecnológicos de fácil execução.</p>
                    <p class="name" style="color:#ffc107;">PICOLO</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/mk.avif)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4" style="color:#ffffffd5;">Academia daora, eles servem pudim</p>
                    <p class="name" style="color:#6610f2;">MAJIN BOO</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/kuririn.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4" style="color:#ffffffd5;">Academia muito boa, acessível para toda família</p>
                    <p class="name" style="color:#f83159;">KURIRIN</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(images/blue.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4" style="color:#ffffffd5;">Depois que meus inimigos conhecerão a Magym eles nunca mais foram vermes</p>
                    <p class="name" style="color:#6610f2;">Vegeta Blue Dragon</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	<br><br><br>
	<div class="row justify-content-center pb-5 pt-5">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<span class="subheading">Nosso Estabelecimento</span>
		  <h2 class="mb-4" style="color: #a577ee;">Venha nos conhecer...</h2> 
		  <p>Veja um pouco do que o nosso estabelecimento tem a oferecer</p>
		</div>
	  </div>
	<div class="row">
		<div class="col-md-12 room-wrap" id="espaço">
			<div class="row">
				<div class="col-md-7 d-flex ftco-animate">
					<div class="img align-self-stretch" style="background-image: url(images/pink.jpg); margin-left: 130px;"></div>
				</div>
				<div class="col-md-5 ftco-animate">
					<div class="text py-5">
						
						<p >Regras do Estabelecimento:
						</p>	<p style="color: rgba(255, 255, 255, 0.925); font-size: 14px;">✦Tenha respeito pelo próximo<br>✦Devolva os pesos no mesmo lugar após o uso<br>✦ Limpe os aparelhos após o uso<br>✦ Funcionamento de Segunda a Sexta<br>✦ Dás 6h ás 11h e das 13h ás 19h.
						</p>
						 <a href="#" class="btn btn-primary" style="height: 35px; width: auto;">Saiba mais</a></p>
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br>
		<div class="col-md-12 room-wrap room-wrap-thumb mt-4">
			<div class="row" >
				<div class="col-md-3 ftco-animate" style="margin-left: 6%;">
					<a href="#" class="d-flex thumb">
						<div class="img align-self-stretch" style="background-image: url(images/aulas.jpg); height: 100px; width: 300px; margin-top: 30px;"></div>
						<div class="text pl-3 py-3">
							<h3 style="color: #ffc107; margin-top: 50px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Aulas</h3>
						</div>
					</a>
				</div>
				
				<div class="col-md-3 ftco-animate"  style="margin-left: 6%;">
					<a href="#" class="d-flex thumb">
						<div class="img align-self-stretch" style="background-image: url(images/vestiário.png); height: 100px; width: 300px; margin-top: 30px;"></div>
						<div class="text pl-3 py-3">
							<h3 style="color: #ffc107; margin-top: 50px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Vestiário</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3 ftco-animate"  style="margin-left: 6%;">
					<a href="#" class="d-flex thumb">
						<div class="img align-self-stretch" style="background-image: url(images/bebedouro.webp); margin-top: 30px; width: 200px;  height: 100px;"></div>
						<div class="text pl-3 py-3">
							<h3 style="color: #ffc107; margin-top: 50px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Bebedouro</h3>
						</div>
					</a>
				</div>
				<br><br><br><br><br><br>
			</div>
		</div>
	</div>
</div>
	    				</div>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


    <section  id="blog-section" style="background-color: #130429;">
      <div class="container"style="background-color: #130429;">
        <div class="row justify-content-center mb-5 pb-5"style="background-color: #130429;">
          <div class="col-md-7 heading-section text-center ftco-animate"style="background-color: #130429;">
            <span class="subheading" style="color: #a577ee; margin-top: 40%;">Notícias</span>
            <h2 class="mb-4">Blog da Magym</h2>
            <p>Veja algumas de nossas promoções e notícias de semestre</p>
          </div>
        </div>
        <div class="row d-flex">
          
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="#" class="block-20" style="background-image: url('images/lhj.webp');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">12</span>
              		</div>
              		<div class="two">
              			<span class="yr">2024</span>
              			<span class="mos">Junho</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#" style="color: #a577ee;">Dia dos Namorados</a></h3>
                <p>Ao comprar um suplemento de qualquer plano, ganha 10% de desconto no suplemento para sua GymGirl</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="./Catalogo.html" class="btn btn-primary">Saiba Mais  <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Comprar</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 19</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 d-flex ftco-animate">
			<div class="blog-entry justify-content-end">
			<a href="#" class="block-20" style="background-image: url('images/fisico.webp');">
			</a>
			<div class="text float-right d-block">
				<div class="d-flex align-items-center pt-2 mb-4 topp">
					<div class="one mr-2">
						<span class="day">14</span>
					</div>
					<div class="two">
						<span class="yr">2024</span>
						<span class="mos">Julho</span>
					</div>
				</div>
			  <h3 class="heading"><a href="#" style="color: #a577ee;">Campeonato de Fisiculturismo</a></h3>
			  <p>Venha participar da IFBB, venha competir mostre que você não é um Fakenedy</p>
			  <div class="d-flex align-items-center mt-4 meta">
				  <p class="mb-0"><a href="./single.html" class="btn btn-primary">Saiba mais  <span class="ion-ios-arrow-round-forward"></span></a></p>
				  <p class="ml-auto mb-0">
					  <a href="#" class="mr-2">Inscrições</a>
					  <a href="#" class="meta-chat"><span class="icon-chat"></span> 16</a>
				  </p>
			  </div>
			</div>
		  </div>
		</div>
          <div class="col-md-6 col-lg-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('images/cross.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">28</span>
              		</div>
              		<div class="two">
              			<span class="yr">2024</span>
              			<span class="mos">Agosto</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#" style="color: #a577ee;">CrossFit</a></h3>
                <p>Aulas de CrossFit agora todas as Quartas-feiras</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="./crossfiT.html" class="btn btn-primary">Saiba Mais <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="" class="mr-2">Inscritos</a>
	                	<a href="" class="meta-chat"><span class="icon-chat"></span> 36</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--PHP/ Formulário de inscrição-->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading" style="margin-top: 40px;">Assinar Plano</span>
            <h2 class="mb-4">Faça parte da Magym</h2>
            <p>Preencha o formulário para entrarmos em contato com você</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
			<form method="post" class="bg-light p-4 p-md-5 contact-form" action="./index.php" autofocus>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nome completo" name="Nome" id="validationDefault01">
				
              </div>
			  <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="senha" id="validationDefault04">
				
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email" name="email" id="validationDefaultUsername" >
			
              </div>
			  <div class="form-group">
                <input type="tel" class="form-control" name="Tel" placeholder="Preencha com seu telefone nesse formato:  12-98706-2708" pattern="[0-9]{2}-([0-9]{5}|[0-9]{4}" id="validationDefault04">
				
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Você possuí PCD ?" name="PCD" id="validationDefault04">
				
              </div>
              <div class="form-group">
                <textarea name="Comentario" id="" cols="30" rows="7" class="form-control" placeholder="Por que você deseja se juntar a Magym?"></textarea>
              </div>
              <div class="form-group" style="color: #a577ee;" id="validationDefault04">
				<!--Tipo de Plano:-->
				<input type="radio" name="tipo" value="saiyadin" style="color: #6610f2;" id="planos">Plano Saiyadin
				<input type="radio" name="tipo" value="god" style="margin-left: 30px; color: #6610f2;" id="planos"> Plano God
				<input type="radio" name="tipo" value="blue" style="margin-left: 30px; color: #6610f2;" id="planos">Plano Blue
		
				
				<br>
	
              </div>
        <!--Botão de Enviiar-->
			<!-- <button style="margin-left: 5%; border-radius: 15px;width:100px; color: #6610f2;background-color:white ; cursor: pointer; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 14px; border:0px; "><a href="#contact-section" style="color: #6610f2;">Enviar</a></button>" -->
		<input type="submit" name="submit" id="submit" value="submit" class="btn-submit">
        <!--Botão de Login-->
			  <button style="margin-left: 5%; border-radius: 15px;width:100px; color: #6610f2;background-color:white ; cursor: pointer; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 14px; border:0px; "><a href="./caminhoLogin.php" style="color: #6610f2;">Login</a></button>
            </form>
          
          </div>

          
		         
		         
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"> <img src="./images/loho.png" alt="logo" height="100px;"></h2>
              <p>&copy;Todos os direitos autorais estão reservados a Academia Magym.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://x.com/i/flow/login"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://pt-br.facebook.com/r.php/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://fr-instagram.com/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          </div>
         
            </div>
          </div>
         
	
        <div class="row">
          
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<script type="text/javascript">
	var audio = new Audio();
	audio.src="./videoplayback.mp3";
</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="./test_files/bootstrap.bundle.min.js.transferir" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="./test_files/checkout.js.transferir"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>