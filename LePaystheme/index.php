<?php get_header() ?>


<h1>BIENVENUE DANS LE PAYS, VOICI NOS DERNIERS ARTICLES</h1>
<!-- BOUCLE POUR L'AFFICHAGE DES ARTICLES -->
<?php if (have_posts()) :?>
    <?php while (have_posts()) : the_post();?>

        <div class="card">
            <?php
                // Afficher les thumbnail (spécialement pour pouvoir charger l'image du post)
                if (has_post_thumbnail()) :?>

            <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_content('En voir plus'); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-link">Lire plus</a>
            </div>
        </div>

    <?php endwhile; ?>
        
    
<?php endif;?>


<!-- Partie dédiée aux évenements -->
<div class="post">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><?php the_content(); ?></p>
  <p>Date de l'événement : <?php echo get_post_meta(get_the_ID(), 'date_evenement', true); ?></p>
</div>

<?php get_footer() ?>
