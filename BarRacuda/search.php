<?php

    // Aquí tenemos que anexar header.php
    get_header();

    // Número de resultados encontrados
    $result_number = $wp_the_query->found_posts;

    // Palabras buscadas
    if ( isset($_GET['s']) && !empty($_GET['s']) ) {

        $search_words = esc_html($_GET['s']);

    } else {

        $search_words = "All Posts";

    }

?>


<!-- Preloader-->
<!--
<div class="page-loader">
    <div class="loader"></div>
</div>
-->
<!-- Preloader end-->


<!-- Header-->
<header class="header">

    <!-- Top bar-->
    <div class="top-bar">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">

                    <ul class="list-left-align">

                        <li>Mon - Fri: 07:00 am - 05:00 pm</li>

                        <li>
                            <abbr title="Phone">P:</abbr>
                            +39 02 87 21 43 19
                        </li>

                        <li>
                            <a href="#" data-color="#e1be64">Demos</a>
                        </li>

                    </ul>

                </div>


                <div class="col-md-6">

                    <ul class="top-bar-tools">

                        <li>
                            <a class="open-offcanvas" href="#">
                                <i class="ti-menu"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ti-search"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="ti-user"></i>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>


    <div class="navigation navigation-center">

        <div class="container-fluid">


            <!-- Brand-->
            <div class="inner-header">

                <a class="inner-brand" href="<?php echo home_url(); ?>">

                    <img
                        class="brand-dark"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                        width="74px"
                        alt="">

                    <img
                        class="brand-light"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png"
                        width="74px"
                        alt="">

                </a>

            </div>


            <!-- Navigation-->
            <?php get_template_part('nav'); ?>


        </div>

    </div>

</header>
<!-- Header end-->


<!-- Wrapper-->
<div class="wrapper">


    <!-- Results-->
    <section
        class="module parallax"
        data-background="<?php echo get_template_directory_uri(); ?>/assets/images/module-4.jpg"
        data-overlay="0.7">

        <div class="container">

            <div class="row">

                <div class="col-md-6 m-auto">

                    <div class="text-center">


                        <h1 class="display-1">

                            Results for: <?php echo $search_words; ?>

                        </h1>


                        <p class="lead">

                            <?php echo $result_number; ?> posts found

                        </p>


                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Results end-->


    <!-- Search results-->
    <section class="module">

        <div class="container">

            <div class="row">

                <div class="col-md-8 m-auto">

                    <div class="menu-simple">


                        <?php

                        if ( have_posts() ):

                            while ( have_posts() ):

                                the_post();

                        ?>


                                <div class="menu-simple-item">


                                    <?php if ( has_post_thumbnail() ): ?>

                                        <div class="menu-simple-item-img">

                                            <a href="<?php the_permalink(); ?>">

                                                <img
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="">

                                            </a>

                                        </div>

                                    <?php endif; ?>


                                    <div class="menu-simple-item-inner">


                                        <h6>

                                            <span>

                                                <a href="<?php the_permalink(); ?>">

                                                    <?php the_title(); ?>

                                                </a>

                                            </span>

                                        </h6>


                                        <p>

                                            <?php the_category(' & '); ?>

                                        </p>


                                    </div>


                                </div>


                        <?php

                            endwhile;

                        endif;

                        ?>


                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Search results end-->


    <svg
        class="footer-circle"
        xmlns="http://www.w3.org/2000/svg"
        version="1.1"
        width="100%"
        height="100"
        viewbox="0 0 100 100"
        preserveaspectratio="none">

        <path d="M0 100 C40 0 60 0 100 100 Z"></path>

    </svg>


</div>
<!-- Wrapper end-->


<?php

    // Aquí tenemos que anexar footer.php
    get_footer();

?>