<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.index')}}">User Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Search books..." aria-label="Search books" aria-describedby="search-button">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="search-button">Search</button>
                        </div>
                    </div>
                </div>
            </div>
                <h2 class="mt-4 mb-4">List of Books to Buy</h2>
                <div class="row">
                    <!-- Loop through books and display each book -->
                    @foreach ($books as $book)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">Description: {{ $book->description }}</p>
                                <!-- Add more book information here -->
                                <a href="#" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>                    
                    @endforeach
                </div>
                <!-- Pagination links -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <div class="container">
            &copy; 2024 Bookstore. All rights reserved.
        </div>
    </footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
