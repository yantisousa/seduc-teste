<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .table {
        width: 600px;
        position: relative;
        left: 30%;
    }
    a {
        text-decoration: none;
    }
</style>

<body>
    <table class="table" sty>
        <thead>
            <tr>
                <th scope="col-3">ID</th>
                <th scope="col-3">Titulo</th>
                <th scope="col-3">Ano</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($dadosLivros as $livros)
                <tr>
                    <th scope="row" id="teste">{{ $livros->id }}</th>
                    <td>{{ $livros->titulo }}</td>
                    <td>{{ date('d/m/Y', strtotime($livros->ano)) }}</td>
                @empty
                <h6>não tem registros</h6>
            @endforelse
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
     <script src="/assets/js/jquery.js"></script>
     <script src="/assets/js/index.js"></script>
</body>

</html>
