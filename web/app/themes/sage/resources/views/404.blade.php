@extends('layouts.app')

@section('content')
    <section id="error404">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1>Not a cloud in sight!</h1>
                    <h2>The page you are looking for does not&nbsp;exist</h2>
                    <a href="/" class="btn btn--primary btn--icon-left"><i class="fas fa-home"></i>Go Home</a>
                </div>
                <div class="col-md-6">
                    <x-svg.404-page-guy/>
                </div>
            </div>
        </div>
    </section>
@endsection
