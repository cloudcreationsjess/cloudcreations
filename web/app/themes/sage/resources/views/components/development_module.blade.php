<section class="component development-module">
    <div class="development-module__wave-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="1920" height="241.029" viewBox="0 0 1920 241.029">
            <path id="Path_1243" data-name="Path 1243"
                d="M0,0S318.684,179.48,657.81-14.081,935.276,139.6,1356.615,26.705,1920,0,1920,0V167.025H0Z"
                transform="translate(0 74.004)" fill="#e5e9f0"/>
        </svg>
    </div>
    <div class="container">
        <h1 class="development-module__title animation-element fade-in animation-delay-2">{{ $flex['title'] }}</h1>
        <h4 class="development-module__subtitle animation-element fade-in animation-delay-4">{{ $flex['subtitle'] }}</h4>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if($flex['steps'])
                    <div class="development-module__steps-box">
                        @php( $i = 1 )
                        @foreach($flex['steps'] as $step)
                            <div class="development-module__step animation-element">
                                <div class="row justify-content-center">
                                    <div class="col-md-auto">
                                        <div class="development-module__steps__number fade-in">
                                            {{ $i }}
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="development-module__steps__content-box">
                                            <h3 class="fade-in animation-delay-2">{{ $step['step_title'] }}</h3>
                                            <p class="fade-in animation-delay-4">{{ $step['step_content'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @php( $i++ )
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

