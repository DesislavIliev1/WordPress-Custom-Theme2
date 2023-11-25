

<?php get_header(); ?>
<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); 

     get_template_part('templates/blog', 'page');
     get_template_part('templates/contact', 'page') 
     ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>



