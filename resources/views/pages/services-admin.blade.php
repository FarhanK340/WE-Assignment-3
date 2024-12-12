@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('title', 'Admin Services - Wild Time Zoo')

@section('content')
    <div class="main-container">
        <h1>Manage Services</h1>
        <p>Here you can add, edit, or delete services for Wild Time Zoo.</p>

        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Add Service Form -->
        <form class="add-service" action="{{ route('services.add') }}" method="POST">
            @csrf
            <div class="service-input">
                <label for="name">Service Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="service-input">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" required>
            </div>
            <button type="submit">Add Service</button>
        </form>

        <!-- Service Table -->
        <table>
            <caption>Service Management</caption>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>${{ $service->price }}</td>
                        <td>
                            <form action="{{ route('services.delete', $service->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="delete" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
