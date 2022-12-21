<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\Solicitacoes.php');
    $teste = new Solicitacoes;
    
?>
<style>
    .tesc{
        border-radius: 5px;
        border-left: 15px solid;
    }
</style>
<div class="container-fluid overflow-auto d-block" style="max-height: 90vh;">
    <div class="row pt-3">
        <div class="col-md-12 d-flex flex-row flex-nowrap justify-content-between">
            <h6>DASHBOARD</h6>
            <span>Bem vindo, <?php echo ucwords($_SESSION['user']); ?>!</span>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-3">
        <div class="card border-primary tesc my-2" style="max-width: 18rem;">
                <div class="card-header">GANHOS (ESSE MÊS)</div>
                <div class="bg-white border-primary text-primary d-flex flex-row flex-wrap justify-content-around align-items-center m-0 py-3">
                    <p class="card-title fs-3">R$ 50,00</p>
                    <p class="p-0 m-0"><i class="fa-sharp fa-solid fa-calendar-days fs-1 text-secondary opacity-25 p-0 m-0"></i></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success tesc my-2" style="max-width: 18rem;">
                <div class="card-header">GANHOS (ESSE ANO)</div>
                <div class="bg-white border-success text-success d-flex flex-row flex-wrap justify-content-around align-items-center m-0 py-3">
                    <p class="card-title fs-3">R$ 50,00</p>
                    <p class="p-0 m-0"><i class="fa-sharp fa-solid fa-brazilian-real-sign fs-1 text-secondary opacity-25 p-0 m-0"></i></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-info tesc my-2" style="max-width: 18rem;">
                <div class="card-header">TAREFAS</div>
                <div class="bg-white border-info text-info d-flex flex-row flex-wrap justify-content-around align-items-center m-0 py-3">
                    <p class="card-title fs-3">50% </p>
                    <div class="progress w-50">
                        <div class="progress-bar bg-info" role="progressbar" aria-label="Info example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="p-0 m-0"><i class="fa-sharp fa-solid fa-list-check fs-1 text-secondary opacity-25 p-0 m-0"></i></p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning tesc my-2" style="max-width: 18rem;">
                <div class="card-header">REQUISIÇÕES PENDENTES</div>
                <div class="bg-white border-warning text-warning d-flex flex-row flex-wrap justify-content-around align-items-center m-0 py-3">
                    <p class="card-title fs-3"><?php $teste->getCount(); ?></p>
                    <p class="p-0 m-0"><i class="fa-sharp fa-solid fa-clipboard-check fs-1 text-secondary opacity-25 p-0 m-0"></i></p>
                </div>
            </div>
        </div>

    </div>
</div>