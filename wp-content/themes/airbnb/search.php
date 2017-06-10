<?php get_header(); ?>
<main>
  <div id="algolia-search-box">
    <div id="algolia-stats"></div>
    <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false" style="fill: #2b2b2b;height: 20px;width: 20px;">
      <path fill-rule="evenodd" d="M23.53 22.47l-6.807-6.808A9.455 9.455 0 0 0 19 9.5 9.5 9.5 0 1 0 9.5 19c2.353 0 4.502-.86 6.162-2.277l6.808 6.807a.75.75 0 0 0 1.06-1.06zM9.5 17.5a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path>
    </svg>
		<input autocapitalize="off" autocomplete="off" autocorrect="off" placeholder="Search" role="textbox" spellcheck="false" type="search"
			 value="" class="ais-search-box--input"></div>
  </div>
  <nav id="ais-facets">
    <div id="facet-post-types">
      <div class="ais-root ais-menu">
        <div class="ais-body ais-menu--body">
          <div class="ais-menu--list">
            <div class="ais-menu--item ais-menu--item__active">
              <a class="ais-menu--link" href="">All</a>
            </div>
            <div class="ais-menu--item">
              <a class="ais-menu--link" href="">Articles</a>
            </div>
            <div class="ais-menu--item">
              <a class="ais-menu--link" href="">Events</a>
            </div>
            <div class="ais-menu--item">
              <a class="ais-menu--link" href="">Videos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div id="algolia-hits">
    <div>
      <div class="ais-infinite-hits">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="ais-infinite-hits--item">
            <article itemtype="http://schema.org/Article" .="" class="list-post">
              <a class="thumb-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>">
                <div class="cover-image" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
              </a>
              <div class="card">
                <a class="h-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="<?php the_title(); ?>" itemprop="url">
                  <h2 itemprop="name headline"><?php the_title(); ?></h2>
                </a>
                <div class="meta">
                  <p>
                    <h3><?php the_excerpt(); ?></h3>
                  </p>
                  <div class="ais-hits--tags" style="display:none">
                  </div>
                </div>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      </div>
			<div class="container">
					<a class="btn-infinite infinite-load-more" 
							data-page="1"
							data-posttypes="post,videos,collections" 
							data-term="" 
							data-total="12" 
							data-url="<?php echo admin_url('admin-ajax.php') ?>">
									More
					</a>
					<div id="spinner">
							<div id="spriteContainer"></div>
					</div>
			</div>
      <!--<div class="ais-infinite-hits--showmore"><button>More</button></div>-->
    </div>
  </div>
</main>
<?php
get_footer();
