
{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
    <section id="contact-splash" class="animation-element">
        <div class="container">
            <h1 class="fade-in animation-delay-4">Contact us</h1>
            <h4 class="fade-in animation-delay-6">We can't wait to start working with you! Drop&nbsp;us&nbsp;a&nbsp;line.</h4>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-splash__contact-form fade-in animation-delay-8">
                        {!! do_shortcode('[contact-form-7 id="354" title="Contact form"]') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
