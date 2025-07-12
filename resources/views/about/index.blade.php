<!DOCTYPE html>
<html>
<head>
    <title>About Content</title>
</head>
<body>
    <h1>About Page Content</h1>
    <a href="{{ route('about-content.create') }}">+ Add New</a>

    <ul>
        @foreach ($data as $item)
            <li>
                <strong>{{ $item->heading }}</strong><br>
                {{ $item->description }}
                <br>
                <a href="{{ route('about-content.edit', $item->id) }}">Edit</a>
                <form action="{{ route('about-content.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this content?')">Delete</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>
