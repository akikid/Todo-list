<h1>Edit Contact</h1>
<form method="POST" action="{{ route('contact.update', $contact->id) }}">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $contact->name }}"><br>
    Phone: <input type="text" name="numberphone" value="{{ $contact->numberphone }}"><br>
    Description: <input type="text" name="description" value="{{ $contact->description }}"><br>
    <button type="submit">Update</button>
</form>
