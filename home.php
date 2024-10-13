<?php get_header(); ?>
<!--Hero Section Start-->
<header class="hero-container">
    <video class="hero-bg-container" muted autoplay loop>
        <source src="<?php echo get_template_directory_uri(); ?>/src/assets/video/herobg.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div>
    <div class="text-container">
        <h1 class="hero-title">LOREM IPSUM</h1>
        <p class="hero-tagling">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti reiciendis.</p>
        <div class="cta-container">
            <a href="/" class="cta-link">Call to Action</a>
        </div>
    </div>
    <div class="hero-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/bgblob.svg" alt="" class="hero-img">
    </div>
</header>
<!--Hero Section End-->

<main class="main-content-container">
    <!--Offer Section Start-->
    <section class="offer-section-container">
        <div class="offer-section-img-container">
            <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/barista.svg" alt="" class="offer-section-img">
        </div>
        <div class=" offer-section-text-container">
            <h2 class="offer-heading">Lorem Ipsum Dolor</h2>
            <p class="offer-section-blurb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ratione esse autem incidunt molestiae atque?</p>
            <a href="/" class="offer-section-link">Lorem Ipsum Dolor</a>
        </div>
    </section>

    <!--Offer Section End-->
    <!--Services Section Start-->
    <section class="services-section-container">
        <header class="services-section-header">
            <h2>Lorem Ipsum</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat eos sit tempora? Aut dolorem similique placeat porro cum ipsa nisi culpa, voluptates incidunt eligendi deleniti!</p>
        </header>
        <div class="services-section-service-cards-container">
            <article class="service-card">
                <div class="service-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/coffee.svg" alt="" class="service-card-img">
                </div>
                <div class="service-card-text-container">
                    <p class="service-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae magni consequatur suscipit a iusto?</p>

                    <a href="/" class="service-card-heading">
                        <h3>Lorem Ipsum</h3>
                    </a>
                </div>
            </article>
            <article class="service-card">
                <div class="service-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/coffee.svg" alt="" class="service-card-img">
                </div>
                <div class="service-card-text-container">
                    <p class="service-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae magni consequatur suscipit a iusto?</p>
                    <a href="/" class="service-card-heading">
                        <h3>Lorem Ipsum</h3>
                    </a>
                </div>
            </article>
            <article class="service-card">
                <div class="service-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/assets/img/coffee.svg" alt="" class="service-card-img">
                </div>
                <div class="service-card-text-container">
                    <p class="service-card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, recusandae magni consequatur suscipit a iusto?</p>

                    <a href="/" class="service-card-heading">
                        <h3>Lorem Ipsum</h3>
                    </a>
                </div>
            </article>
        </div>
    </section>
    <!--Services Section End-->
    <!--Info Section Start-->
    <section class="info-section-container">
        <header class="info-section-header">
            <h2 class="inf0-section-heading">INFO LINKS</h2>
        </header>
        <section class="info-links-section">
            <nav class="info-link-container">
                <h3 class="info-links-heading">Topic/Category</h3>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
            </nav>
            <nav class="info-link-container">
                <h3 class="info-links-heading">Topic/Category</h3>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
            </nav>
            <nav class="info-link-container">
                <h3 class="info-links-heading">Topic/Category</h3>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
            </nav>
            <nav class="info-link-container">
                <h3 class="info-links-heading">Topic/Category</h3>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
            </nav>
            <nav class="info-link-container">
                <h3 class="info-links-heading">Topic/Category</h3>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
                <a href="/" class="info-link">Info Link</a>
            </nav>
        </section>
    </section>
    <!--Info Section End-->
</main>

<?php get_footer(); ?>