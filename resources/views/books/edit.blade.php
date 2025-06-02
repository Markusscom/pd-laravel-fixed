<x-layout>
    <h1 class="mb-4">Edit a Book</h1>

    <form action="{{ route('books.update', $editBook->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                class="form-control @error('title') is-invalid @enderror" 
                id="title" 
                name="title" 
                value="{{ old('title', $editBook->title) }}" 
                placeholder="Title goes here"
                required
            >
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input 
                type="text" 
                class="form-control @error('author') is-invalid @enderror" 
                id="author" 
                name="author" 
                value="{{ old('author', $editBook->author) }}" 
                placeholder="Author goes here"
                required
            >
            @error('author')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="released_at" class="form-label">Release Date</label>
            <input 
                type="date" 
                class="form-control @error('released_at') is-invalid @enderror" 
                id="released_at" 
                name="released_at" 
                value="{{ old('released_at', $editBook->released_at) }}"
                required
            >
            @error('released_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</x-layout>
