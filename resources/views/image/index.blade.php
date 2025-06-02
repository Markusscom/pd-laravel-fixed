<x-layout>
    <h1 class="text-3xl font-bold mb-6">Images</h1>

    <a href="{{ route('image.create') }}" class="btn btn-primary mb-6">Upload New Image</a>

    @if($images->isEmpty())
        <div class="alert alert-info">
            <span>No images found.</span>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($images as $image)
                <div class="card bg-base-200 shadow-md">
                    <figure>
                        <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->label }}" class="object-cover h-48 w-full rounded-t-lg" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $image->label }}</h2>
                        <form action="{{ route('image.destroy', $image) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');" class="mt-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layout>