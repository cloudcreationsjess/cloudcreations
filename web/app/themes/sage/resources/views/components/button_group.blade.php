@if($component['acf_fc_layout'] == 'button_group')
    @if ( $component['buttons'] )
        <div class="button-group fade-in animation-delay-{{ $i * 2 }}">
            @php($c = $i * 2)
            @php($c++)
            @foreach($component['buttons'] as $button)
                @php($btnClass = $button['button_type'] == 'Secondary' ? 'btn--secondary' : 'btn--primary')
                <span class="fade-in animation-delay-{{ $c }}"><a class="btn {{ $btnClass }}" href="{{ $button['button_link'] }}">{{ $button['button_label'] }}</a></span>
                @php($c++)
            @endforeach
        </div>
    @endif
@endif
