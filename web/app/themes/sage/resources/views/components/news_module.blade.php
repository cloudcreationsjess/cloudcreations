<section class="component news-module">
    <div class="container">
        <h1 class="animation-element fade-in news-module__title">{{ $flex['title'] }}</h1>
        <div class="news-module-posts">
            <div class="row">
        <?php
        global $posts;
        $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
        $posts_per_page = 4;

        $params = [
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => $posts_per_page,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged,
        ];
        query_posts($params);

        global $wp_query;
        global $page, $numpages, $multipage, $more;
        if ( is_singular() ) {
            $page_key = 'page';
            $paged = $page;
            $max = $numpages;
        } else {
            $page_key = 'paged';
            $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
            $max = $wp_query->max_num_pages;
        }
        $myposts = get_posts();
        ?>
        @if(have_posts())
            <?php
            $posts = get_posts();
            ?>
            @while(have_posts()) @php(the_post())
            <div class="col-lg-3">
                <a href="<?php the_permalink() ?>">
                    <article class="blog__post">
                        <div class="col-lg-12">
                            <div class="blog__post__image">
                                <?php the_post_thumbnail() ?>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__post__content">
                                <div class="blog__post__content__date"><?php echo get_the_date() ?></div>
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </article>
                </a>
            </div>
            @endwhile
            @php(wp_reset_query())
        @endif
            </div>
        </div>
    </div>
</section>
