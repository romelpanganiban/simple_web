<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Alert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('admin') }}">Contact Alert</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="{{ route('admin.index') }}">View All Contact</a></li>

            <li><a href="{{ route('admin.contact.create') }}">Create a Contact</a></li>

            </ul>
        </nav>

        <h1>All the Contact</h1>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <a href="{{ route('admin.contact.show', $contact->id) }}" class="btn btn-small btn-success">Show</a>
                            <a href="{{ route('admin.contact.edit', $contact->id) }}" class="btn btn-small btn-info">Edit</a>
                            <a href="{{ route('admin.contact.delete', $contact->id) }}" class="btn btn-small btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No contacts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</body>
</html>
