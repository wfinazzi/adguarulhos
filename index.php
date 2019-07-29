
<?php get_header(); ?>
    <div class="container">
        <section class="secao">
            <div id="carousel-slide" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slide" data-slide-to="1"></li>
                    <li data-target="#carousel-slide" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="carousel-img" class="carousel-img" src="<?php bloginfo("template_directory"); ?>/public/img/escudos.png" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                        <img id="carousel-img" class="carousel-img" src="<?php bloginfo("template_directory"); ?>/public/img/comemoracao.png" alt="Second Slide">
                    </div>
                    <div class="carousel-item">
                        <img id="carousel-img" class="carousel-img" src="<?php bloginfo("template_directory"); ?>/public/img/time.png" alt="Third Slide">
                    </div>
                </div>
                <a class="carousel-control-prev carrossel-botao" href="#carousel-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next carrossel-botao" href="#carousel-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </section>

        <section class="secao">
            <div class="row titulo-site">
                <h1>
                    <span class="titulo-pagina">Notícias</span>
                </h1>
            </div>

            <div class="noticias">
                <div class="bloco-inferior row">
                    <div class="noticias">

                        <div class="noticia">
                            <img class="img-noticias" src="<?php bloginfo("template_directory"); ?>/public/img/noticias/treinador-edu-miranda-fpf.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Treinador Edu Miranda que se encontra na sede da
                                    Federação Paulista de Futebol</a>
                            </div>
                        </div>

                        <div class="noticia">
                            <img class="img-noticias" src="<?php bloginfo("template_directory"); ?>/public/img/noticias/insper-analise-investimentos.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Guarulhos e Insper fazem parceria para análise e
                                    investimentos no futebol</a>
                            </div>
                        </div>

                        <div class="noticia">
                            <img class="img-noticias" src="<?php bloginfo("template_directory"); ?>/public/img/noticias/treino-campeonato-sub20-paulista.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Guarulhos se prepara para Paulista Sub-20
                                    da Segunda Divisão.</a>
                            </div>
                        </div>

                        <div class="noticia">
                            <img class="img-noticias" src="<?php bloginfo("template_directory"); ?>/public/img/noticias/preparacao-sub20-paulista.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Visando o Campeonato Paulista Sub-20 da 2°
                                    Divisão 2019.</a>
                            </div>
                        </div>

                        <div class="noticia">
                            <img class="img-noticias"
                                src="<?php bloginfo("template_directory"); ?>/public/img/noticias/reapresentação-estadio-cicero-miranda.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Time da Cidade se reapresenta no Cícero
                                    Miranda.</a>
                            </div>
                        </div>

                        <div class="noticia">
                            <img class="img-noticias" src="<?php bloginfo("template_directory"); ?>/public/img/noticias/guarulhos-perde-de-marilia.jpg" />
                            <div class="chamada-noticia">
                                <a class="texto-noticia" href="#">Polêmica na arbitragem, Guarulhos é superado pelo
                                    placar mínimo em Marília-SP.</a>
                            </div>
                        </div>

                    </div>
                </div>
        </section>

        <section class="secao">
            <div class="row titulo-site">
                <h1>
                    <span class="titulo-pagina">Campeonato Paulista</span>
                </h1>
            </div>

            <div class="row bloco-tabela">
                <table class="tabela-classificacao">
                    <thead>
                        <tr class="tabela-titulo">
                            <th colspan="9">SÉRIE B1 - 1ª FASE</th>
                        </tr>
                        <tr>
                            <th class="col-peq dados-classificacao">Class</th>
                            <th class="col-times dados-classificacao">Times</th>
                            <th class="col-peq dados-classificacao">Pts</th>
                            <th class="col-peq dados-classificacao">V</th>
                            <th class="col-peq dados-classificacao">E</th>
                            <th class="col-peq dados-classificacao">D</th>
                            <th class="col-peq dados-classificacao">GP</th>
                            <th class="col-peq dados-classificacao">GC</th>
                            <th class="col-peq dados-classificacao">SD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-times dados-classificacao">FLAMENGO</td>
                            <td class="col-peq dados-classificacao">23</td>
                            <td class="col-peq dados-classificacao">7</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-peq dados-classificacao">20</td>
                            <td class="col-peq dados-classificacao">12</td>
                            <td class="col-peq dados-classificacao">8</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-times dados-classificacao">USAC</td>
                            <td class="col-peq dados-classificacao">22</td>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">20</td>
                            <td class="col-peq dados-classificacao">16</td>
                            <td class="col-peq dados-classificacao">4</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-times dados-classificacao">GUARULHOS</td>
                            <td class="col-peq dados-classificacao">21</td>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-peq dados-classificacao">15</td>
                            <td class="col-peq dados-classificacao">8</td>
                            <td class="col-peq dados-classificacao">7</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-times dados-classificacao">MAUAENSE</td>
                            <td class="col-peq dados-classificacao">20</td>
                            <td class="col-peq dados-classificacao">5</td>
                            <td class="col-peq dados-classificacao">5</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">16</td>
                            <td class="col-peq dados-classificacao">8</td>
                            <td class="col-peq dados-classificacao">8</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">5</td>
                            <td class="col-times dados-classificacao">MAUÁ FC</td>
                            <td class="col-peq dados-classificacao">16</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">10</td>
                            <td class="col-peq dados-classificacao">13</td>
                            <td class="col-peq dados-classificacao">-3</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-times dados-classificacao">BARCELONA</td>
                            <td class="col-peq dados-classificacao">10</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-peq dados-classificacao">11</td>
                            <td class="col-peq dados-classificacao">18</td>
                            <td class="col-peq dados-classificacao">-7</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">7</td>
                            <td class="col-times dados-classificacao">JABAQUARA</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">0</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">10</td>
                            <td class="col-peq dados-classificacao">8</td>
                            <td class="col-peq dados-classificacao">25</td>
                            <td class="col-peq dados-classificacao">-17</td>
                        </tr>

                    </tbody>
                </table>
                <table class="tabela-classificacao">
                    <thead>
                        <tr class="tabela-titulo">
                            <th colspan="9">SÉRIE B1 - 2ª FASE</th>
                        </tr>
                        <tr>
                            <th class="col-peq dados-classificacao">Class</th>
                            <th class="col-times dados-classificacao">Times</th>
                            <th class="col-peq dados-classificacao">Pts</th>
                            <th class="col-peq dados-classificacao">V</th>
                            <th class="col-peq dados-classificacao">E</th>
                            <th class="col-peq dados-classificacao">D</th>
                            <th class="col-peq dados-classificacao">GP</th>
                            <th class="col-peq dados-classificacao">GC</th>
                            <th class="col-peq dados-classificacao">SD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-times dados-classificacao">MARÍLIA</td>
                            <td class="col-peq dados-classificacao">8</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">0</td>
                            <td class="col-peq dados-classificacao">5</td>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-peq dados-classificacao">2</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-times dados-classificacao">GUARULHOS</td>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">0</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">7</td>
                            <td class="col-peq dados-classificacao">7</td>
                            <td class="col-peq dados-classificacao">0</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">3</td>
                            <td class="col-times dados-classificacao">RIO BRANCO</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-peq dados-classificacao">2</td>
                            <td class="col-peq dados-classificacao">7</td>
                            <td class="col-peq dados-classificacao">5</td>
                            <td class="col-peq dados-classificacao">2</td>
                        </tr>
                        <tr>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-times dados-classificacao">JOSEENSE</td>
                            <td class="col-peq dados-classificacao">4</td>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-peq dados-classificacao">1</td>
                            <td class="col-peq dados-classificacao">6</td>
                            <td class="col-peq dados-classificacao">10</td>
                            <td class="col-peq dados-classificacao">-4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="secao">
            <div class="row titulo-site">
                <h1>
                    <span class="titulo-pagina">Patrocinadores</span>
                </h1>
            </div>

            <div class="row patrocinadores">
                <a href="https://www.generalbrands.com.br/nossas_marcas/camp" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/camp.png" />
                </a>
                <a href="https://www.karina.com.br/" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/karina.png" />
                </a>
                <a href="https://www.perutur.com.br/a-empresa" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/logo-perutur-600x350.png" />
                </a>
                <a href="http://www.shoppingbonsucesso.com.br/" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/logo-shopping-bonsucesso-lg.JPG" />
                </a>
                <a href="https://www.guarulhos.sp.gov.br/" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/logos_pmg_2017_.jpg" />
                </a>
                <a href="https://muracasports.com.br/" target="_blank" class="link-marcas">
                    <img class="img-patrocinador" src="<?php bloginfo("template_directory"); ?>/public/img/patrocinadores/logotipo-muraca.png" />
                </a>
            </div>
        </section>
    </div>
    <?php get_footer(); ?>