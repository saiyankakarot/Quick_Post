<!DOCTYPE html>
<html>
<head>
    <title>QuickPost - Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Posts</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>

    @if($posts->count())
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure to delete this post?')">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No posts available.</p>
    @endif
</div>
</body>
</html>
