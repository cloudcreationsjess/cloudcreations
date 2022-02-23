@extends('layouts.app')

@section('content')
    <section id="blog">
        <div class="container">
            <h1 class="blog__title">News & Blog</h1>
            <?php
            global $posts;
            $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
            $posts_per_page = 9;

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
                <a href="<?php the_permalink() ?>">
                    <article class="blog__post">
                        <div class="col-lg-6">
                            <div class="blog__post__image">
                                <?php the_post_thumbnail() ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog__post__content">
                                <div class="blog__post__content__date"><?php echo get_the_date() ?></div>
                                <h1><?php the_title(); ?></h1>
                            </div>
                        </div>
                    </article>
                </a>
                @endwhile
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <?php
                        $big = 999999999; // need an unlikely integer
                        $output = '<div class="pagination">';
                        $output .= paginate_links(array(
                            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format'    => '?paged=%#%',
                            'current'   => max(1, get_query_var('paged')),
                            'total'     => $max,
                            //$q is your custom query
                            'prev_text' => __('<i class="fas fa-angle-left"></i>'),
                            'next_text' => __('<i class="fas fa-angle-right"></i>'),
                            //        'add_args' => array('boat_type'=>$boat_type,'no_of_passengers'=>$number_of_passengers)
                        ));
                        $output .= '</div><!-- navigation ENDS -->';
                        if ( $max > 1 ) {
                            echo $output;
                        }
                        ?>
                    </div>
                </div>
            @endif
            @php(wp_reset_query())
        </div>
    </section>
@endsection


