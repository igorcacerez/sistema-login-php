<?php include("./config/seguranca.php"); ?>
<?php include("./include/header.php"); ?>

    <div class="center-page height-100-vh">
        <div class="form-center">
            <img class="mb-5 w-100" src="./assets/img/logo.png" alt="Logo sesi senai" />
            <h1 class="h3 mb-4 text-center">
                Olá <?= $_SESSION["usuario"]["nome"] ?>! <br>
                Seja bem-vindo!
            </h1>

            <a href="./sair.php">Sair.</a>
        </div>
    </div>

<?php include("./include/footer.php"); ?>