<h1>Edit a Book</h1>

<form action="{{ route('books.update', $editBook->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $editBook->title) }}" placeholder="title goes here">
    @error('title')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="text" name="author" value="{{ old('author', $editBook->author) }}" placeholder="author goes here">
    @error('author')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="date" name="released_at" value="{{ old('released_at', $editBook->released_at) }}" placeholder="date goes here">
    @error('released_at')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="submit" value="Edit">
</form>