<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>País</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center mt-4">País</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-8 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Código</th>
                            <th scope="col">Iso Code</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data as $pais)
                            <tr>
                                <td>{{ $pais['id'] }}</td>
                                <td>{{ $pais['code'] }}</td>
                                <td>{{ $pais['iso_code'] }}</td>
                                <td>{{ $pais['nombre'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Provincias</h5>
                <div class="card" style="width: 35rem;">
                    <ul class="list-group list-group-flush">
                        @foreach ($data as $pais)
                            @for ($i = 0; $i < count($pais['provincias']); $i++)
                                <li class="list-group-item">Id: {{ $pais['provincias'][$i]['id'] }} Código:
                                    {{ $pais['provincias'][$i]['code'] }} Código del país:
                                    {{ $pais['provincias'][$i]['country_code'] }} Nombre:
                                    {{ $pais['provincias'][$i]['nombre'] }}</li>
                            @endfor
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
