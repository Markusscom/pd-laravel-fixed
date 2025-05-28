<h1>Edit a Book</h1>

<form action="/books/{{ $editBook->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $editBook->title }}" placeholder="title goes here">
    <input type="text" name="author" value="{{ $editBook->author }}" placeholder="author goes here">
    <input type="date" name="released_at" value="{{ $editBook->released_at }}" placeholder="date goes here">
    <input type="submit" value="Edit">
</form>
