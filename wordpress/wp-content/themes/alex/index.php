<?php get_header(); ?>


  <section id='hero'>
      <article>
          <h1>Webdesing mit </h1>
          <h1>Sinn und Zweck</h1>
          <h1> und XYZ</h1>
      </article>
          <button type = 'button'>Angebot einholen</button>
  </section>

  <section id='leistungen'>
      <h1>Leistungen</h1>
      <ul id='leistungelements'>
          <li><a href='#'>
              <p>Design</p>
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/design.svg' alt='brush cup'>
          </a></li>
          <li><a href='#'>
              <p>Strategie</p>
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/strategy.svg' alt='target'>
          </a></li>
          <li><a href='#'>
              <p>Consulting</p>
              <img src='<?php echo get_template_directory_uri(); ?>/images/icons/consulting.svg' alt='light bulb'>
          </a></li>
      </ul>
  </section>


<?php $news_query = new WP_Query( array( 'category_name' => 'news' ) ); ?>
<?php if ( $news_query->have_posts() ) : ?>

  <section id='news'>
   <h1>News</h1>
    <ul id='newselements'>
      <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
        <li>
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
          <a href='<?php the_permalink(); ?>'>mehr</a>
        </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </ul>
    <?php else : ?>
    <p><?php _e( 'Bald kommen News!' ); ?></p>
    <?php endif; ?>
 </section>





 <?php $referenzen_query = new WP_Query(  array( 'category_name' => 'referenzen'  ) ); ?>
 <?php if ( $referenzen_query->have_posts() ) : ?>

  <section id='referenzen'>
      <h1>Referenzen</h1>
      <ul id='referencelements'>
        <?php $i = 1;
         while ( $referenzen_query->have_posts() ) : $referenzen_query->the_post(); ?>
          <li>
              <img src='<?php echo get_template_directory_uri(); ?>/images/avatar/avatar<?php echo $i; $i++ ?>.svg' alt='avatar'>
              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <a href='<?php the_permalink(); ?>'>mehr</a>
          </li>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </ul>
      <?php else : ?>
      <p><?php _e( 'Bald kommen Referenzen' ); ?></p>
      <?php endif; ?>
   </section>




  <?php get_footer(); ?>
