
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asset Details</title>
</head>
<body>
    <h1>{{ $asset->title }}</h1>
    <p>{{ $asset->status }}</p>
    <a href="{{ route('asset.index') }}">Back to Posts</a>
</body>
</html>

