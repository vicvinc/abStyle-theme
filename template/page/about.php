<main>
  <section class="about-page">
    <?php while ( have_posts() ) : the_post();
      the_title('<h1>', '</h1>');
      the_content();
    endwhile;?>
  </section>
</main>