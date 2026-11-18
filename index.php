
<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"] ?? "");
    $propriedade = htmlspecialchars($_POST["propriedade"] ?? "");
    $endereco = htmlspecialchars($_POST["endereco"] ?? "");
    $telefone = htmlspecialchars($_POST["telefone"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $animal = htmlspecialchars($_POST["animal"] ?? "");

    $mensagem = "
        <h2>Solicitação recebida!</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Propriedade:</strong> $propriedade</p>
        <p><strong>Endereço:</strong> $endereco</p>
        <p><strong>Telefone:</strong> $telefone</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Animal:</strong> $animal</p>
    ";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agro Limpo</title>

    <link rel="stylesheet" href="13.css">
</head>
<body>

<header>
    <h1>Agro Limpo</h1>

    <nav>
        <a href="#inicio">Home</a>
        <a href="#sobre">Sobre Nós</a>
        <a href="#servicos">Serviços</a>
        <a href="#contato">Contato</a>
        <a href="#formulario">Solicitar visita</a>
    </nav>
</header>

<section class="hero" id="inicio">
    <div>
        <h2>Agro Limpo</h2>
        <p>Cuidando da saúde animal e da qualidade da produção rural.</p>
        <a href="#formulario" class="botao">Solicitar visita</a>
    </div>
</section>

<?php if (!empty($mensagem)): ?>
    <section class="resultado">
        <?php echo $mensagem; ?>
        <a href="index.php">Voltar</a>
    </section>
<?php else: ?>

    <section id="sobre" class="conteudo">
        <h2>Sobre Nós</h2>
        <p>
            A Agro Limpo trabalha para garantir qualidade, segurança
            e cuidado sanitário nas propriedades rurais de Poços de Caldas.
        </p>
    </section>

    <section id="servicos" class="conteudo">
        <h2>Nossos Serviços</h2>

        <div class="cards">
            <div class="card">
                <h3>História</h3>
                <p>Conheça nossa trajetória e nosso compromisso com o campo.</p>
            </div>

            <div class="card">
                <h3>Serviços</h3>
                <p>Inspeção sanitária e acompanhamento de propriedades rurais.</p>
            </div>

            <div class="card">
                <h3>Clientes Atendidos</h3>
                <p>Atendimento dedicado aos produtores da região.</p>
            </div>

            <div class="card">
                <h3>Certificações</h3>
                <p>Compromisso com as normas de qualidade e segurança.</p>
            </div>
        </div>
    </section>

    <section id="formulario" class="conteudo">
        <h2>Solicitar uma visita</h2>

        <form method="POST" action="index.php">
            <input type="text" name="nome" placeholder="Seu nome" required>

            <input type="text" name="propriedade" placeholder="Nome da propriedade" required>

            <input type="text" name="endereco" placeholder="Endereço" required>

            <input type="tel" name="telefone" placeholder="Telefone" required>

            <input type="email" name="email" placeholder="E-mail" required>

            <input type="text" name="animal" placeholder="Tipo de animal" required>

            <button type="submit">Enviar solicitação</button>
        </form>
    </section>

<?php endif; ?>

<footer id="contato">
    <p>Agro Limpo - Poços de Caldas</p>
    <p>Compromisso com a saúde animal e o produtor rural.</p>
</footer>

</body>
</html>
