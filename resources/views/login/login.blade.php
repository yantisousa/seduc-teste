@extends('layouts.menu')
@section('content')
    <style>
        body {
            background-color: #c8cfca;
        }

        .conteiner-login {
            height: calc(100vh - 78px) !important;
        }

        .coluna-login {
            height: 100%;
        }

        .form-login {
            margin-top: 100px;
            width: ;
        }

        .btn-login {}

        .form-login h4 {
            text-align: center;
            position: relative;
            bottom: 50px;
        }
    </style>
    <div class="container conteiner-login">
        <div class="row coluna-login">
            <div class="col-md-4 offset-md-4 align-self-center "
                style="background-color: white; height:400px; border-radius: 10px; box-shadow:0 0px 3px #67736b;">
                <form class="form-login" action="{{ route('professores.login') }}" method="POST">
                    @csrf
                    <h4>Faça seu login</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                    placeholder="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <input class="form-control" type="password" name="password"  id="exampleFormControlInput1"
                                    placeholder="Senha"></input>

                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@yield('login')
