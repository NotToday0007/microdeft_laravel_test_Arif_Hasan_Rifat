<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action="{{ route('asset.create') }}" method="POST">
        @csrf
        <label for="title">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="content">Status:</label>
        <textarea name="status" id="status" required></textarea><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>
