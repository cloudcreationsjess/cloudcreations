<section class="component testimonial-module animation-element">
    <div class="testimonial-module__cloud--1 slide-in-right">
        <svg xmlns="http://www.w3.org/2000/svg" width="370.222" height="145" viewBox="0 0 370.222 145">
            <path id="Union_15" data-name="Union 15" d="M92.084,145a21.479,21.479,0,0,1,0-42.957h61.128a11.108,11.108,0,0,1-.276-9.194H21.479a21.479,21.479,0,0,1,0-42.958H194.99a11.627,11.627,0,0,1-2.335-6.934H141.718a21.479,21.479,0,1,1,0-42.957H280.855a21.479,21.479,0,0,1,0,42.957H233.237a11.627,11.627,0,0,1-2.335,6.934h1.676a21.479,21.479,0,0,1,0,42.958H191.791a11.107,11.107,0,0,1-.276,9.194H348.744a21.479,21.479,0,0,1,0,42.957Z" fill="#f8f9fb"/>
        </svg>
    </div>
    <div class="testimonial-module__cloud--2 slide-in-left">
        <svg xmlns="http://www.w3.org/2000/svg" width="268.115" height="166" viewBox="0 0 268.115 166">
            <path id="Union_14" data-name="Union 14" d="M69.385,166a23.967,23.967,0,1,1,0-47.934h1.4a9.423,9.423,0,0,1-.492-11.1H23.967a23.967,23.967,0,1,1,0-47.933h84.34a8.915,8.915,0,0,1,.009-11.112A23.967,23.967,0,0,1,109.061,0H244.149a23.967,23.967,0,0,1,0,47.933h-94.3a8.915,8.915,0,0,1,0,11.1h9.207a23.967,23.967,0,1,1,0,47.933H112.562a9.422,9.422,0,0,1-.492,11.1h92.4a23.967,23.967,0,0,1,0,47.934Z" transform="translate(268.115 166) rotate(180)" fill="#f8f9fb"/>
        </svg>
    </div>
    <div class="testimonial-module__flying-bird--1">
        <x-svg.flying-bird />
    </div>
    <div class="testimonial-module__flying-bird--2">
        <x-svg.flying-bird-2 />
    </div>
    <div class="testimonial-module__wave--bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="144.94" viewBox="0 0 1920 144.94">
            <path id="Path_1182" data-name="Path 1182" d="M0,0S70.938,18.892,474.25,27.6c295.816-13.315,664.4-78.341,916.882-78.341C1871.132-50.745,1920,0,1920,0V94.2H0Z" transform="translate(0 50.745)" fill="#f8f9fb"/>
        </svg>
    </div>
    <div class="container">
        <h1 class="fade-in testimonial-module__title">{!!  $flex['title'] !!}</h1>
        @php
            $params = array(
                'post_type' => 'testimonial',
                'post_per_page' => 1,
            );
            $testimonials = query_posts($params)
        @endphp
        @if(have_posts())
            @php($i = 1)
            <div class="main-carousel main-carousel--testimonial fade-in animation-delay-4" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "autoPlay": 5000, "prevNextButtons": false }'>
                @while(have_posts()) @php(the_post())
                    <div class="carousel-cell">
                        <div class="testimonial-module__content">
                            {!! get_field('content') !!}
                        </div>
                        <div class="testimonial-module__author">
                            {{ get_field('client_name') }}, {{ get_field('client_position') }}
                                , {{ get_field('client_company') }}
                        </div>
                    </div>
                @php($i++)
                @endwhile
            </div>
        @endif
        @php(wp_reset_query())
    </div>
</section>
