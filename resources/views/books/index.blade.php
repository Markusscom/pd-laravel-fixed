<x-layout>
<h1>Books</h1>

@if(session('error'))
    <div style="color: red; margin-bottom: 1em;">
        {{ session('error') }}
    </div>
@endif

<a href="{{ route('books.create') }}">Create a book</a>

<br>

<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book->id) }}">Show</a>
                <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Dzēst">
                </form>
            </div>
        </li>
    @endforeach
</ul>
</x-layout>