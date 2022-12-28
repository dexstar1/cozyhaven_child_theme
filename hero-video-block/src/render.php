
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Hero Video Block – hello from a dynamic block!', 'hero-video-block' ); ?>
</p>

<section class="listing-wrap">
    <div class="container">
        
        <div class="page-title-wrap">
            <?php get_template_part('template-parts/page/breadcrumb'); ?> 
            
        </div><!-- page-title-wrap -->

        <div class="row">
            <div class="col-lg-8 col-md-12 bt-content-wrap right-bt-content-wrap">

                <div class="agents-list-view">

                            <?php get_template_part('template-parts/realtors/agency/list'); ?>

                </div><!-- listing-view -->
                
                <?php houzez_pagination( $wp_query->max_num_pages ); wp_reset_query(); ?>

            </div><!-- bt-content-wrap -->
            <div class="col-lg-4 col-md-12 bt-sidebar-wrap left-bt-sidebar-wrap <?php if( $sticky_sidebar['agency_sidebar'] != 0 ){ echo 'houzez_sticky'; }?>">
                <?php get_sidebar('agencies'); ?>
            </div><!-- bt-sidebar-wrap -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- listing-wrap -->