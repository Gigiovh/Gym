<!--COISAS A FAZER E PERGUNTAR!!!
COMO MUDAR OS ICONS
FAZER O PHP E A PARTE DE LIGAÇÃO DA PÁGINA DE CONTATO.-->
<?php
  require_once './php/conect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Magym Boo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="shortcut icon" href="./images/esfera-removebg-preview.png" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
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
	      <a class="navbar-brand" href="homeSemCadastro.html"><img src="./images/loho.png " alt="logo" style="height: 70px; margin-top: 0px;"></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  	<!--Menu-->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Login</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section id="home-section" class="hero" style="background-color: #000; ">


    </section>
	
<!--PHP/ Formulário de inscrição-->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading" style="margin-top: 40px;">Já faz parte da Magym?</span>
            <h2 class="mb-4">Login</h2>
            <p>Faça o Login para ganhar seus benefícios</p>
          </div>
        </div>
       
        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
			<form action="login.php" method="Post" class="bg-light p-4 p-md-5 contact-form" action="./login.php">
				<div class="form-group" autofocus>
					<input type="text" class="form-control" placeholder="Email" name="email">
					<span class="error" style="color:red"></span>
				  </div>
			  <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="password">
				<span class="error" style="color:red"></span>
              </div>
             
			  
              
              
              
				<br>
	
      

			  <button type="submit" name="submit" value="Logar" onclick="alert('Login efetuado com sucesso')" style="margin-left: 5%; border-radius: 15px;width:100px; color: #6610f2;background-color:white ; cursor: pointer; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;font-size: 14px; border:0px; "><a href="homeSemCadastro.html" style="color: #6610f2;">Logar</a>
            </form>
          
          </div>

          
		         
		         
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
<br><br><br>
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
  
  <script src="js/main.js"></script>
    
  </body>
</html>
