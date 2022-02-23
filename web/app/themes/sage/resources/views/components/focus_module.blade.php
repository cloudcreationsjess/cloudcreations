<section class="component focus-module animation-element">
    <div class="focus__waves">
        <svg xmlns="http://www.w3.org/2000/svg" width="2098.839" height="239.695" viewBox="0 0 2098.839 239.695">
            <g id="squiggle" transform="translate(15824.756 -7821.424)">
                <path id="Path_1180" data-name="Path 1180"
                    d="M-16.464-37.436s157.619-93.693,425.571,10.894C643.285,69.33,749.114,101.582,981.04,8.321c256.693-83.231,461.684-45.136,594.449-10.462,209.409,54.691,506.4-96.329,506.4-96.329"
                    transform="translate(-15808.036 7920.34)" fill="none" stroke="#d8dee9" stroke-width="1"/>
                <path id="Path_1181" data-name="Path 1181"
                    d="M-28,190.273S70.583,87.65,323.764,11.25s380.89-26.333,385.371-24.342c124.475,31.115,282.359,120.028,448.107,123.7,106.459,2.359,215.271-26.227,333.84-86.082,228.185-115.189,574.073,63.3,574.073,63.3"
                    transform="translate(-15792.5 7870.5)" fill="none" stroke="#d8dee9" stroke-width="1"/>
            </g>
        </svg>
    </div>
    <div class="container">
        <h1 class="fade-in focus-module__title">{{ $flex['title'] }}</h1>
        <div class="row">
            @if ( $flex['focus_items'] )
                @php($i = 1)
                @foreach($flex['focus_items'] as $f)
                    <div class="col-xl-3 col-lg-6">
                        <div class="focus__item-box slide-in-up animation-delay-{{ $i * 3 }}">
                            <div class="focus__item-box__content">
                                <div class="focus__item-box__logo zoom-in animation-delay-{{ $i + 10 }}">
                                    {!! the_image($f['icon']) !!}
                                </div>
                                <h3>{{ $f['title'] }}</h3>
                                <p>{!! $f['content'] !!}</p>
                            </div>
                            <a class="animation-delay-0" href="{{ $f['button_url'] }}">see more</a>
                        </div>
                    </div>
                    @php($i++)
                @endforeach
            @endif
        </div>
    </div>
</section>
