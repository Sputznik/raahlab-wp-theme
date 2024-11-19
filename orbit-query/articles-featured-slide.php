<div id="<?php _e( $atts['id'] );?>" data-target="<?php _e('div.rahlb-slide-body');?>" data-url="<?php _e( $atts['url'] );?>" class="articles-rahlb-slide">
  <?php while( $this->query->have_posts() ) : $this->query->the_post(); ?>
    <?php
      $current_post   = $this->query->post;
      $slide_headline = "";
      $more_posts_url = "";
      $permalink      = get_the_permalink();
      $thumbnail      = wp_get_attachment_image_src( get_post_thumbnail_id( $current_post->ID ), 'full' )[0];
      $background_img = !empty( $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";

      if( has_category('events', $current_post->ID ) ){
        $slide_headline = "Events";
        $more_posts_url = "https://raahlab.org/events/";
      } else if( has_category('publications', $current_post->ID ) ){
        $slide_headline = "Publications";
        $more_posts_url = "https://raahlab.org/publications/";
      }
    ?>
    <div class="rahlb-slide-body">
      <div class="col-left">
        <?php if( $background_img ): ?>
        <div class="orbit-thumbnail-bg" <?php _e( $background_img ); ?>>
          <a href="<?php _e( $permalink );?>"></a>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-right">
        <div class="post-desc">
          <div class="rahlb-headline-wrapper">
            <span class="slide-headline">Featured <?php _e( $slide_headline );?></span>
          </div>
          <h3 class="post-title"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
          <div class="post-excerpt"><?php the_excerpt(); ?></div>
          <a href="<?php _e( $permalink );?>" class="learn-more">Learn More</a>
          <?php if( $more_posts_url && $slide_headline ): ?>
            <span> | </span><a href="<?php _e( $more_posts_url );?>" class="more-posts-page"><?php echo "More ".$slide_headline; ?></a>
          <?php endif;?>
        </div>
      </div>
    </div>
  <?php endwhile;?>
</div>
