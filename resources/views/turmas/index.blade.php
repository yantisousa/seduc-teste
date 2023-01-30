@extends('layouts.menu')
@section('content')
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
            width: 600px !important;
            position: relative;
            left: 30%;
        }
        a {
            color: white;
            text-decoration: none;
        }

    </style>

    <body>
        <h1 style="text-align: center;">Turmas</h1>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">

                    <table class="table" sty>
                        <thead>
                            <tr>
                                <th scope="col-3">Nome</th>
                                <th scope="col-3">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($turmas as $turma)
                                <tr id="linha">
                                    <input type="hidden" value="0" id="delete">
                                    <td>{{ $turma->turma }}</td>
                                    <td><button class="btn btn-primary">Dados da turma</button></td>
                                    {{-- <td><button class="btn btn-danger" onclick="excluir({{ $turma->id }})"
                                            id="excluir">Deletar</button>
                                    </td>
                                    <td>
                                        <form action="{{ route('livros.show', $turma->id) }}" method="get">
                                            <button type="submit" class="btn btn-primary">cadastrar livro</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('livros.index', $turma->id) }}" method="get">
                                            <button type="submit" id="excluir" class="btn btn-info">Ver livros do turma</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @empty
                                <h6>não tem registros</h6>
                                <button class="btn btn-primary"><a href="{{ route('turmas.create') }}">Criar turmas</a></button>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/index.js"></script>
    </body>

    </html>
@endsection
