<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1>Chuyen di</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row mx-3" action="{{ route('update', ['id' => $data->id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $data->name }}" id="name">
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="destination" value="{{ $data->destination }}" class="form-control"
                id="destination">
        </div>

        <div class="mb-3 col-3">
            <label for="date_trip" class="form-label"> Day </label>
            <input type="date" name="date_trip" value="{{ $data->date_trip }}" class="form-control" id="date_trip">
        </div>

        <div class="form-check">
            Risk Assessment
            <div class="form-check">
                <label class="form-check-label" for="yes">
                    YES
                </label>
                <input class="form-check-input" type="radio" value="1" name="risk" id="yes"
                    {{ $data->risk == 1 ? 'checked' : '' }}>

            </div>
            <div class="form-check">
                <label class="form-check-label" for="no">
                    NO
                </label>
                <input class="form-check-input" type="radio" value="0" name="risk" id="no"
                    {{ $data->risk == 0 ? 'checked' : '' }}>
            </div>


        </div>
        <button type="submit" class="btn btn-dark">Create</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
