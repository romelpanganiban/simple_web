<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Contact</title>
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

        <h1>Contact Details</h1>

        <table class="table table-striped table-bordered">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $contact->name }}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{ $contact->phone_number }}</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{ $contact->message }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back to All Contacts</a>

    </div>
</body>
</html>
