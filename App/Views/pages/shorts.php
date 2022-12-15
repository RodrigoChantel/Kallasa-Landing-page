<?php
    include_once('C:\xampp\htdocs\poo.curso\Controller\Solicitacoes.php');
    
    $teste = new Solicitacoes;
    
?>
<div class="container-fluid">
    
    <div class="row pt-3 px-2">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <table class="table table-hover border m-0 p-0">
                    <h4 class="title fs-6 mx-auto py-2">SOLICITAÇÕES DE CONTATO</h4>
                    
                    <tr class="">
                        <th>#</th>
                        <th class=" w-25">NOME</th>
                        <th class=" w-25">E-MAIL</th>
                        <th class=" w-25">DATA</th>
                        <th class=" w-25">ATENDIMENTO</th>
                    </tr>
                </table>
                <table class="table table-hover border m-0 p-0 d-block overflow-auto" style="max-height: 350px;">
                    <?php 
                        foreach ($teste->getDados() as $key) {
                        
                    ?>
                    
                    <tr>
                        <td class="border"><?php echo $key['CLIENT_ID'] ?></td>
                        <td class="border w-25" style="max-width: 20%;"><?php echo $key['CLIENT_NAME'] ?></td>
                        <td class="border w-25 overfl-x"><?php echo $key['CLIENT_EMAIL'] ?></td>
                        <td class="border w-25"><?php echo $key['REG_DATE'] ?></td>
                        <td class="border w-25"><div class="d-flex flex-row flex-nowrap justify-content-around"><a class="btn btn-primary btn-sm">ATENDER</a><a href="#"><i class="fa-sharp fa-solid fa-gear fs-4 text-primary"></i></a></div></td>
                    </tr>

                    <?php
                        }
                    ?>
                </table>
                <a class="btn text-decoration-none text-dark">Ver todos os atendimentos</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <table class="table table-hover border m-0 p-0">
                        <h4 class="title fs-6 mx-auto py-2">SITUAÇÃO</h4>
                        <tr>
                            <th>SUCEDIDOS</th>
                            <th>ANDAMENTO</th>
                            <th>SEM SUCESSO</th>
                        </tr>
                        <?php
                            $teste = new Solicitacoes;
                        ?>
                        <tr class="text-center">
                            <td>03</td>
                            <td><?php $teste->getCount(); ?></td>
                            <td>01</td>
                        </tr>
                        <tr>
                            <td class="text-center fw-bold"></td>
                            <td class="text-center fw-bold">%</td>
                            <td class="text-center fw-bold"></td>
                        </tr>
                        <tr class="text-center fw-bold text-light border-0">
                            <td class="bg-success">?%</td>
                            <td class="bg-primary">?%</td>
                            <td class="bg-danger">?%</td>
                        </tr>
                        <tr>
                            <td>
                                <h1></h1>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
</div>