<?php
  get_header();

  while(have_posts()) {
    the_post(); ?>

    <div class="container-fluid bg-primary text-white text-center newsletter-message-container flex-column">
      <div class="w-md-75"><?php the_content(); ?></div>
      <a href="<?php echo get_site_url(); ?>" class="btn btn-light my-4">Home</a>
    </div>

<?php
  }

  get_footer();