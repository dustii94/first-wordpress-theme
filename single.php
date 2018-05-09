<?php

 get_header();  ?>

 <section class="content">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <div class="page">
         <h1 class="text-center"><?php the_title(); ?></h1>
         <p><strong class="author">Author:</strong> <?php the_author(); ?> &nbsp; &nbsp; <strong class="published">Published:</strong> <?php the_date(); ; ?></p>
         <hr />
         <p class="text-center"><?php the_content(); ?></p>
       </div>
     <?php endwhile; else : ?>
       <p><?php esc_html_e( 'Sorry, no posts found.' ); ?></p>
     <?php endif; ?>
 </section>

 <?php get_footer(); ?>
