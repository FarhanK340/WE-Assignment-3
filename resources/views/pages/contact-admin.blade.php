@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('title', 'Contact Us - Wild Time Zoo')

@section('content')
    <h1>Contact Queries</h1>

   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Admin Comment</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        <form action="{{ route('contact.comment', $contact->id) }}" method="POST">
                            @csrf
                            <textarea name="admin_comment" class="form-control">{{ $contact->admin_comment }}</textarea>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Add Comment</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('contact.delete', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
