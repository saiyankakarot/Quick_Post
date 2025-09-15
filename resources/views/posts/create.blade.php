<!DOCTYPE html>
<html>
<head>
    <title>Create Post - QuickPost</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea name="body" class="form-control" rows="5" required>{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
