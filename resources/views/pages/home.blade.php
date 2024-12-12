@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('title', 'Home- Wild Time Zoo')


@section('content')
    <section class="highlight" id="index">
        <div class="overlay-container">
            <div class="overlay">
                <h1>Welcome to Wild Time Zoo!</h1>
                <p>Experience the Wild, Connect with Nature, and Create Unforgettable Memories.</p>
            </div>
        </div>
    </section>

    <section class="features">
        <h2>New Features</h2>
        <ul class="features-list">
            <li class="bg-feature bg-feature-1">Wild People Restaurant - A night spot and evening bar.</li>
            <li class="bg-feature bg-feature-2">Hungry Lion Picnic Areas - Six new spots to enjoy a meal.</li>
            <li class="bg-feature bg-feature-3">Gorilla Enclosure - Home to our newly procured gorillas.</li>
            <li class="bg-feature bg-feature-4">Educational Center - Informative tours and displays.</li>
        </ul>
    </section>
    <section class="accessibility">
        <h2>Asssessibilty</h2>
        <div class="accessibility-content">
            <div class="accessibility-img">
                <img src="static/accessibility-map.webp" alt="">
            </div>
            <div class="accessibility-text">
                All paths are concrete or gravel. There is some uneven ground. One of the main kangaroo areas is
                grass/dirt. The top of the Park at entrance is flat with paths on a gentle slope; however, other
                areas of the Park are on an incline. All paths are accessible by wheelchair, but some visitors could
                find some surfaces and slopes difficult to manage.
                <br>
                <br>
                The ground can be slippery when wet.
            </div>
        </div>
    </section>
    <section class="testimonials">
        <h2>What Our Visitors Are Saying</h2>
        <div class="testimonial">
            <div class="testimonial-image">
                <div class="overlay-2">
                    <p>“… well it certainly wasn’t what I expected, but that’s not a bad thing. The zoo area itself is quite an expansive area so you have to come prepared to do a lot of walking, it took us about 3 hours to see everything, and that was without having a rest break of any sort.”</p>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-image">
                <div class="overlay-2">
                    <p>“… as a teacher I’m constantly looking for new experiences to help reinforce what I teach to the kids in class. Obviously coming out here as part of a field trip helps, but it would also be good to be able to get back to our small little primary school and review with the kids what we have heard, seen, and learnt here.”</p>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="testimonial-image">
                <div class="overlay-2">
                    <p>“... I think my grandmother is feeling pretty freaked out about the whole thing. We didn’t realize just how huge that tank of a Rhino really was. Perhaps if we had known some things about it beforehand we would not have taken that particular route through the zoo.”</p>
                </div>
            </div>
        </div>
    </section>
@endsection
