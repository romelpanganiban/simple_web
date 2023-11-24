<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('admin') }}">Contact Alert</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ url('admin') }}">View All Contact</a></li>
                <li><a href="{{ url('admin/create') }}">Create a Contact</a></li>
            </ul>
        </nav>

        <h1>Edit Contact</h1>

        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('admin.contact.update', $contact->id) }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $contact->name }}" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" class="form-control" name="phone_number" value="{{ $contact->phone_number }}" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" required>{{ $contact->message }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Contact</button>
        </form>

    </div>
</body>
</html>
