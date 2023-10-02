<?php get_header(); ?>
<main>
  <section class="content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article">
        <header>
          <h2><?php the_title(); ?></h2>
          By: <?php the_author(); ?>
        </header>
<p><?php the_date(); ?></p>
<p><?php the_field('number'); ?></p>
<div>
<?php the_field('it_works'); ?>
</div>
       <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found!</p>
      </article>
<?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>