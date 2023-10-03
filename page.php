<?php get_header(); ?>
<main>
  <section class="content-thin">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article">
        <div id="pagetitle">
          <h2><?php the_title(); ?></h2>
        </div>
        <?php the_content(); ?>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>No page found</p>
      </article>
<?php endif; ?>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>