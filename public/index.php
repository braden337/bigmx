<?php include('header.php') ?>


<?php if (have_posts()) :  ?>

    <?php while (have_posts()) : the_post() ?>
        <div <?php post_class() ?>>
            <h1><a href="<?= the_permalink() ?>"><?php the_title() ?></a></h1>
            <p><?php the_excerpt() ?></p>
        </div>

    <?php endwhile ?>

    <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
    <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div>

<?php else : ?>

    <h1>No Posts</h1>

<?php endif ?>


<?php include('footer.php') ?>