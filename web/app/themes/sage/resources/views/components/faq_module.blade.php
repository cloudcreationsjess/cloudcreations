<section class="component faq-module">
    <div class="container">
        <div class="faq-module__title">
            <h1>{{ $flex['title'] }}</h1>
        </div>
        @if ( $flex['faq_content'] )
            @php($i = 1)
            @foreach($flex['faq_content'] as $f)
                <div class="faq-module__question-box" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <div class="faq-module__question" itemprop="name"><i class="fas fa-plus"></i>{!! $f['question'] !!}</div>
                    <div class="faq-module__answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">{!! $f['answer'] !!}</p>
                    </div>
                </div>
                @php($i++)
            @endforeach
        @endif
    </div>
</section>
