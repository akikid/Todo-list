<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
</head>
<body>
    <h1>All Contacts</h1>
    <a href="{{ route('contact.create') }}">Create New</a>

    <ul>
    @foreach ($contacts as $contact)
        <li>
            {{ $contact->name }} - {{ $contact->numberphone }}
            <a href="{{ route('contact.edit', $contact->id) }}">Edit</a>
            <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
    </ul>
</body>
</html>
