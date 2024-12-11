@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title', 'Contact Us - Wild Time Zoo')

@section('content')
    <h1>Contact Us</h1>
    <form id="contact-form" action="#" method="POST" onsubmit="return validateForm(event)">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <span id="name-error" class="error"></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="email-error" class="error"></span>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
        <span id="phone-error" class="error"></span>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
        <div id="success-message" class="success"></div>
    </form>
@endsection
