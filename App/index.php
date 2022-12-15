<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="http://localhost/poo.curso/Assets/Css/styleHover.css" rel="stylesheet">
    <title>Dashboard</title>
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
				<div class="d-block nav-bg pt-2" id="menu2">
					
					<button class="btn w-100 border-0 text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" id="botao01" onclick="Recuperar('box, botao01, botao02')">
						<i class="fa-sharp fa-solid fa-bars fw-bold fs-5 text-light"></i>
					</button>
                    
                    <button style="display:none;" class="btn w-100 border-0 text-start px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" id="botao02" aria-controls="collapseWidthExample" onclick="Recuperar2('box, botao01, botao02')">
						<i class="fa-sharp fa-solid fa-bars fw-bold fs-5 text-light"></i>
					</button>

                    <div class="collapse collapse-horizontal bg-dark mt-0" id="collapseWidthExample">
                        <hr class="my-0 text-light">
                        <div class="rounded-circle bg-secondary mx-auto mt-2 d-flex flex-row justify-content-center align-items-center text-white" style="width: 75px; height: 75px;">IMAGE</div>
                        <p class="text-center my-0 text-light"><a href="#" class="btn text-light">@USER</a></p>
                        <p class="text-center mt-0 text-light">( CARGO )</p>
                        <hr class="my-0  text-light">
                    </div>
                    <div class="pt-3" id="box" style="max-height: 80vh;">
                        <div>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-user-plus fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Solicitações</span></a></p>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-credit-card fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Compras</span></a></p>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-dollar-sign  fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Faturamento</span></a></p>
                        </div>
                        <div>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-user-plus fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Solicitações</span></a></p>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-credit-card fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Cobranças</span></a></p>
                            <p class="m-0 py-1 p-0 include-hover d-flex"><a class="btn w-25 text-start text-light py-0 mt-0 teste"><i class="fa-solid fa-dollar-sign  fs-5"></i></a><a  class="collapse collapse-horizontal btn w-75 text-start text-light py-0 mt-0 teste border-0" id="collapseWidthExample"><span> Faturamento</span></a></p>
                        </div>
                    </div>
					
					
				</div>
				<div class="m-0 p-0 w-100">
					<!--<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
						<i class="fa-sharp fa-solid fa-bars"></i>
					</button>-->
					<?php
                      
                        include('./Views/pages/shorts.php');

                    ?>
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

