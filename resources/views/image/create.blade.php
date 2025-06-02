<x-layout>
    <h1 class="text-3xl font-bold mb-6">Upload New Image</h1>

    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-lg">
        @csrf

        <div>
            <label for="label" class="label">
                <span class="label-text">Label</span>
            </label>
            <input type="text" name="label" id="label" value="{{ old('label') }}" required
                   class="input input-bordered w-full @error('label') input-error @enderror" />
            @error('label')
                <p class="text-error mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div x-data="{ imagePreview: null }">
            <label for="image" class="label">
                <span class="label-text">Image File</span>
            </label>
            <input type="file" name="image" id="image" required
                   class="file-input file-input-bordered w-full @error('image') file-input-error @enderror" accept="image/*"
                   x-on:change="imagePreview = URL.createObjectURL($event.target.files[0])" />
            <div class="mt-2" x-show="imagePreview">
                <img :src="imagePreview" alt="Image Preview" class="object-cover h-48 w-full rounded-lg" />
            </div>
            @error('image')
                <p class="text-error mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="btn btn-success">Upload</button>
            <a href="{{ route('image.index') }}" class="btn btn-ghost">Cancel</a>
        </div>
    </form>
</x-layout>