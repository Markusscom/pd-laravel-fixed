<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Laravel 12!!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <header class="p-3 bg-light mb-4 border-bottom">
        <div class="container d-flex flex-wrap gap-2">
            <a href="{{ route('contact.index') }}" class="btn btn-primary btn-sm">All Contacts</a>
            <a href="{{ route('contact.create') }}" class="btn btn-success btn-sm">Create Contact</a>
            <a href="{{ route('books.index') }}" class="btn btn-info btn-sm">All Books</a>
            <a href="{{ route('books.create') }}" class="btn btn-warning btn-sm text-white">Create Book</a>
            <a href="{{ route('about.index') }}" class="btn btn-primary btn-sm">About me</a>
        </div>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

    <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <h5 class="mb-2">Made by Markusscom</h5>
            <p class="mb-0 text-muted">Website Hosted by Laravel</p>
        </div>
    </footer>
</body>
</html>

