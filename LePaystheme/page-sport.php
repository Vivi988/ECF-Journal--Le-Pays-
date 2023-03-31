<?php
/*
Template Name: Sport
*/
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'Sport',
      );
      $query = new WP_Query( $args );
      ?>

      <?php if ( $query->have_posts() ) : ?>

        <h1>Articles de la catégorie <?php single_cat_title(); ?></h1>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="meta"><?php the_time('F jS, Y'); ?> par <?php the_author_posts_link(); ?></p>
          <?php the_excerpt(); ?>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>

        <p>Il n'y a pas encore d'articles dans cette catégorie.</p>

      <?php endif; ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
