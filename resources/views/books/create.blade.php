<x-layout>
<h1>New book</h1>

<form action="{{ route('books.store')}}" method="post">
    @csrf

    <input type="text" name="title" value="{{ old('title') }}" placeholder="title goes here">
    @error('title')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="text" name="author" value="{{ old('author') }}" placeholder="author goes here">
    @error('author')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="date" name="released_at" value="{{ old('released_at') }}" placeholder="date goes here">
    @error('released_at')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="submit" value="Create">
</form>
</x-layout>