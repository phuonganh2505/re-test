<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Manages Trip</h1>
    @if (Session::has('success'))
        <h3 class="alert alert-info">{{ Session::get('success') }}</h3>
    @endif

    <table class="table table-light">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ten chuyen di</th>
                <th scope="col">Diem den</th>
                <th scope="col">Ngay di</th>
                <th scope="col">Rui ro</th>
                <th scope="col">Ngay tao du lieu</th>
                <th scope="col">Chuc nang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->destination }}</td>
                    <td>{{ $item->date_trip }}</td>
                    <td>{{ $item->risk }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ route('edit', ['id' => $item->id]) }}">
                            <button class="btn btn-dark" type="button">Edit</button>
                        </a>

                        <a href="{{ route('destroy', ['id' => $item->id]) }}">
                            <button class="btn btn-danger" type="button">Delete</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
