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
                           
                           foreach ($teste->getDadosUser() as $keyUser) { 
                            
                        ?>
                        <tr class="">
                            <td class="" style="width: 30%;"><?php echo $keyUser['CLIENT_NAME'] ?></td>
                            <td class="w-25"><?php echo $keyUser['RETURNED_IN'] ?></td>
                            <td class="w-25"><?php echo $keyUser['STATUS'] ?></td>
                            <form method="GET">
                                <input type="hidden" name="nome" value="<?php echo $keyUser['CLIENT_NAME'] ?>">
                                <td class="text-center" onclick="IniciarAtendimento('menuAtendimento')" style="width: 20%;"><a href="?nome=chantel+store" class="btn btn-primary" ><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a></td>
                            </form>
                        </tr>
                        <?php
                           }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
            <!-- MENU FLUTUANTE -->
        <?php
            var_dump($_GET['email']);
            
        ?>
            
            <div class="card position-fixed w-50 py-4 shadow-lg draggable" id="iniciaratendimento" style="left: 25%; top:20%; display:none;">
                        <?php    
                           
                           //foreach ($teste->getDadosUser() as $keyUser) { 
                            
                        ?>
                <form action="">
                    <label for="nnome">Nome</label>
                    <input class="form-control form-control-sm" id="nnome" type="text" placeholder="<?php echo $_GET['nome'] ?>" disabled>
                    <div class="row">
                        <div class="col-6">
                            <label for="eemail">E-mail</label>
                            <input class="form-control form-control-sm" id="eemail" type="text" placeholder="<?php echo $_GET['nome'] ?>" disabled>
                        </div>
                        <div class="col-6">
                            <label for="nnumero">Número</label>
                            <input class="form-control form-control-sm" id="nnumero" type="text" placeholder="<?php echo $key['CLIENT_EMAIL'] ?>" disabled>
                        </div>
                    </div>
                    <?php
                           //}
                    ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="nnumero">Ocorrência</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option class="d-none" selected>Selecione a ocorrência</option>
                                <option value="1">Dúvidas</option>
                                <option value="2">Cadastro</option>
                                <option value="3">Assinaturas</option>
                                <option value="4">Agendamento</option>
                                <option value="5">Call Back</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <h3 class="fs-6 mt-2">Já Cadastrado?</h3>
                            <div class="row form-check d-flex flex-row flex-nowrap justify-content-between">
                                <div class="col-md-6">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Sim
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Não
                                </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" rows="5"></textarea>
                            <div class="mt-3 text-end">
                                <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Salvar</button>
                                <input type="reset" onclick="CancelaIniciarAtendimento('iniciaratendimento')" class="btn btn-danger" value="Cancelar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</div>