<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asset</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="{{ route('asset.create') }}">Create New asset</a>
    <ul>
        @foreach ($assets as $asset)
            <li>
                <a href="{{ route('asset.show', $asset->id) }}">{{ $asset->name}}</a> |


                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>

