<x-layout>
    <h1 class="mb-4">Books</h1>

    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Create a book</a>

    <ul class="list-group">
        @foreach($books as $book)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ $book->title }}</h5>

                <div class="btn-group btn-group-sm" role="group" aria-label="Book actions">
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning text-white">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this book?');" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-layout>
