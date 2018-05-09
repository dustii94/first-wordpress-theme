<?php get_header(); ?>

<section class="content">
  <div class="container">
    <h1 class="text-center"><?php single_cat_title(); ?></h1>
    <p><?php echo category_description(); ?></p>
    <hr />
  </div>
  <div class="container row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="box col-4">
        <h2><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>"><?php the_title(); ?></a></h2>
        <p class="content-meta"><strong class="author">Author:</strong> <?php the_author(); ?> <br /> <strong class="published">Published:</strong> <?php echo get_the_date(); ?></p>
        <?php the_excerpt(); ?>
      </div>
    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, there are no posts here right now. Try something else.' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
