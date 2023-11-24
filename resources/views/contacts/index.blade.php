@extends('layouts.app')

@section('content')
    <h1>Contact List</h1>

    @if($contacts->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <a href="{{ route('contacts.show', ['id' => $contact->id]) }}">View</a>
                            <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}">Edit</a>
                            <form method="post" action="{{ route('contacts.destroy', ['id' => $contact->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No contacts found.</p>
    @endif
    <a href="{{ route('contacts.create') }}">Create a New Contact</a>
@endsection
