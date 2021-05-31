<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Necessário preencher todos os campos!</div>";
	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>A senha deve ter no minímo 6 caracteres!</div>";
	}elseif(stristr($dados['senha'], "'")) {
		$erro = true;
		$_SESSION['msg'] = "<div class='alert alert-danger'>Caracter ( ' ) utilizado na senha é inválido!</div>";
	}else{
		$result_usuario = "SELECT id FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<div class='alert alert-danger'>Este usuário já está sendo utilizado!</div>";
		}
		
		$result_usuario = "SELECT id FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "<div class='alert alert-danger'>Este e-mail já está cadastrado!</div>";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['usuario']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($conn, $result_usuario);
		if(mysqli_insert_id($conn)){
			$_SESSION['msgcad'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
			header("Location: login.php");
		}else{
			$_SESSION['msg'] = "<div class='alert alert-danger'>Erro ao cadastrar o usuário!</div>";
		}
	}
	
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
		<style>
			a,a:active,a:hover {
				color: inherit;
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
			.la-dir{
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
			<div class="form-signin la-dir">
				<h2>Cadastro</h2><br>
				<div class="barra"></div><br>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="">
					<!--<label>Nome</label>-->
					<input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>
					
					<!--<label>E-mail</label>-->
					<input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>
					
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite seu nome de usuário" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>
					
					<input type="submit" name="btnCadUsuario" value="Cadastrar" class="bt1"  ><br><br>
					
					<div > 
					<button  class="bt2"><a href="login.php" style="text-decoration:none">Ja tenho cadastro</a></button>
					</div>
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>