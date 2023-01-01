<?php

/*
* Template Name: Blank Template
*/

get_header();
?>
<section class="page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 bt-content-wrap">                      
                <div class="article-wrap">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        // End the loop.
                    endwhile;
                    ?>
                </div>
            </div><!-- bt-content-wrap -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- listing-wrap -->
<?php
get_footer();

