<!-- resources/views/contact/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $contact->name }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $contact->email }}"><br><br>

        <label>Message:</label><br>
        <textarea name="message">{{ $contact->message }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br><a href="{{ route('contact.index') }}">Back to Contact List</a>
</body>
</html>
