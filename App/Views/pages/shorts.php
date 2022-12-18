<?php
    require_once('C:\xampp\htdocs\poo.curso\Controller\Solicitacoes.php');
    $teste = new Solicitacoes;
    
?>
<div class="container-fluid overflow-auto d-block" style="max-height: 90vh;">
    <div class="row pt-3">
        <div class="col-md-12 d-flex flex-row flex-nowrap justify-content-between">
            <h6>ATENDIMENTO AO CLIENTE</h6>
            <span>Bem vindo, <?php echo ucwords($_SESSION['user']); ?>!</span>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm mt-2">
                <table class="table table-hover border m-0 p-0 d-block">
                    <h4 class="title fs-6 mx-auto py-2">SOLICITAÇÕES DE CONTATO</h4>
                    <thead class="d-block">    
                        <tr>
                            <th>#</th>
                            <th class=" w-25">NOME</th>
                            <th class=" w-25">E-MAIL</th>
                            <th class=" w-25">DATA</th>
                            <th class=" w-25">ATENDIMENTO</th>
                        </tr>
                    </thead>
                    <tbody class="d-block overflow-auto bg-light" style="max-height: 370px;">
                        <?php 
                            foreach ($teste->getDados() as $key) {
                            
                        ?>
                        
                        <tr>
                            <td class="border"><?php echo $key['CLIENT_ID'] ?></td>
                            <td class="border w-25" style="max-width: 20%;"><?php echo $key['CLIENT_NAME'] ?></td>
                            <td class="border w-25 overfl-x"><?php echo $key['CLIENT_EMAIL'] ?></td>


                            <td class="border w-25"><?php echo date("d/m/Y", strtotime($key['REG_DATE'])) ?></td>

                            <td class="border w-25"><div class="d-flex flex-row flex-nowrap justify-content-around"><a class="btn btn-primary btn-sm">ATENDER</a><a href="#"><i class="fa-sharp fa-solid fa-gear fs-4 text-primary"></i></a></div></td>
                        </tr>
                
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <a class="btn text-decoration-none text-dark">Ver todos os atendimentos</a>
            </div>
        </div>
        <div class="col-md-4 pe-3">
            <div class="card  mt-2">
                <table class="table border p-0">
                    <h4 class="title fs-6 mx-auto py-2">SITUAÇÃO GERAL</h4>
                    <thead>
                        <tr>
                            <th class="">SUCEDIDOS</th>
                            <th class="">ANDAMENTO</th>
                            <th class="">SEM SUCESSO</th>
                        </tr>
                    </thead>
                    <?php
                        $teste = new Solicitacoes;
                    ?>
                    <tbody>
                        <tr>
                            <td class="text-center fw-bold">00</td>
                            <td class="text-center fw-bold"><?php $teste->getCount(); ?></td>
                            <td class="text-center fw-bold">00</td>
                        </tr>
                        <tr>
                            <td class="fw-bold"></td>
                            <td class="fw-bold"></td>
                            <td class="fw-bold"></td>
                        </tr>
                        <tr>
                            <td class="text-center text-white fw-bold bg-success">0%</td>
                            <td class="text-center text-white fw-bold bg-primary">100%</td>
                            <td class="text-center text-white fw-bold bg-danger">0%</td>
                        </tr>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card mt-2">
                <table class="table table-hover border my-0 p-0 w-100">
                    <h4 class="title fs-6 mx-auto py-2">MEUS ATENDIMENTOS</h4>
                    <thead class="d-block">
                        <tr class="d-flex flex-row flex-nowrap justify-content-center pe-2">
                            <th class="" style="width: 30%;">NOME</th>
                            <th class="w-25">DATA</th>
                            <th class="w-25">STATUS</th>
                            <th class="">OPÇÕES</th>
                        </tr>
                    </thead>
                    <tbody class="overflow-auto d-block bg-light" style="max-height: 200px;">
                        <tr class="">
                            <td class="" style="width: 30%;">NOME DO CLIENTE</td>
                            <td class="w-25">01/01/2022</td>
                            <td class="w-25">Ativo</td>
                            <td class="text-center" style="width: 20%;"><a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="">
                            <td class="" style="width: 30%;">NOME DO CLIENTE</td>
                            <td class="w-25">01/01/2022</td>
                            <td class="w-25">Finalizado</td>
                            <td class="text-center" style="width: 20%;"><a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="">
                            <td class="" style="width: 30%;">NOME DO CLIENTE</td>
                            <td class="w-25">01/01/2022</td>
                            <td class="w-25">Finalizado</td>
                            <td class="text-center" style="width: 20%;"><a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <tr class="">
                            <td class="" style="width: 30%;">NOME DO CLIENTE</td>
                            <td class="w-25">01/01/2022</td>
                            <td class="w-25">Finalizado</td>
                            <td class="text-center" style="width: 20%;"><a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>