<?php get_header(); ?>
<main>
  <div id="algolia-search-box">
    <div id="algolia-stats"></div>
    <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false" style="fill: #2b2b2b;height: 20px;width: 20px;">
      <path fill-rule="evenodd" d="M23.53 22.47l-6.807-6.808A9.455 9.455 0 0 0 19 9.5 9.5 9.5 0 1 0 9.5 19c2.353 0 4.502-.86 6.162-2.277l6.808 6.807a.75.75 0 0 0 1.06-1.06zM9.5 17.5a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path>
    </svg>
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
  <div id="facet-post-types-hidden" style="display: none">
    <div>
      <div class="ais-root ais-menu">
        <div class="ais-body ais-menu--body">
          <div class="ais-menu--list">
            <div class="ais-menu--item">
              <div>
                <a class="ais-menu--link" href="http://localhost:8060/?s">Articles </a>
              </div>
            </div>
            <div class="ais-menu--item">
              <div>
                <a class="ais-menu--link" href="http://localhost:8060/?s">Events </a>
              </div>
            </div>
            <div class="ais-menu--item">
              <div>
                <a class="ais-menu--link" href="http://localhost:8060/?s">Videos </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="algolia-hits">
    <div>
      <div class="ais-infinite-hits">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="ais-infinite-hits--item">
            <!--<article itemtype="http://schema.org/Article" .="" class="list-post">
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
            </article>-->
          </div>
        <?php endwhile; ?>
      </div>
      <div class="ais-infinite-hits--showmore"><button>More</button></div>
    </div>
  </div>

  <script type="text/html" id="tmpl-instantsearch-hit">
    <article itemtype="http://schema.org/Article" . class="list-post">
      <a class="thumb-link" href="{{ data.permalink }}" title="{{ data.post_title }}">
        <# if ( data.images.medium_large ) { #>
          <div class="cover-image" style="background-image: url({{ data.images.medium_large.url }});"></div>
        <# } else { var random_image=g etRandomIntInclusive(1,15); #>
          <div class="cover-image" style="background-image: url(/wp-content/themes/airbnbdesign/img/gradients/{{ random_image }}.jpg);"></div>
        <# } #>
      </a>
      <div class="card">
        <a class="h-link" href="{{ data.permalink }}" title="{{ data.post_title }}" itemprop="url">
          <h2 itemprop="name headline">{{{ data._highlightResult.post_title.value }}}</h2>
        </a>
        <div class="meta">
          <p>
            <# var attributes=[ 'content', 'title6', 'title5', 'title4', 'title3', 'title2', 'title1']; var attribute_name; var relevant_content=''
              ; for ( var index in attributes ) { attribute_name=a ttributes[ index ]; if ( data._highlightResult[ attribute_name
              ].matchedWords.length> 0 ) { relevant_content = data._snippetResult[ attribute_name ].value; } } relevant_content = data._snippetResult[
              attributes[ 0 ] ].value; #> {{{ relevant_content }}}
          </p>
          <div class="ais-hits--tags" style="display:none">
            <# for (var index in data.taxonomies.post_tag) { #>
              <span class="ais-hits--tag">{{{ data._highlightResult.taxonomies.post_tag[index].value }}}</span>
              <# } #>
          </div>
        </div>
      </div>
    </article>
  </script>

  <script type="text/html" id="tmpl-menu">
    <a class="{{data.cssClasses.link}}" href="{{data.url}}">{{data.name}} </a>
  </script>

  <script type="text/javascript">
    var s;
    function getRandomIntInclusive(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    jQuery(function ($) {
      if ($('#algolia-search-box').length > 0) {

        if (algolia.indices.searchable_posts === undefined && $('.admin-bar').length > 0) {
          alert('It looks like you haven\'t indexed the searchable posts index. Please head to the Indexing page of the Algolia Search plugin and index it.');
        }

        /* Instantiate instantsearch.js */
        var search = instantsearch({
          appId: algolia.application_id,
          apiKey: algolia.search_api_key,
          indexName: algolia.indices.searchable_posts.name,
          urlSync: {
            mapping: { 'q': 's' },
            trackedParameters: ['query']
          },
          searchParameters: {
            facetingAfterDistinct: true
          },
          searchFunction: function (helper) {
            /* helper does a setPage(0) on almost every method call */
            /* see https://github.com/algolia/algoliasearch-helper-js/blob/7d9917135d4192bfbba1827fd9fbcfef61b8dd69/src/algoliasearch.helper.js#L645 */
            /* and https://github.com/algolia/algoliasearch-helper-js/issues/121 */
            var savedPage = helper.state.page;
            if (search.helper.state.query === '') {
              search.helper.setQueryParameter('distinct', false);
              search.helper.setQueryParameter('filters', 'record_index=0');
            } else {
              search.helper.setQueryParameter('distinct', true);
              search.helper.setQueryParameter('filters', '');
            }
            search.helper.setPage(savedPage);
            helper.search();
          }
        });

        var onRenderHandler = function () {
          $('.ais-infinite-hits--item article .cover-image').css('height', ($('.ais-infinite-hits--item article .cover-image').width() / 1.618) + 'px');
        };
        search.on('render', onRenderHandler);

        /* Search box widget */
        search.addWidget(
          instantsearch.widgets.searchBox({
            container: '#algolia-search-box',
            placeholder: 'Search',
            wrapInput: false,
          })
        );

        /* Hits widget */
        search.addWidget(
          instantsearch.widgets.infiniteHits({
            container: '#algolia-hits',
            hitsPerPage: 9,
            showMoreLabel: "More",
            templates: {
              empty: 'No results were found for "<strong>{{query}}</strong>".',
              item: wp.template('instantsearch-hit')
            }
          })
        );

        /* Post types refinement widget */
        search.addWidget(
          instantsearch.widgets.menu({
            container: '#facet-post-types-hidden',
            attributeName: 'post_type_label',
            sortBy: ['name:asc'],
            limit: 10,
            templates: {
              item: wp.template('menu')
            }
          })
        );

        // /* Add reset link to menu widget */
        // search.addWidget(marcoSvenClearAllWidget );

        $s = search;

        /* Start */
        search.start();
        $('#algolia-search-box input').attr('type', 'search').select();
        $('body').on('click', '.ais-menu--link', function (event) {
          event.preventDefault();

          var $this = $(this).parents('.ais-menu--item');

          if (!$this.hasClass('ais-menu--item__active')) {

            $('.ais-menu--list .ais-menu--item').each(function (index, el) {
              $(el).removeClass('ais-menu--item__active')
            });

            $this.addClass('ais-menu--item__active');

            if ($(this).text() == "All") {
              $s.helper.clearRefinements().search();
            } else {
              $s.helper.toggleRefinement('post_type_label', $(this).html()).search();
            }

          }

        });
      }

    });
  </script>

</main>
<?php
get_footer();
