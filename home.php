<?php
session_start();
if(!empty($_SESSION['id'])){
	//echo "Olá ".$_SESSION['nome'].", seja bem vindo ";
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
	header("Location: login.php");	
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style>

	.lado-esq{
	position: absolute;
	background:silver;
	float: left;
	width: 20%;
	top: 165px;
	left: 10px;
	}
	.lado-dir{
	
	position: absolute;
	float: right;
	top: 160px;
	right: 10px;
	width: 20%;
	height: 110%;
	border: 1px solid black;
	max-width: 330px;
  	padding: 15px;
  	margin: 0 auto;
  	border-radius: 10px;
	}
	
	tr:hover{
		color:#008000;
		transform: scale(1.03);
	}
	
	a,a:active,a:hover{
		color: inherit;
		text-decoration: none;
	}

	div.nome{
	height: 20%;
 	width: 100%;
	text-align: center;
	position: absolute;
 	top: 8%;
 	left: 0px;
	 z-index: -9;
	 font-size: 40px;
	}

	button#bt-sair{
	height: 35px;
 	width: 85px;
 	position: absolute;
 	top: 60px;
 	right: 32px;
	}
	
	.home{
	position: absolute;
 	top: 50px;
 	left: 30px;
	}
	.center{
	width: 57%;
	left: 290px;
  	height: 100%;
  	line-height: 50px;
	text-align: center;
  	background-color:#E0FFFF;
  	position: absolute;
  	top: 27%; /* posiciona na metade da tela */
  	margin-top: -25px; /* e retrocede metade da altura */
  	margin: 0 auto;
  	border-radius: 10px;
	}
	.button1{
		color: white;
		background-color: #B8860B	;
		height: 8%;
		width: 180px;
		border-radius: 10px;
		font-size: 13px;

	}
	.button1:active, .button1:hover{
		background-color: #DAA520;
	}
	.button2{
		background-color:#008B8B;
		color: white;
		height: 8%;
		width: 180px;
		border-radius: 10px;
		font-size: 13px;

	}
	.button2:active,.button2:hover{
		background-color:#48D1CC ;
	}
	.button3{
		background-color: #008000;
		color: white;
		height: 8%;
		width: 180px;
		border-radius: 10px;
		font-size: 14px;
		text-align: center;
	}
	.button3:hover,button:active{
		background-color:#32CD32;
	}
	.data{
		position: absolute;
		top: 80%;
		right: 10%;
		font-size: 20px;
		height: 100px;
		width: 200px;
		border-radius: 10px;
	}
	.barranome{
		position: absolute;
		top: 25%;
		left: 35%;
		background-color: #008000;
		height: 10px;
		width: 400px;
		border-radius: 10px;
	}
	
	.sep{
		background-color: black;
		width: 80%;
		height: 1px;
	}
	.footer {
		text-align: center;
		background-color: #008000;
		position:absolute;
		bottom:-55%;
		width:100%;
		height: 18%;
		font-size: 16px;
		color: white;
	}
	.noticias{
		text-align: right;
		color: blue;
		text-decoration: #008000;
	}
	.sep2{
		background-color: #7FFFD4	;
		width: 100%;
		height: 1px;
	}
	/*.cab1{
		position: absolute;
		top: 0%;
		width: 100%;
		height: 140px;
		background-color: #32CD32;
		z-index: -20;
	}*/

	</style>
	</head>
<body >

	<a href="home.php"><img src="img/icone-casa.png" width="40" height="40" alt="icone Casa" class="home" /></a>
		
		<div class="nome">
			<h1 class="nome2"> Cartilha de vacinação online</h1>
			<div class="barranome"></div>
		
			
		</div>
		<a href='sair.php'><button class="btn-danger" id="bt-sair">Desconectar</button></a><p>
		<div class="cab1"></div>
	

	<div class="lado-esq">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  	<div class="carousel-inner">
    <div class="carousel-item active">
		<img src="img/prop3.png" width="270" height="650" alt="Propaganda" class="d-block w-100"/>
    </div>
    <div class="carousel-item">
		<img src="img/prop2.png" width="270" height="650" alt="Propaganda" class="d-block w-100"/>
    </div>
    <div class="carousel-item">
		<img src="img/prop5.png" width="270" height="650" alt="Propaganda" class="d-block w-100"/>
    </div>
 	</div>
	</div>
	</div>
	<div class="lado-dir container">
		<h2><u>Noticias</u></h2><br>

		
	<table>
		<tr>
			<td><a href="https://noticias.r7.com/saude/ministerio-da-saude-antecipa-vacina-para-profissionais-da-educacao-28052021"><h3>Ministério da Saúde antecipa vacina para profissionais da educação</h3>
		<h5>Em nota, a pasta também informou que vai retomar a vacinação da população por idade, 
		em ordem decrescente de 18 e 59 anos<br><div class="sep"></div></h5><p></a></td>
		</tr><!-- link:  -->
		
		<tr>
		<td><a href="https://www.uol.com.br/vivabem/noticias/bbc/2021/05/28/vacinas-contra-covid-criancas-deveriam-ou-nao-ser-imunizadas.htm"><h3>Vacinas contra covid: crianças deveriam ou não ser imunizadas?</h3>
		<h5>A decisão sobre a imunização infantil deve responder a questões científicas, 
		mas também éticas<br><div class="sep"></div></h5><p></a></td>
		</tr><!--  -->
		
		<tr>
		<td><a href="https://noticias.uol.com.br/saude/ultimas-noticias/redacao/2021/05/28/covid-19-coronavirus-casos-mortes-28-de-maio.htm"><h3>Covid: Com 2.418 novas mortes no Brasil, média volta a ficar acima de 1.800</h3>
		<h5>O Brasil registrou 2.418 mortes de covid-19 nas últimas 24 horas e está próximo de atingir
		 as 460 mil vidas perdidas em toda a pandemia<br><div class="sep"></div></h5></a><p></td>
		</tr><!--  -->

		<tr>
		<td><a href="https://g1.globo.com/bemestar/coronavirus/noticia/2021/05/28/covid-19-fungo-negro-encontrado-na-india-existe-no-brasil-mas-nosso-corpo-costuma-ser-forte-contra-ele.ghtml"><h3>Covid-19: 'fungo negro' encontrado na Índia existe no Brasil, mas nosso corpo costuma ser forte contra ele</h3>
		<h5>As primeiras notícias sobre casos de ‘fungo negro’ no país Asiático deixaram todo mundo assustado. Mas especialistas 
		entendem que probabilidade de o cenário se repetir no nosso país é muito baixa<br><div class="sep"></div></h5><p></a></td>
		</tr><!--  -->
		

	</table>
	<a href="https://g1.globo.com/ciencia-e-saude/" class="noticias"><h4>Mais noticias>>></h4></a>
	</div>
	<div class="center">
		<div class="session">
			<?php
			echo"<p><h2> Olá ".$_SESSION['nome'].", verifique suas vacinas pendentes:</h2> ";
			?>
			<h3>2 Vacinas pendentes.</h3><br/>
			
		</div>
		<div class="sep2"></div>
	
	<p><h2>Calendario de vacinas:</h2>
	<h3>Dia 15 de junho de 2021<br>(Terça-feira)</h3>
	<h3>Dia 18 de junho de 2021<br>(Sexta-feira)</h3><br>
	<div class="sep2"></div><br/>
	<a href="vacina.php"><button id="button-suc" style="text-decoration:none" class="button3" >Adicionar nova vacina</button></a>
	<a href="https://conectesus-paciente.saude.gov.br/menu/agendar-consulta"><button id="button-suc" style="text-decoration:none" class="button2" >Verificar vacinas disponiveis</button></a>
	<a href="postos.php"><button id="button-suc" style="text-decoration:none" class="button1" >Postos de vacinação</button></a>
	<!--  -->
	
	
	</div>
	</div>j
	<footer class="footer">
	<br><br>Copyright ©2021 Cartilha de Vacinação Online
	</footer>
	
	<div > 		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	</div>
</body>
</html>
