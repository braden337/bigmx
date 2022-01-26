<?php include('header.php') ?>


<?php if (have_posts()) :  ?>

    <?php while (have_posts()) : the_post() ?>

        <div <?php post_class() ?>>
            <h1><a href="<?= the_permalink() ?>"><?php the_title() ?></a></h1>
            <p><?php the_excerpt() ?></p>
        </div>

    <?php endwhile ?>

    <div class="previous"><?php next_posts_link('Older posts'); ?></div>
    <div class="next"><?php previous_posts_link('Newer posts'); ?></div>

<?php else : ?>

    <h1>No Posts</h1>

<?php endif ?>


<?php include('footer.php') ?>

Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi eos provident porro distinctio harum, error praesentium eius. Cumque veritatis nam ducimus commodi obcaecati officiis, sed rem pariatur laudantium odit ad dolorem laborum maiores quis voluptatem! Fugiat similique, deleniti velit qui voluptatum cupiditate repellendus consectetur blanditiis voluptatem fuga sapiente obcaecati, dolore numquam non iure at, tenetur mollitia rerum eos soluta? Ea, maiores asperiores odio saepe similique ut dolorem, accusamus quia praesentium labore repellendus quibusdam omnis autem corrupti? Quibusdam non mollitia molestias in iure doloribus officia veritatis labore reprehenderit. Provident minus, similique libero velit facere voluptatem atque reiciendis architecto aspernatur quis eos fuga corporis soluta maiores adipisci quia qui eius dolorem error dicta vero. Quo cumque tempore, facilis reprehenderit officiis inventore perspiciatis accusamus nesciunt! Voluptates officia sequi distinctio accusantium repudiandae atque velit, quisquam ducimus tempore ratione voluptatem unde est? Ratione vitae quas consequatur cupiditate deleniti a nisi ab nam architecto doloribus, modi, nihil eius accusantium provident molestias iste esse ipsa magnam aliquid repellat asperiores eaque, sit sint eos. Saepe id perferendis quis sed, non nesciunt quo laborum porro quos molestias illo sint placeat provident et nam expedita! Possimus repellat, debitis, maiores esse nesciunt qui delectus modi cupiditate aliquid quae iusto exercitationem mollitia!