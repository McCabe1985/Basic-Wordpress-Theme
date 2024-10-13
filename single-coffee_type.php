<?php get_header(); ?>

<header class="page-header-container">
    <?php
    // Start the loop to get the coffee type post data
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1 class="coffee-page-title"><?php the_title(); ?></h1>
            <div class="coffee-page-content"><?php the_content(); ?></div> <!-- Display the main content -->
    <?php endwhile; // End of the loop 
    else :
        echo '<p>No coffee types found.</p>'; // Message if no posts are found
    endif;
    ?>
    <div class="page-header-bg-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/beans.webp" alt="" class="page-header-bg-img">
    </div>
    <div class="page-header-bg-overlay"></div>
</header>

<main class="main-content-container">
    <section class="coffee-entry-container">
        <div class="coffee-entry-img-container">
            <?php

            $coffee_image = get_field('coffee_image');
            if ($coffee_image) {

                echo '<img src="' . esc_url($coffee_image['url']) . '" alt="' . esc_attr($coffee_image['alt']) . '" />';
            } else {
                echo '<p>No image available.</p>';
            }
            ?>
        </div>

        <article class="coffee-entry-origin-container">
            <?php
            $coffee_origin = get_field('coffee_origin');
            if ($coffee_origin) {
                echo '<p>Origin: ' . esc_html($coffee_origin) . '</p>';
            } else {
                echo '<p>No origin specified.</p>';
            }
            ?>
        </article>
    </section>
</main>

<?php get_footer(); ?>