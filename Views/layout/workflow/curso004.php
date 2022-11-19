<?php

?>
<div class="container-fluid mx-0 my-5 p-0">
    <form class="row form-control g-3 w-50 py-4 mx-auto" action="http://192.168.0.100/kallasa.com.br/controller/redirect.php" method="POST" id="login">
        <input type="hidden" name="page" value="login">
        <h4 class="">CADASTRAR NOVO FUNCIOÁRIO</h4>
        <div class="input-group mb-3">
            <div class="col-md-12">
                <label for="firstname" class="form-label">Nome</label>
                <input class="form-control" type="text" placeholder="" name="firstname" id="firstname"  aria-describedby="nameHelp">
            </div>
            <div class="col-md-12">
                <label for="lastname" class="form-label">Sobrenome</label>           
                <input class="form-control" type="text" placeholder="" name="lastname" id="lastname"  aria-describedby="namelHelp">
            </div>
            <div class="col-md-6 pe-1">
                <label for="idEmployee">Matrícula</label>
                <input class="form-control" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="idEmployee" id="idEmployee">
            </div>
            <div class="col-md-6 ps-1">
                <label for="office">Cargo</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected hidden>Selecione um cargo</option>
                    <option value="1">Atendimento (Nível 1)</option>
                    <option value="2">Célula de recuperação de clientes (Nível 2)</option>
                    <option value="3">Backoffice (Administrativo)</option>
                </select>               
            </div>
            
        </div>
        <div class="input-group mb-3">
            <div class="col-md-12 mb-3">
                <label for="email" class="form-label">E-mail</label> 
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="col-md-6 pe-1">
                <label for="email" class="form-label">Usuário</label> 
                <input class="form-control" type="text" name="user">
            </div>
            <div class="col-md-6 ps-1">
                <label for="email" class="form-label">Senha</label> 
                <input class="form-control" type="password" name="password">
            </div>
            <div class="col-md-12 mt-3">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>