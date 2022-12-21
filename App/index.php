<?php
	require_once('C:\xampp\htdocs\kallasa.com.br\App\Config\auth.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="http://localhost/poo.curso/Assets/Css/styleHover.css" rel="stylesheet">
    <title>Dashboard</title>

	<style>
		.bgTeste{
			background-image: url('./Assets/Img/bgteste.jpg');
			background-repeat: no-repeat;
			background-position-y: bottom;
			background-size: cover;
		}
	</style>

  </head>
<body class="bg-light">
	<header class="fixed-top border-bottom border-secondary">
		<div class="container-fluid nav-bg">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<div class="row w-100">
						<div class="col-md-6">
							<!--<a href="##" class="navbar-brand text-white fw-bold">Dashboard</a>-->
							<img src="https://www.kristta.com.br/Assets/img/logo" alt="" width="130">
						</div>
						<div class="col-md-6 text-end">
							<a href="#" class="btn text-light"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
							<a href="#" class="btn text-light"><i class="fa-sharp fa-solid fa-code-compare"></i></a>
							<a href="#" class="btn text-light"><i class="fa-sharp fa-solid fa-bell"></i></a>
							<a href="#" class="btn text-light" disabled><i class="fa-sharp fa-solid fa-envelope"></i></a>
							<a href="#" class="btn text-light"><i class="fa-sharp fa-solid fa-comment"></i></a>
							<a href="#" class="btn text-light"><i class="fa-sharp fa-solid fa-circle-user"></i></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	
	<main class="mt-5 position-fixed w-100">
		<div class="container-fluid m-0 p-0">
			<div  style="height:97vh;" class="container-fluid m-0 p-0 d-flex flex-row flex-nowrap">
				<div class="d-block nav-bg pt-2 bgTeste" id="menu2">
					
					<button class="btn w-100 border-0 text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" id="botao01" onclick="Recuperar('box, botao01, botao02')">
						<i class="fa-sharp fa-solid fa-bars fw-bold fs-5 text-light"></i>
					</button>
                    
                    <button style="display:none;" class="btn w-100 border-0 text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" id="botao02" aria-controls="collapseWidthExample" onclick="Recuperar2('box, botao01, botao02')">
						<i class="fa-sharp fa-solid fa-bars fw-bold fs-5 text-light"></i>
					</button>

                    <div class="" id="box" style="max-height: 80vh;">
						<p onclick="Inicio('inicio') "class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-house"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Inicio</span></a></p>
						<p onclick="Atendimento('atendimento')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-user-plus fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Atendimento</span></a></p>
						<p onclick="Clientes('clientes')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-user-group fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Clientes</span></a></p>
						<p onclick="Treinamento('treinamento')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-graduation-cap fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Treinamentos</span></a></p>
						<p onclick="Compras('compras')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-credit-card fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Compras</span></a></p>
						<p onclick="Faturamento('faturamento')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-money-bill-1-wave fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Faturamento</span></a></p>
						<p onclick="Solicitacoes('solicitacoes')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-ticket fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Solicitações</span></a></p>
						<p onclick="Cadastro('cadastro')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-id-card fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Cadastro</span></a></p>
						<p onclick="Suporte('suporte')" class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-headset fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Suporte</span></a></p>
						<p class="m-0 py-1 p-0 include-hover d-flex"><a href="./Controller/logout.php" class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-sharp fa-solid fa-right-to-bracket fs-5"></i></a><a href="./Controller/logout.php" class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Sair</span></a></p>
                    </div>
					
				</div>
				<div class="m-0 p-0 w-100">
					<div id="inicio" style="display: block;">
						<?php
							include('./Views/pages/inicio.php');
						?>
					</div>
					<div id="atendimento" style="display: none;">
						<?php
							include('./Views/pages/shorts.php');
						?>
					</div>
					<div id="clientes" style="display: none;">
						<?php
							include('./Views/pages/clientes.php');
						?>
					</div>
					<div id="treinamento" style="display: none;">
						<?php
							include('./Views/pages/treinamento.php');
						?>
					</div>
					<div id="compras" style="display: none;">
						<?php
							include('./Views/pages/compras.php');
						?>
					</div>
					<div id="faturamento" style="display: none;">
						<?php
							include('./Views/pages/faturamento.php');
						?>
					</div>
					<div id="solicitacoes" style="display: none;">
						<?php
							include('./Views/pages/solicitacoes.php');
						?>
					</div>
					<div id="cadastro" style="display: none;">
						<?php
							include('./Views/pages/cadastro.php');
						?>
					</div>
					<div id="suporte" style="display: none;">
						<?php
							include('./Views/pages/suporte.php');
						?>
					</div>
					
				</div>
			
			</div>
		</div>
	</main>
	
	<footer class="fixed-bottom nav-bg">
		<div class="text-end container-fluid position-fixed-bottom">
			<a href="www.kristta.com.br" class="btn border-0 text-decoration-none text-light">www.kristta.com.br<a>
		</div>
	</footer>
</body>
    <script src="./Assets/js/efect.js"></script>
	<script src="https://kit.fontawesome.com/87a7f5c1d5.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="./Assets/js/nav.js"></script>
</html>

