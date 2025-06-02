<x-layout>
    <main class="container">
        <h2 class="mb-3">{{ $singleBook->title }}</h2>
        <h3 class="text-secondary mb-2">{{ $singleBook->author }}</h3>
        <p class="text-muted">{{ $singleBook->released_at }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-info btn-sm mt-3">All books</a>
    </main>
</x-layout>
