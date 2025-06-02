<x-layout>
    <h1 class="mb-4">New book</h1>

    <form action="{{ route('books.store') }}" method="post" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
            <input 
                type="text" 
                name="title" 
                value="{{ old('title') }}" 
                placeholder="Title goes here" 
                class="form-control @error('title') is-invalid @enderror"
                required
            >
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <input 
                type="text" 
                name="author" 
                value="{{ old('author') }}" 
                placeholder="Author goes here" 
                class="form-control @error('author') is-invalid @enderror"
                required
            >
            @error('author')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <input 
                type="date" 
                name="released_at" 
                value="{{ old('released_at') }}" 
                placeholder="Date goes here" 
                class="form-control @error('released_at') is-invalid @enderror"
                required
            >
            @error('released_at')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</x-layout>
