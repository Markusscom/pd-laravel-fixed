<x-layout>
    <ul class="list-group">
        @foreach($contacts as $contact)
            <li class="list-group-item mb-3">
                <h5 class="mb-1">{{ $contact->name }}</h5>
                <p class="mb-1">{{ $contact->email }}</p>
                <small>{{ $contact->question }}</small>
            </li>
        @endforeach
    </ul>
</x-layout>
