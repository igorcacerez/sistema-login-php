<?php include("./include/header.php"); ?>

    <div class="center-page height-100-vh">
        <div class="form-center">
            <form action="./action/cadastrar.php" method="POST">
                <img class="mb-5 w-100" src="./assets/img/logo.png" alt="Logo sesi senai" />
                <h1 class="h3 mb-4 text-center">Cadastre-se aqui</h1>

                <?php if(!empty($_GET["aviso"])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET["aviso"]; ?>
                    </div>
                <?php endif; ?>

                <div class="form-floating mb-3">
                    <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Seu nome">
                    <label for="inputNome">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="usuario" class="form-control" id="inputUsuario" placeholder="Seu usuário">
                    <label for="inputUsuario">Usuário</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Sua senha">
                    <label for="inputSenha">Senha</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="repeteSenha" class="form-control" id="inputRepeteSenha" placeholder="Repita a senha">
                    <label for="inputRepeteSenha">Repita a senha</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

<?php include("./include/footer.php"); ?>