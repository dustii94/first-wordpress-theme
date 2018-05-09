<?php get_header(); ?>

<section id="showcase">
  <div class="layer">
    <div class="container">
      <h1>My Opinions on Stuff</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo repellat incidunt quasi quibusdam non nostrum, dolorem molestiae enim, excepturi soluta libero voluptatem provident consectetur accusamus nulla repudiandae nobis. Excepturi, assumenda.</p>
    </div>
  </div>
</section>

<section class="content">
  <div class="container">
    <h1 class="text-center">Latest Content</h1>
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
      <p><?php esc_html_e( 'Sorry, there are no posts here right now.' ); ?></p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
