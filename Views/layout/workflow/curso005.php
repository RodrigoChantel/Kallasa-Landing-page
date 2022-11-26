<div class="content-fluid mt-5">
    <div class="row w-100">
        <div class="col-md-12">
            <form class="row form-control w-50 mx-auto mb-3" enctype="multipart/form-data" id="upOn" method="POST" action="http://192.168.0.100/kallasa.com.br/Config/controller/redirect.php">
                <input type="hidden" name="uploadsTest" value="upOn">
                <h1 class="text fs-3 mt-3">Enviar arquivo único</h1>
                <div class="col-md-12 mb-3">
                    <input type="file" name="archive" class="form-control" id="fileImg">
                </div>
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>

            <form class="row form-control w-50 mx-auto" enctype="multipart/form-data" id="upOn2" method="POST" action="http://192.168.0.100/kallasa.com.br/Config/controller/redirect.php">
                <input type="hidden" name="uploadsTest2" value="upOn2">
                <h1 class="text fs-3 mt-3">Enviar vários arquivos</h1>
                <div class="col-md-12 mb-3">
                    <input type="file" name="archive2[]" multiple class="form-control" id="fileImg">
                </div>
                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div class="row w-100 pt-3">
        <div class="col-md-12">
            <form class="row form-control w-50 mx-auto" action="http://192.168.0.100/kallasa.com.br/Config/controller/redirect.php" method="POST" id="directory">
                <input type="hidden" name="makeDirectory" value="directory">
                <h1 class="text fs-3 mt-3">Criar pasta</h1>
                <div class="col-md-12 mb-3">
                    <label for="directoryName" class="form-label">Nome da pasta</label>
                    <input type="text" class="form-control" name="directoryName" placeholder="Nova Pasta" id="directoryName">
                </div>
                <div class="col-md-12 mb-2">
                    <input type="submit" value="Criar Pasta" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <div class="row w-100">
        <div class="col-md-12">
            <ul class="list-group w-50 my-4 mx-auto">
                <li class="list-group-item">Lista de arquivos transferidos</li>
                <?php
                    $viewsArchives = glob('/xampp/htdocs/kallasa.com.br/uploads/*');
                    $viewsPerScan = scandir('/xampp/htdocs/kallasa.com.br/uploads/');

                    for ($i=0; $i < count($viewsPerScan); $i++) { 
                        echo "<li class='list-group-item overflow-hidden'> {$viewsPerScan[$i]} </li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</div>