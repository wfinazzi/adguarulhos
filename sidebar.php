<div class="patrocinadores-barra-lateral col-2 d-flex flex-column justify-content-between">
    <?php query_posts(array('post_type' => array('patrocinador'))); ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
    <?php the_post(); ?>
    <a href="<?php the_field('site_do_patrocinador'); ?>" target="_blank" class="link-marcas">
        <img class="img-patrocinador-barra-lateral" src="<?php the_field('imagem_do_patrocinador'); ?>" />
    </a>
    <?php endwhile; ?>
    <?php else: ?>
    <h1>Estamos sem patrocinadores no momento.</h1>
    <?php endif; ?>
</div>