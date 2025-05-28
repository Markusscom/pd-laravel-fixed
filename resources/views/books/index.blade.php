<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
                <form action="/books/{{ $book->id }}/destroy" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Dzēst">
                </form>
                </form>
            </div>
        </li>
    @endforeach
</ul>