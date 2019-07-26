<?php get_header(); ?>
 

 


<div class="container d-flex">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-10">
            <section class="secao">
                <div class="row titulo-site">
                    <h1>
                        <span class="titulo-pagina"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
                    </h1>
                    
                    
                </div>
                <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>

                <article class="texto">   
                    <p><?php the_content(); ?></p>                 
                </article>
            </section>
            <?php comments_template(); ?>
        </div>
        
                     
<?php endwhile; else: ?>
    <div class="artigo">
        <h2>Nada Encontrado</h2>
        <p>Erro 404</p>
        <p>Lamentamos mas não foram encontrados artigos.</p>
    </div>            
<?php endif; ?>
        <?php get_sidebar(); ?>
       
    </div>

    <?php get_footer(); ?>