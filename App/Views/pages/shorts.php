<?php
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\Solicitacoes.php');
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\Atender.php');
    require_once('C:\xampp\htdocs\kallasa.com.br\App\Controller\MeusAtendimentos.php');
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
    <div class="row w-100">

        <div id="iniciaratendimento" class="bg-black w-100 position-absolute bg-opacity-25 flex-row justify-content-center align-items-center" style="z-index:5; height:90vh; display:none;">
            <div class="card py-4 px-4 shadow" style="width: 300px; z-index:10;">
                
                <h5>DESEJA ATENDER?</h5>
                <p>Ao confirmar, o atendimento será iniciado.</p>
                <div class="w-100 d-flex flex-row flex-nowrap justify-content-between">
                    <input type="submit" class="btn btn-primary" value="Confirmar">
                    <input onclick="CancelaIniciarAtendimento('iniciaratendimento')" type="submit" class="btn btn-danger" value="Cancelar">
                </div>
            </div>
        </div>

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
                        
                        <form id="myform" action="http://localhost/kallasa.com.br/App/Controller/RedirectAtendimento.php" method="POST">
                            <input type="hidden" name="atender" value="atendimento2022">
                            <input name="idDoUser" type="hidden" value="<?php $idUser = new Atendimento; $idUser->getIdUser(); ?>">
                            <input name="idDoCliente" type="hidden" value="<?php echo $key['CLIENT_ID'] ?>">
                        </form>
                        <tr>
                        
                            <td class="border p-1 m-0"><?php echo $key['CLIENT_ID'] ?></td>
                            <td class="border p-1 m-0 w-25"><?php echo $key['CLIENT_NAME'] ?></td>
                            <td class="border p-1 m-0 w-25"><?php echo $key['CLIENT_EMAIL'] ?></td>
                            <td class="border p-1 m-0 w-25"><?php echo date("d/m/Y", strtotime($key['REG_DATE'])) ?></td>
                            
                            <td class="border p-1 m-0 w-25"><div class="d-flex flex-row flex-nowrap justify-content-around"><input type="submit" form="myform" class="btn btn-primary btn-sm" value="ATENDER">
                            
                            <?php 
                                require_once('C:\xampp\htdocs\poo.curso\Controller\Redirect.php');
                                if($_SESSION['user_auth'] == 1){
                                    echo "<a href='#' onclick='IniciarAtendimento('iniciarAtendimento')'><i class='fa-sharp fa-solid fa-gear fs-4 text-primary'></i></a>";
                                }else{
                                    
                                }
                            ?>
                            </div></td>
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
                        <?php    
                            $listando = new MinhaLista;
                            
                            
                        ?>
                        <tr class="">
                            <td class="" style="width: 30%;"><?php $key['CLIENT_NAME'] ?></td>
                            <td class="w-25"><?php $key['RETURNED_IN'] ?></td>
                            <td class="w-25"><?php $key['STATUS'] ?></td>
                            <td class="text-center" style="width: 20%;"><a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                        </tr>
                        <?php
                        
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>