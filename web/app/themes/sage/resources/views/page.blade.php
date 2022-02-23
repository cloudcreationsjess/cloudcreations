@extends('layouts.app')

@section('content')@php($flexible = get_field('flex_content'))
@foreach ($flexible as $flex)

    @if($flex['acf_fc_layout'] == 'splash')
        <x-splash :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'portfolio_module')
        <x-portfolio_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'services_module')
        <x-services_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'focus_module')
        <x-focus_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'testimonial_module')
        <x-testimonial_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'about')
        <x-about :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'contact_us')
        <x-contact_us :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'development_module')
        <x-development_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'faq')
        <x-faq_module :flex="$flex"/>
    @endif

    @if($flex['acf_fc_layout'] == 'news')
        <x-news_module :flex="$flex"/>
    @endif

@endforeach
@endsection
