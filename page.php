<?php get_header(); ?>

<header class="page-header-container">
    <h1 class="page-header-heading"><?php the_title(); ?></h1>
    <p class="page-header-blurb">
        <?php
        if (has_excerpt()) {
            echo get_the_excerpt();
        } else {
            echo 'Default blurb text goes here. You can replace this with a custom field or excerpt.';
        }
        ?>
    </p>
    <div class="page-header-bg-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/beans.webp" alt="" class="page-header-bg-img">
    </div>
    <div class="page-header-bg-overlay"></div>
</header>

<main id="main" class="page-main-content-container" role="main">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
    <?php
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>