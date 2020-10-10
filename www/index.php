<!DOCTYPE html>
<html lang='pt-br'>

<head>
<<<<<<< HEAD
  <meta charset='UTF-8'>
  <meta name='viewport' conten='width=device-width, initial-scale=1.0'>
  <meta name='robots' content='index, follow'>
  <link rel='shortcut icon' href='assets/img/ifto.svg'>
  <link rel='stylesheet' href='assets/css/styles.css'>
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

      <?php for ($i = 0; $i < 12; $i++) : ?>
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

      <form action="news.php" method="post">
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
=======
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='index, follow'>
    <link rel='shortcut icon' href='assets/img/ifto.svg'>
    <link rel='stylesheet' href='assets/css/boot.css'>
    <link rel='stylesheet' href='assets/css/style.css'>
    <title>Document</title>
</head>

<body>

    <header>
        <h1>Seja bem vindo ao meu site</h1>
        <p>Exemplo de Seletores</p>
    </header>
>>>>>>> feature/webdesing

      $descricao = [
        "Todas as aulas são gravadas e focadas na prática",
        "Este curso possui suporte diretamente com um profissional da nossa equipe oficial",
        "A modularização que você precisa para compreender de maneira mais objetiva",
        "Ao concluir o curso, você receberá um certificado federal com reconhecimento em todo o território nacional",
        "Veja o que estão falando sobre o curso",
      ]
      ?>

<<<<<<< HEAD
      <?php for ($i = 0; $i < 4; $i++) : ?>

      <article>
        <header>
          <h2>
            <?= $vantagens[$i] ?>
          </h2>
        </header>
        <p>
          <?= $descricao[$i] ?>
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

    <!-- A Escola -->
    <section>
      <header>
        <h1>
          Bem vindo ao <i>Campus</i> Araguaína - IFTO
        </h1>
      </header>

      <article>
        <header>
          <p>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>
          </p>
          <h2>
            Tudo o que você precisa para iniciar sua carreira webmaster full stack
          </h2>
        </header>

        <p>
          Desde 2010 o <i>Campus</i> Araguaína - IFTO vem ofertando os melhores cursos na área de tecnologia em sua
          região, entregamos ao aluno conhecimento prático e testado, sem enrolação
        </p>
        <p>
          Que tal estudar conosco ? E aprender a como entregar seus projetos utilizando HTML 5 e CSS 3 com boas práticas
          ?
        </p>
      </article>

      <section>
        <header>
          <h2>
            Confira nossos cursos
          </h2>
        </header>

        <?php
        $cursos = [
          "Operador de Computador",
          "Técnico em Biotecnologia",
          "Técnico em Informática",
          "Técnico em Análises Clínicas",
          "Técnico em Enfermagem",
          "Análise e Desenvolvimento de Sistemas",
          "Gestão de Produção Industrial",
          "Formação Docente em Educação Ambiental e Desenvolvimento Sustentável",
        ];
        ?>

        <?php foreach ($cursos as $key => $value) : ?>

        <article>
          <header>
            <h3>
              <?= $value ?>
            </h3>
          </header>
        </article>

        <?php endforeach; ?>

        <img src="assets/img/ifto.svg" alt="IFTO" title="IFTO">

        <article>
          <header>
            <h2>Nos Encontre</h2>
          </header>
          <p>
            Av. Amazonas, esquina com a Av. Paraguai, Quadra 56, Lote 01, Setor Cimba
          </p>
        </article>
      </section>
    </section>
    <!-- Fim A Escola -->

    <!-- Tutor -->
    <section>
      <header>
        <h1>
          Conheça Iury Gomes, seu tutor nesse curso
        </h1>
        <p>
          Eu quero te ajudar a criar sua webpage em HTML e CSS3
        </p>
      </header>
      <img src="assets/img/foto.jpeg" alt="Iury Gomes" title="Iury Gomes">
      <article>
        <header>
          <h2>Formado em Ciência da Computação e Apaixonado por WEB</h2>
        </header>
        <p>
          Como muitos, comecei na programção por curiosidade ! Com o tempo, o amor pela programação foi crescendo a
          ponto de se tornar uma profissão e me especializar na área. Hoje, com a bagagem que tenho, compartilho meu
          conhecimento com todos os alunos que estudam no <i>Campus</i> Araguaína - IFTO
        </p>
      </article>
      <section>
        <header>
          <h2>
            Me siga nas redes sociais
          </h2>
        </header>
        <article>
          <header>
            <h3>
              <a href="#">Meu Youtube</a>
            </h3>
          </header>
        </article>
        <article>
          <header>
            <h3>
              <a href="#">Meu GitHub</a>
            </h3>
          </header>
        </article>
        <article>
          <header>
            <h3>
              <a href="#">Meu Linkedin</a>
            </h3>
          </header>
        </article>
        <article>
          <header>
            <h3>
              <a href="#">Meu Twitter</a>
            </h3>
          </header>
        </article>
      </section>
    </section>
    <!-- Fim Tutor -->
  </main>

  <!-- área Vip -->
  <section>
    <header>
      <h1>
        Quer receber nosso conteúdo exclusivo ? Assine nossa lista VIP :)
      </h1>
    </header>

    <article>
      <header>
        <h2>
          <a href="#" class="btn">Entrar para a lista VIP</a>
        </h2>
      </header>
    </article>
  </section>
  <!-- Fim área Vip -->

  <!-- Saber Mais -->
  <section>
    <header>
      <h1>
        Quer Saber mais ?
      </h1>
    </header>

    <section>
      <header>
        <h2>
          Nossas Páginas
        </h2>
      </header>

      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">A Escola</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </section>

    <section>
      <header>
        <h2>
          Links úteis
        </h2>
      </header>

      <ul>
        <li><a href="#">Política de Privacidade</a></li>
        <li><a href="#">Aviso Legal</a></li>
        <li><a href="#">Termo de Uso</a></li>
      </ul>
    </section>

    <section>
      <header>
        <h2>
          Sobre o Projeto
        </h2>
      </header>

      <p>
        Aprenda a trabalhar com HTML 5 e com CSS 3 para desenvolver seus projetos e entregar páginas que estejam dentro
        !
        dos padrões da WEB seguindo boas práticas de desenvolvimento
      </p>
    </section>
  </section>
  <!-- Fim Saber Mais -->

  <footer>
    <p>
      &copy; Copyright 2020 - <?= date('Y') ?>, Campus Araguaína - IFTO
    </p>
  </footer>

  <script> </script>
=======
        <a href="#" class="btn btn_green"> Botão </a>
        <a href="#" class="btn btn_red"> Excluir </a>

        <section class="main_blog radius">
            <header>
                <h2>Sessão Principal de Conteúdo</h2>
            </header>

            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>
            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>
            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>
            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>
            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>
            <article class="radius">
                <header>
                    <h3 class="title_medium_lightgray">Teste de Artigo</h3>
                </header>

                <p>
                    Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
                    rerum. Earum harum qui in. Repellendus error deleniti.
                </p>
            </article>

        </section>
    </main>

    <article class="radius">
        <header>
            <h3 class="title_medium_lightgray">Teste de Artigo</h3>
        </header>

        <p>
            Consequuntur sint ea. Qui quos eum est voluptatem alias. Beatae suscipit corporis ea exercitationem
            rerum. Earum harum qui in. Repellendus error deleniti.
        </p>
    </article>

    <p>
        Estamos estudando css 3
    </p>
    <script> </script>
>>>>>>> feature/webdesing
</body>

</html>