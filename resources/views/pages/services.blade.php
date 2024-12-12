@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('title', 'Services - Wild Time Zoo')

@section('content')
    <div class="main-container">
        <h1>Our Services</h1>
        <p>Wild Time Zoo offers various services to enhance your visit.</p>
    </div>
    <table>
        <caption>Service Pricing</caption>
        <thead>
            <tr>
                <th>Service</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>${{ $service->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
