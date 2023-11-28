<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Dashboard</title>
    <link href="{{asset('storage/assets/css/login.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/css/settings.css')}}" rel="stylesheet">
    <script src="{{asset('storage/assets/js/contact.js')}}"></script>
    <link href="{{asset('storage/assets/css/public.css')}}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>

    <nav>
        <a href="#">Home</a> |
        <a href="#">Users</a> |
        <a href="#">Settings</a>
    </nav>

    <main>
        <h2>Contact List</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PHONE NUMBER</th>
                    <th>MESSAGE</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="contactTableBody">
              
            </tbody>
        </table>

        <h2>Add Contact</h2>

        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>

            <label for="message">Message:</label>
            <input type="text" id="message" name="message" required>

            <button type="submit">Add Contact</button>
        </form>

        <div class="modal" id="editContactModal">
            <div class="modal-content">
                <span class="close" onclick="closeEditContactModal()">&times;</span>
                <h2>Edit Contact</h2>
                <form id="editContactForm">
                    <label for="edit_name">Name:</label>
                    <input type="text" id="edit_name" name="name" required>

                    <label for="edit_phone_number">Phone Number:</label>
                    <input type="text" id="edit_phone_number" name="phone_number" required>

                    <label for="edit_message">Message:</label>
                    <input type="text" id="edit_message" name="message" required>

                    <button type="button" onclick="updateContact()">Update Contact</button>

                </form>
            </div>
        </div>
    </main>
</body>
</html>