<!DOCTYPE html>
<html>
<head>
    <title>Contact Create</title>
</head>
<body>
<h1>Create Contact</h1>
<form method="POST" action="{{ route('contact.store') }}">
    @csrf
    Name: <input type="text" name="name"><br>
    Phone: <input type="text" name="numberphone"><br>
    Description: <input type="text" name="description"><br>
    <button type="submit">Save</button>
</form>
</body>
</html>