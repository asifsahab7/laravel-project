<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
                <!-- Back Button -->
                <a href="{{ url()->previous() }}" class="btn btn-primary btn-back float-right">Back</a>
        <h2 class="mb-4">User Profile</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>
                        @if ($user->image)
                            <img src="{{ asset('storage/images/' . $user->image) }}" alt="User Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif

                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Edit Profile button -->
        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary mb-4">Edit Profile</a>

    

        <!-- Books Bought by the user -->
        <h2 class="mb-4">Books Bought by {{ $user->name }}</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Description</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $buy)
                    <tr>
                        <td>{{ $buy->book->name }}</td>
                        <td>{{ $buy->book->description }}</td>
                        <!-- Add more columns as needed -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
