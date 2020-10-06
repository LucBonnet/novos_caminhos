<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' conten='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='index, follow'>
    <link rel='shortcut icon' href=''>
    <link rel='stylesheet' href=''>
    <title>Site do Curso</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <a href="#">
            <img src="assets/img/logo.png" alt="logotipo do curso" title="logotipo do curso">
        </a>

        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#escola">A Escola</a></li>
                <li><a href="#contatos">Contato</a></li>
            </ul>
        </nav>
    </header>
    <!-- Fim Cabeçalho -->
    <main>
        <!-- Chamada Principal -->
        <article>
            <header>
                <h1>
                    Aqui você aprende o essencial para trabalhar como webmaster fullstack
                </h1>
                <p>
                    Estude o HTML 5 e o CSS 3 na disciplina de webdedesign
                </p>

                <p>
                    <a href="#" class="btn">Saiba Mais</a>
                </p>
            </header>
        </article>
        <!-- Fim Chamada Principal -->

        <!-- Artigos -->
        <section>
            <header>
                <h1>
                    Nossos últimos artigos
                </h1>
            </header>
            <p>
                Aqui você encontra os artigos necessários para auxiliar na sua caminhada na web
            </p>

            <?php for ($i=0; $i < 12; $i++) : ?>
            <article>
                <a href="#">
                    <img src="assets/img/rede_federal.png" alt="Rede Federal" title="Rede Federal">
                </a>
                <p>Categoria</p>
                <h2>
                    Similique non est provident incidunt tenetur accusantium natus. Ab soluta itaque repellat illo nulla
                    et. Dolorem doloribus natus. Laboriosam suscipit et quia totam voluptas expedita assumenda. Omnis
                    repellat dolorem sint quisquam debitis rerum magnam provident.
                </h2>
            </article>
            <?php endfor; ?>
        </section>
        <!-- Fim Artigos -->

        <!-- News -->
        <article>
            <header>
                <h1>
                    Quer receber todas as novidades em seu e-mail ?
                </h1>
                <p>
                    Informe seu e-mail no campo ao lado e clique em OK !
                </p>
            </header>

            <form action="" method="post">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <button type="submit">OK !</button>
            </form>
        </article>
        <!-- Fim News -->

        <!-- Sobre o Curso -->
        <section>
            <header>
                <img src="assets/img/logo.png" alt="logomarca do curso" title="logomarca do curso">
                <h1>Curso de Programação WEB</h1>
                <p>
                    Aprenda a trabalhar com HTML 5 e CSS 3 para desenvolver seus projetos e entregar páginas que estejam
                    dentro dos padrões web seguindo boas práticas de programação
                </p>
            </header>

            <?php 
                $vantagens = [
                    "Curso 100% Online",
                    "Suporte Especializado",
                    "Aulas divididas em módulos",
                    "Certificado reconhecido em todo território nacional",
                    "Veja aqui alguns comentários dos nossos alunos",
                ];

                $descricao = [
                    "Todas as aulas são gravadas e focadas na prática",
                    "Este curso possui suporte diretamente com um profissional da nossa equipe oficial",
                    "A modularização que você precisa para compreender de maneira mais objetiva",
                    "Ao concluir o curso, você receberá um certificado federal com reconhecimento em todo o território nacional",
                    "Veja o que estão falando sobre o curso",
                ]
            ?>

            <?php for ($i=0; $i < 4; $i++): ?>

            <article>
                <header>
                    <h2>
                        <?=$vantagens[$i]?>
                    </h2>
                </header>
                <p>
                    <?=$descricao[$i]?>
                </p>
            </article>

            <?php endfor; ?>

            <section>
                <header>
                    <h2>
                        Veja o que estão falando sobre o curso
                    </h2>
                </header>

                <article>
                    <header>
                        <h3> Aline F. de Araujo (Ponto Positivo)</h3>
                        <p>
                            O CURSO VISA CAPACITAÇÃO PARA ATUAÇÃO EM UMA ÁREA COM CRESCENTE REQUISIÇÃO PELO MERCADO DE
                            TRABALHO
                        </p>
                    </header>
                </article>
                <article>
                    <header>
                        <h3> Aline F. de Araujo (Ponto Negativo)</h3>
                        <p>
                            FALTA UM MATERIAL DIDÁTICO COM CONCEITOS BÁSICOS DO CURSO E QUE DETALHE CADA COMANDO
                            UTILIZADO,
                            ESPECIFICANDO A FINALIDADE DA UTILIZAÇÃO
                        </p>
                    </header>
                </article>
                <article>
                    <header>
                        <h3> André Martins (Ponto Positivo)</h3>
                        <p>
                            FOCO MAIOR NA PRÁTICA E EXIGÊNCIAS DO MERCADO
                        </p>
                    </header>
                </article>
                <article>
                    <header>
                        <h3> André Martins (Ponto Negativo)</h3>
                        <p>
                            QUEM NÃO TEM NENHUM CONHECIMENTO DE "GIT" ENCONTRARÁ
                            DIFICULDADES NO INÍCIO
                        </p>
                    </header>
                </article>
                <article>
                    <header>
                        <h3> Felipe S. da Silva (Ponto Positivo)</h3>
                        <p>
                            É GRATUITO, E TAMBÉM A DISTÂNCIA
                        </p>
                    </header>
                </article>
                <article>
                    <header>
                        <h3> Felipe S. da Silva (Ponto Negativo)</h3>
                        <p>
                            O PRAZO DO CURSO É MUITO CURTO
                        </p>
                    </header>
                </article>
            </section>
        </section>
        <!-- Fim Sobre o Curso -->
    </main>

    <footer>

    </footer>

    <script> </script>
</body>

</html>