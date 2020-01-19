<?php
$msg = 0;
$msg = $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
    <head>
        <title> Entre em contato - Vinícius Saurin</title>
        <meta name = 'description' content = 'Este site tem como objetivo apresentar o portfólio de trabalhos de Vinícius Saurin'>  <!-- Descrição do site -->
        <meta name = 'keywords' content = 'machine-learning machine learning data-science data science'> <!-- Palavras chave para os motores de busca -->
        <meta name = 'robots' content = 'index, follow'> <!-- Google indexa o site -->
        <meta charset= 'utf-8'> <!-- Compreender simbolos do português -->
        <meta name = 'author' content = 'Vinícius Saurin'> <!-- Autor do site -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://www.viniciussaurin.com.br/contato.php">
        <link rel="apple-touch-icon" sizes="180x180" href="/medias/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/medias/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/medias/favicon/favicon-16x16.png">
        <link rel="manifest" href="/medias/favicon/site.webmanifest">
        <link rel="mask-icon" href="/medias/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/medias/favicon/favicon.ico">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-config" content="/medias/favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <link rel = 'stylesheet' href='css/contato.css' type = 'text/css'>
        <link rel = 'stylesheet' href='css/fontawesome-free-5.11.2-web/css/all.min.css' type = 'text/css'>
        <link rel = 'stylesheet' href='css/fontawesome-free-5.11.2-web/css/brands.min.css' type = 'text/css'>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel = 'stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type = 'text/css'>
    </head>
    <body> 
        <div class="wrapper">
            <nav class="flex-nav">
                <a href="#" class="toggleNav"> ☰ Menu</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="portfolio_crise_diesel.php">Portfólio</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li class="social">
                        <a href="https://www.linkedin.com/in/vinicius-saurin-594352197/">
                            <i class="fa fa-linkedin">
                            </i>
                        </a>
                    </li>
                    <li class="social">
                            <a href="https://github.com/vinisaurin/">
                                <i class="fa fa-github">
                                </i>
                            </a>
                    </li>
                    <!--
                    <li class="social">
                        <a href="https://www.hackerrank.com/vinisaurin">
                            <i class="fab fa-hackerrank">
                            </i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://www.freecodecamp.org/vinisaurin">
                            <i class="fab fa-free-code-camp">
                            </i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://www.kaggle.com/vinciussaurin">
                            <i class="fab fa-kaggle">
                            </i>
                        </a>
                    </li>
                    <li class="social">
                        <a href="https://stackoverflow.com/users/12397607/vinisaurin">
                            <i class="fab fa-stack-overflow">
                            </i>
                        </a>
                    </li>
                    -->
                </ul>
            </nav>
        </div>
        
        <div class="contatos">
            <?php if($msg==enviado):?>
                <h1>Mensagem enviada, agradecemos o seu contato!</h1>
                   
            <?php else: ?>
            <section id="contato">
                <fieldset>
                    <h2>Preencha aqui o formulário</h2>
                    <form action="send_email.php" method="POST">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                        <br>
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" placeholder="Digite seu email" required>
                        <br>
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone">
                        <br>
                        <label for="mensagem">Mensagem</label>
                        <textarea rows="4"  name="mensagem" id="mensagem" placeholder="Digite sua mensagem" required></textarea>
                        <button type="submit">Enviar</button>
                        <br>
                    </form>
                </fieldset>
            </section>
            <?php endif; ?>

            
            <section id="informacoes">
                <div class="detalhes">
                    <h2>Contatos</h2>
                    <p>Nome: Vinícius Rea Saurin</p>
                    <p>Idade: 29 anos</p>
                    <p>Nacionalidade: Brasileira/Italiana</p>
                    <p>E-mail: vinisaurin@gmail.com</p>
                    <p>Linkedin: <a href="https://www.linkedin.com/in/vinicius-saurin-594352197/">/vinicius-saurin-594352197/</a> </p>
                    <p>GitHub: <a href="http://github.com/vinisaurin/">vinisaurin</a> </p>
                    <p>Skype: vinisaurin</p>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235231.5856789882!2d-47.17112196601921!3d-22.8951606222319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8f6a2552649%3A0x7475001c58043536!2sCampinas%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1574007833767!5m2!1spt-BR!2sbr" 
                        width="100%" height="306" frameborder="0" style="border:0;" allowfullscreen="">
                    </iframe>
                </div>
            </section>
        </div>
        <footer>
            <p> Vinícius Saurin &copy; 2020</p>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            $(function() {
                $('.toggleNav').on('click', function(){
                    $('.flex-nav ul').toggleClass('open');
                    // $('.flex-nav ul').slideToggle();
                });
            });
        </script>
    </body>
</html>