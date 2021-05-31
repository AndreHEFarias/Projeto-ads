<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style>
			a,a:active,a:hover {
				color: inherit;
				text-decoration: none;
			}
			h2{
				text-align: center;
			}
			.barra{
				position: absolute;
				top: 70px;
				left: 55px;
				height: 10px;
				width: 140px;
				background-color: green;
				border-radius: 10px;
			}
			.lad-dir{
				position: absolute;
				top: 10%;
				right: 10%;
				
			}
			.lad-esq{
				position: absolute;
				top: 15%;
				left: 4%;
				color: white;
				opacity: 1;
			}
			.opac2{
				position: absolute;
				width: 45%;
				height: 46%;
				top: 10%;
				left: 2%;
				background-color: #008000;
				opacity: 0.5;
				border-radius: 15px;
			}
			.bt1{
				background-color:#008080;
				color: white;
				border: 1px solid black;
				border-radius: 5px;
			}
			.bt1:hover,.bt1:active{
				background-color:#00CED1;
				color: white;
				border: 1px solid black;
				border-radius: 5px;
			}

			.bt2{
				background-color: #008000	;
				color: white;
				border: 1px solid black;
				border-radius: 5px;
			}
			.bt2:hover,.bt2:active{
				background-color:#32CD32;
				color: white;
				border: 1px solid black;
				border-radius: 5px;
			}
			.img-vac{
				position: absolute;
				top: 0%;
				height:100% ;
				width:100% ;
			}
			.opac{
				position: absolute;
				width: 18%;
				height: 100%;
				top: 0%;
				right: 10%;
				background-color: #C0C0C0;
				opacity: 0.7;
				
			}
			.barra3{
				position: absolute;
				top: 30%;
				background-color: #008080;
				height: 10px;
				width: 460px;
				border-radius: 10px;
			}
		</style>
	</head>
	<body>

		<img src="img/vac1.png" class="img-vac">
		<div class="opac2"></div>
		<div class="lad-esq"><h1>Cartilha de vacinação online</h1>
		<div class="barra3"></div><br>
		<div style="font-size: 24px;">
			-Marque na agenda o dia da sua vacina.<br>
			-Veja os postos de vacinação mais próximos de você.<br>
			-Acompanhe todas as noticias da saúde através do<br>nosso portal.<br>
		</div>	
		</div>
		
		<div class="container">
			<div class="opac"></div>
			<div class="form-signin lad-dir">
				<h2 class="text-center">Login</h2><br>
				<div class="barra"></div><br>
			
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php" class="form1">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="bt1">
					
					<div  style="margin-top: 20px;"> 
					<button class="bt2"><a href="cadastrar.php" style="text-decoration:none" >Realizar cadastro</a></button>
					</div>
					
					
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>