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
        <tbody id="services-list">
            <tr>
                <td>Entrance Fee</td>
                <td>$15</td>
            </tr>
            <tr>
                <td>Lion King Enclosure</td>
                <td>$20</td>
            </tr>
        </tbody>
    </table>
@endsection
