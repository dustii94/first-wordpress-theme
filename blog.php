<?php
/*
 * Template Name: Blog
 * Template Post Type: page
 */

get_header();
?>

 <section class="content">
   <div class="container">
     <h1 class="text-center"><?php the_title(); ?></h1>
     <hr />
   </div>
   <div class="container row">
     <?php $catquery = new WP_Query( array( 'category_name' => 'blog' ) ); ?>
     <?php if ( $catquery->have_posts() ) : while($catquery->have_posts()) : $catquery->the_post(); ?>
       <div class="box col-4">
         <h2><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Monthly Events' ) ) ); ?>"><?php the_title(); ?></a></h2>
         <p class="content-meta"><strong class="author">Author:</strong> <?php the_author(); ?> <br /> <strong class="published">Published:</strong> <?php echo get_the_date(); ?></p>
         <?php the_content(); ?>
       </div>
     <?php endwhile; else : ?>
       <p><?php esc_html_e( 'Sorry, there are no posts here right now. Try something else.' ); ?></p>
     <?php endif; ?>
   </div>
 </section>

<?php get_footer(); ?>
