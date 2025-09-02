<!DOCTYPE html>
<html lang="pt-br">

<?php require_once("estrutura/head.php") ?>

<body>
    <!-- Início cabeçalho -->
    <?php require_once("template/header.php") ?>
    <!-- Fim cabeçalho -->
    <!-- Início conteúdo -->
    <main>
        <!-- BANNER -->
        <?php require_once("template/banner.php") ?>

        <section class="site" id="contato">
            <h2>Contato</h2>
            <form class="contato-form" action="email.php" method="POST">
                <div>
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Nome" required>
                    <label>E-Mail</label>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <label>Telefone</label>
                    <input type="tel" name="telefone" placeholder="Telefone" required>
                </div>
                <div>
                    <label>Mensagem</label>
                    <textarea name="mensagem" placeholder="Mensagem" rows="5" required></textarea>
                    <div>
                        <button type="submit">Enviar</button>
                        <button type="reset">Limpar</button>
                    </div>
                </div>
            </form>
        </section>

        <!-- GALERIA -->
         <?php require_once("template/galeria.php") ?>
    </main>
    <!-- Fim conteúdo -->
    <!-- Início rodapé -->
    <?php require_once("template/footer.php") ?>
    <!-- Fim rodapé -->

    <?php require_once("estrutura/script.php") ?>
</body>
</html>