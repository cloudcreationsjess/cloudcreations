<section class="component contact_us">
    <div class="container">
        <div class="row animation-element">
            <div class="col-md-6 col-sm-12 slide-in-right">
                <x-svg.contact-conversation />
            </div>
            <div class="col-md-6 col-sm-12">
                @php($i = 1)
                    <h1 class="contact_us__title fade-in animation-delay-{{ $i * 2 }}">{{ $flex['column_2']['title'] }}</h1>
                    <div class="contact_us__main-content fade-in animation-delay-{{ $i * 2 }}">{!! $flex['column_2']['content'] !!}</div>
                    <div class="button-group">
                        @foreach($flex['column_2']['button_group'] as $button)
                            @php($btnClass = $button['button_type'] == 'Secondary' ? 'btn--secondary' : 'btn--primary')
                            <span class="fade-in animation-delay-4"><a class="btn {{ $btnClass }}"
                                    href="{{ $button['button_url'] }}">{{ $button['button_title'] }}</a></span>
                        @endforeach
                    </div>
                @php($i++)
            </div>
        </div>
    </div>
</section>
