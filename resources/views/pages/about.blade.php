@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('title', "About Us - Wild Time Zoo")

@section('content')
    <section class="highlight" id="index">
        <div class="overlay-container">
            <div class="overlay">
                <h1>About Wild Time Zoo</h1>
                <p>Wild Time Zoo has been operating for 4 years, providing fun and educational experiences for
                    visitors. Our mission is to promote safety, education, and entertainment for all ages.</p>
            </div>
        </div>
    </section>
@endsection