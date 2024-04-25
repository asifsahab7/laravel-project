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
                        @if($user->image)
                            <img src="{{ $user->image }}" alt="User Image" style="max-width: 100px;">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit Profile</a>
</body>
</html>
