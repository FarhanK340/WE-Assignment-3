@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/animals.css') }}">
@endsection

@section('title', 'Our Animals - Wild Time Zoo')

@section('content')
    <h1>Our Animals</h1>

    <section class="animal-section rhino" id="rhino-section">
        <div class="overlay">
            <h2>Meet Rex the Rhino</h2>
            <p>Rex is known for his impressive size and strength. He can weigh over 2,000 kg and has a thick skin that protects him in the wild.</p>
            <p>Rex loves to roam in his enclosure and interact with visitors.</p>
        </div>
    </section>

    <section class="animal-section lion" id="lion-section">
        <div class="overlay">
            <h2>Meet Leo the Lion</h2>
            <p>Leo is the king of the jungle. With his majestic mane and powerful roar, he commands respect from all other animals.</p>
            <p>Leo enjoys basking in the sun and is known for his playful nature.</p>
        </div>
    </section>

    <section class="animal-section elephant" id="elephant-section">
        <div class="overlay">
            <h2>Meet Ella the Elephant</h2>
            <p>Ella is one of the largest land animals on Earth. Known for her intelligence and strong social bonds, she travels in a herd.</p>
            <p>Ella loves splashing in water and using her trunk to explore her surroundings.</p>
        </div>
    </section>
@endsection
