<section class="component splash animation-element">
    <div class="splash__shape">
        <svg xmlns="http://www.w3.org/2000/svg" width="1930.327" height="294.454" viewBox="0 0 1930.327 294.454">
            <path id="Path_1176" data-name="Path 1176"
                d="M0,98.158s316.467,193.622,917.654,0,1012.673,0,1012.673,0v208.4H0Z" transform="translate(0 -12.104)"
                fill="#f8f9fb"/>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="splash-content">
                    <!---- EDITOR CONTENT ---->
                    @php($i = 1)
                    @foreach ( $flex['column_1'] as $f )
                        @if($f['acf_fc_layout'] == 'typing_title')
                            <div id="typed-strings">
                                @if($f['cycling_titles'])
                                    @foreach($f['cycling_titles'] as $title)
                                        <p>{{ $title['cycle_title'] }}</p>
                                    @endforeach
                                @endif
                            </div>
                            <h1 class="fade-in">{{ $f['prepend_title'] }} <span
                                    id="typed"></span>
                                <br>{{ $f['append_title'] }}
                            </h1>

                        @endif

                        @if($f['acf_fc_layout'] == 'title')
                            <h1 class="fade-in">{{ $f['title'] }}</h1>
                        @endif

                        @if($f['acf_fc_layout'] == 'main_content')
                            <div
                                class="splash__main-content fade-in">{!! $f['content'] !!}</div>
                        @endif

                        <x-button_group :component="$f" :i="$i"/>

                        @php($i++)
                    @endforeach
                </div>
            </div>
            <div class="col-md-12 col-lg-6">

                <?php
                global $post;
                $post_slug = $post->post_name;
                ?>

                @if($post_slug == 'home' || $post_slug == 'saskatoon-web-design' || $post_slug == 'calgary-web-design' || $post_slug == 'winnipeg-web-design' || $post_slug == 'canmore-web-design' || $post_slug == 'regina-web-design' || $post_slug == 'north-battleford-web-design')
                    @php($i = 10)
                    <div class="splash__bird fade-in">
                        <x-svg.splash-bird/>
                    </div>
                    <div class="splash__image slide-in-left">
                        <x-svg.cloud-sitter/>
                    </div>
                @endif

                @if($post_slug == 'services')
                    <div class="services-module__splash-image slide-in-up">
                        <x-svg.services-guy/>
                    </div>
                @endif

                @if($post_slug == 'portfolio')
                    @php($i = 10)
                    <div class="splash__bird fade-in">
                        <x-svg.splash-bird/>
                    </div>
                    <div class="splash__image slide-in-left">
                    </div>
                @endif

                @if($post_slug == 'about-us')
                    <div class="about-module__splash-image slide-in-left">
                        <x-svg.about-us-couple/>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
