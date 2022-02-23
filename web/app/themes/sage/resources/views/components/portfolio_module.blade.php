<section class="component portfolio-module">
    <div class="portfolio-module__cloud-header animation-element slide-in-right">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="430.316"
            height="201.875" viewBox="0 0 430.316 201.875">
            <defs>
                <linearGradient id="linear-gradient" x1="0.5" y1="0.067" x2="0.5" y2="1.226"
                    gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#eceff4"/>
                    <stop offset="1" stop-color="#f8f9fb"/>
                </linearGradient>
            </defs>
            <path id="Union_18" data-name="Union 18"
                d="M45.231,201.875a45.232,45.232,0,0,1,0-90.464h84.213q0-.032,0-.064V91.8a8.05,8.05,0,0,1,.114-1.351A45.231,45.231,0,0,1,130.786,0h254.3a45.231,45.231,0,0,1,0,90.463h-170.2A8.056,8.056,0,0,1,215,91.8v19.551q0,.032,0,.064H299.53a45.232,45.232,0,0,1,0,90.464Z"
                fill="url(#linear-gradient)"/>
        </svg>
    </div>
    <div class="portfolio-module__cloud-header-bottom animation-element slide-in-left">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="430.316"
            height="201.875" viewBox="0 0 430.316 201.875">
            <defs>
                <linearGradient id="linear-gradient" x1="0.5" y1="0.933" x2="0.5" y2="-0.226"
                    gradientUnits="objectBoundingBox">
                    <stop offset="0" stop-color="#eceff4"/>
                    <stop offset="1" stop-color="#f8f9fb"/>
                </linearGradient>
            </defs>
            <path id="Union_23" data-name="Union 23"
                d="M130.786,201.875a45.231,45.231,0,0,1-1.228-90.446,8.05,8.05,0,0,1-.114-1.351V90.528c0-.022,0-.043,0-.065H45.231A45.232,45.232,0,0,1,45.231,0h254.3a45.232,45.232,0,0,1,0,90.464H215c0,.022,0,.043,0,.065v19.55a8.056,8.056,0,0,1-.111,1.335h170.2a45.231,45.231,0,0,1,0,90.463Z"
                transform="translate(430.316 201.875) rotate(180)" fill="url(#linear-gradient)"/>
        </svg>
    </div>
    <div class="portfolio__shape--bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="1921.473" height="311.756" viewBox="0 0 1921.473 311.756">
            <path id="Path_1198" data-name="Path 1198"
                d="M.015,181.478s323.3-93.519,591.137,11.16c85.171,33.288,169.628,20.312,238.818,22.32s133.917,57.807,314.929,32.451c100.214-25.755,178.332-27.987,359.12,41.2,4.339,1.661,138.6,51.558,218.73,22.319s198.644,37.72,198.708,44.639,0,99.219,0,99.219H.015Z"
                transform="translate(-0.015 -143.033)" fill="#2e3440"/>
        </svg>
    </div>
    <div class="container-fluid">
        <!---- EDITOR CONTENT ---->
        <h1 class="animation-element fade-in portfolio-module__title">{{ $flex['title'] }}</h1>

        @php
            $params = array(
                'post_type' => 'projects',
                'post_per_page' => 3,
            );
            $projects = query_posts($params)
        @endphp
        @if(have_posts())
            @php($i = 1)
            @while(have_posts()) @php(the_post())
            <div class="project {{ $i % 2 == 0 ? 'project--reversed' : '' }} animation-element">
                <div class="project__cloud {{ $i % 2 == 0 ? 'slide-in-left' : 'slide-in-right' }} animation-delay-12">
                    <div class=" {{ $i % 2 == 0 ? 'project__cloud--reversed' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="666.587" height="247.436"
                            viewBox="0 0 666.587 247.436">
                            <path id="Union_20" data-name="Union 20"
                                d="M31.06,247.436a31.061,31.061,0,0,1,0-62.122H256.3V154.24a12.974,12.974,0,0,1,.8-4.5H176.365a26.212,26.212,0,0,1,0-52.423H371.2q-.038-.5-.038-1V62.123h-45.01a31.062,31.062,0,0,1,0-62.123H526.265a31.062,31.062,0,1,1,0,62.123H448.418V96.313q0,.5-.038,1h140.7a26.212,26.212,0,1,1,0,52.423H332.747a12.974,12.974,0,0,1,.8,4.5v31.074H635.527a31.061,31.061,0,0,1,0,62.122Z"
                                fill="#eceff4" opacity="0.6"/>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="project__info-container">
                            <div class="project__description">
                                {!! the_image(get_field('logo'), 'project__logo fade-in') !!}
                                <div class="fade-in animation-delay-1">{!! get_field('description') !!}</div>
                                <span class="fade-in animation-delay-2"><a class="project__link" href="/portfolio">- See more</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="portfolio-devices">
                            <div class="fade-in animation-delay-2">
                                <div class="portfolio-devices__desktop">
                                    <div class="desktop-dots-container">
                                    </div>
                                    <div class="portfolio-devices__desktop__screen">
                                        {!! the_image(get_field('desktop_image')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-devices__phone fade-in animation-delay-4">
                                <div class="portfolio-devices__phone__screen">
                                    {!! the_image(get_field('mobile_image')) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @php($i++)
    @endwhile
    @php(wp_reset_query())
    @endif
    </div>
</section>
