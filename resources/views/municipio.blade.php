<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Municipio</title>
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-4">Municipio</h4>
        <div class="row d-flex justify-content-center">
            <div class="col-8 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Código</th>
                            <th scope="col">Código de provincia</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($data as $municipios)
                            <tr>
                                <td class="fw-bold">{{ $municipios['id'] }}</td>
                                <td class="fw-bold">{{ $municipios['code'] }}</td>
                                <td class="fw-bold">{{ $municipios['province_code'] }}</td>
                                <td class="fw-bold">{{ $municipios['nombre'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Provincia</h5>
                <div class="card" style="width: 35rem;">
                    <ul class="list-group list-group-flush">
                        @foreach ($data as $municipios)
                            <li class="list-group-item">Id: {{ $municipios['provincia']['id'] }} Código:
                                {{ $municipios['provincia']['code'] }} Código del país:
                                {{ $municipios['provincia']['country_code'] }} Nombre:
                                {{ $municipios['provincia']['nombre'] }}</li>
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
