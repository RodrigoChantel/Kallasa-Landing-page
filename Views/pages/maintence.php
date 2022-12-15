<style>
    body{
        /*background-image: linear-gradient(to right, #130f42, #5d50f7);*/
        background-color: #5d50f7;
        height: 550px;
    }
</style>
<div class="container-md">
    <div class="row mb-5">
        <div class="col-md-12 pt-4">
            <a href="#"><img src="http://localhost/kallasa.com.br/Assets/img/logo%20horizontal.png" alt="Logo-Marca Kristta" width="150px"></a>
        </div>
    </div>

    <div class="position-controller">

        <div class="row">
            <div class="col-md-6 text-white">
                <div class="">
                    <h1 class="txt-font fs-2">Website está</h1>
                    <h2 class="txt-font fs-2 fw-bold">Em Construção</h2>
                    <p>Devido a mudanças na nossa identidade visual, o site passará por melhorias. Em breve estaremos de volta.</p>
                </div>
                <div class="d-flex justify-content-center py-3">
                    <img src="http://192.168.0.100/kallasa.com.br/assets/img/bg-maintence.svg" alt="Imagem de manutenção" style="width: 200px;">
                </div>
            </div>
            <div class="col-md-6">
                <form class="form-control py-4" action="./Controller/redirect.php" method="POST">
                    <input type="hidden" name="contatar" value="contatoFeito">
                    <h3 class="txt-font fs-5 fw-bold">Contato</h3>
                    <div class="mb-3">
                        <label for="">Digite seu nome ou o nome da sua empresa</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" id="email-contact" class="form-label">E-mail para contato</label>
                                <input class="form-control" type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
                            </div>
                            <div class="col-md-6">
                                <label for="" id="email-contact" class="form-label">Telefone</label>
                                <input class="form-control" type="phone" class="form-control" id="phone" name="phone" placeholder="(DDD) + Número">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class=" fs-6">Deixe seu e-mail para que possamos entrar em contato o mais breve possível</p>
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-md text-center text-white d-flex flex-row flex-nowrap justify-content-center mt-3">
    <p>Ou inicie uma conversa com um dos nossos consultores através do nosso Whatsapp ou Instagram</p>
</div>
<div class="container-md text-center text-white d-flex flex-row flex-nowrap justify-content-center">
    <a href="http://wa.me/5579998334969/" target="_blank" class="text text-white fs-1 mx-3"><i class="fa-brands fa-whatsapp"></i><p class="fs-6">79 9 9833-4969</p></a>
    <a href="https://www.instagram.com/kristta.mkt/" target="_blank" class="text text-white fs-1 mx-3"><i class="fa-brands fa-instagram"></i><p class="fs-6">@kristta.mkt</p></a>
</div>
<footer class="footer d-lg-none d-md-none d-sm-none bg-dark py-5">
    <div class="d-flex justify-content-center">
        <a href="#" class="text text-white text-decoration-none">Kristta.com.br</a>
    </div>
</footer>