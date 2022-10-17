<?php include("./include/header.php"); ?>

    <div class="center-page height-100-vh">
        <div class="form-center">
            <form action="./action/logar.php" method="POST">
                <img class="mb-5 w-100" src="./assets/img/logo.png" alt="Logo sesi senai" />
                <h1 class="h3 mb-4 text-center">Sistema de login</h1>

                <?php if(!empty($_GET["aviso"])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET["aviso"]; ?>
                    </div>
                <?php endif; ?>

                <div class="form-floating mb-3">
                    <input type="text" name="usuario" class="form-control" id="inputUsuario" placeholder="Seu usuário">
                    <label for="inputUsuario">Usuário</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Sua senha">
                    <label for="inputSenha">Senha</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger" type="submit">Acessar</button>

                <p class="mt-5 mb-3 text-muted">
                    Ainda não possui cadastro?
                    <a href="./cadastro.php">Cadastre-se aqui!</a>
                </p>
            </form>
        </div>
    </div>

<?php include("./include/footer.php"); ?>