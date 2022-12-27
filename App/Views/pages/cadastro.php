<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\Solicitacoes.php');
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\Atender.php');
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\MeusAtendimentos.php');
    
?>
<div class="container-fluid overflow-auto d-block" style="max-height: 90vh;">
    <div class="row pt-3">
        <div class="col-md-12 d-flex flex-row flex-nowrap justify-content-between">
            <h6>CADASTRO</h6>
            <span>Bem vindo, <?php echo ucwords($_SESSION['user']); ?>!</span>
        </div>
        <hr>
    </div>
    <div class="row" >
        <div class="col-md-6">
            <form action="" class="form form-control w-100 py-4">
                <h1 class="title fw-bold fs-5">NOVO FUNCIONÁRIO</h1>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label class="label" for="nameUser">NOME</label>
                        <input class="form-control" type="text" name="nameUser" placeholder="Digite o Primeiro Nome">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="label" for="lastNameUser">SOBRENOME</label>
                        <input class="form-control" type="text" name="lastNameUser" placeholder="Digite o Sobrenome">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label class="label" for="user">USUÁRIO</label>
                        <input class="form-control" type="text" name="user" placeholder="Digite o Primeiro Nome">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label class="label" for="password">SENHA</label>
                        <input class="form-control" type="text" name="password" placeholder="Digite o Sobrenome">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <label class="label" for="emailUser">E-MAIL</label>
                        <input class="form-control" type="email" name="emailUser" placeholder="Digite o E-mail">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="label">CARGO / FUNÇÃO</label>
                        <select name="select" id="" class="form-select">
                            <option class="d-none" value="">Selecione o Cargo</option>
                            <option value="">Designer</option>
                            <option value="">Administrativo</option>
                            <option value="">Copywriter</option>
                            <option value="">Desenvolvedor</option>
                            <option value="">Marketing</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <input type="submit" class="btn btn-primary" value="CADASTRAR">
                    </div>
                </div>
            
            </form>
        </div>
        

    </div>

    
</div>
